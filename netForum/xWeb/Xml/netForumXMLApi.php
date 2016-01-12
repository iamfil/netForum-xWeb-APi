<?php

namespace netForum\xWeb\Xml;

use netForum\xWeb\Exceptions\netForumApiBadLoginException;
use netForum\xWeb\Exceptions\netForumApiException;
use netForum\xWeb\Exceptions\netForumApiMaxAuthRetriesException;
use netForum\xWeb\Logging\ILogHandler;
use netForum\xWeb\Logging\LogHandler;
use netForum\xWeb\Xml\Exceptions;
use netForum\xWeb\Xml\Generated;
use netForum\xWeb\Xml\Generated\Authenticate;

/**
 * Class netForumXMLApi
 * @package netForum\xWeb\Xml
 */
class netForumXMLApi extends Generated\NetForumXML {
  /**
   * Avectra XML Namespace
   */
  const AVECTRA_NS = 'http://www.avectra.com/2005/';

  /**
   * Contains Web Methods that should not have Soap Headers sent.
   *
   * @var array
   */
  protected static $DoNotUseHeaders = array(
    'TestConnection',
    'GetDateTime',
    'Authenticate'
  );

  protected $SoapHeaders;

  protected $LogHandler;

  protected $AuthorizationToken;
  protected $AuthorizationMaxRetries = 3;  // todo: make this field configurable.

  protected $xWebWsdl;
  protected $xWebUsername;
  protected $xWebPassword;

  protected $Debugging;

  /**
   * @param \netForum\xWeb\Xml\InetForumXMLApiConfig $netForumXMLApiConfig
   * @throws \netForum\xWeb\Exceptions\netForumApiException
   */
  public function __construct(InetForumXMLApiConfig $netForumXMLApiConfig) {
    $this->xWebWsdl = $netForumXMLApiConfig->getWsdlUrl();
    $this->xWebUsername = $netForumXMLApiConfig->getUsername();
    $this->xWebPassword = $netForumXMLApiConfig->getPassword();
    $this->LogHandler = $netForumXMLApiConfig->getLogHandler();
    $this->Debugging = $netForumXMLApiConfig->getLogDebugEnabled();

    LogHandler::SetLogger($this->LogHandler);

    $this->AuthorizationToken = NULL;

    if (!isset($this->xWebWsdl) || !isset($this->xWebUsername) || !isset($this->xWebPassword)) {
      throw new netForumApiException('netForum xWeb API has not been properly
       configured. A WSDL Url, Username and Password must be set.');
    }

    $soapOptions = array(
      'user_agent' => 'Drupal netForum xWeb API',
      'compression' => SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE | SOAP_COMPRESSION_GZIP,
      'exceptions' => TRUE,
      'cache_wsdl' => WSDL_CACHE_BOTH,
      'keep_alive' => TRUE
    );

    parent::__construct($soapOptions, $this->xWebWsdl);

    $this->Authenticate(new Generated\Authenticate($this->xWebUsername, $this->xWebPassword));
  }

  /**
   * @param \netForum\xWeb\Xml\Generated\Authenticate $parameters
   * @return \netForum\xWeb\Xml\Generated\AuthenticateResponse
   */
  public function Authenticate(Authenticate $parameters) {
    $this->xWebUsername = $parameters->getUserName();
    $this->xWebPassword = $parameters->getPassword();

    return parent::Authenticate($parameters);
  }

  /**
   * @return string|null
   */
  public function GetAuthorizationToken() {
    return $this->AuthorizationToken;
  }

  /**
   * @param string $function_name
   * @param array $arguments
   * @param array|null $options
   * @param array|null $input_headers
   * @param array|null $output_headers
   * @return mixed|null
   * @throws \netForum\xWeb\Exceptions\netForumApiBadLoginException
   * @throws \netForum\xWeb\Exceptions\netForumApiMaxAuthRetriesException
   * @throws \netForum\xWeb\Xml\Exceptions\InvalidCredentialsException
   * @throws \netForum\xWeb\Xml\Exceptions\LockedCredentialsException
   * @throws \netForum\xWeb\Xml\Exceptions\SystemException
   * @throws \netForum\xWeb\Xml\Exceptions\netForumException
   */
  public function __soapCall($function_name, $arguments, $options = NULL, $input_headers = NULL, &$output_headers = NULL) {
    $response = NULL;

    $previousHeaders = NULL;

    try {
      // stupid: Some web methods cause xWeb to throw an exception
      // if a authentication token is set and mustUnderstand is set to true on
      // the soap header.
      if (in_array($function_name, netForumXMLApi::$DoNotUseHeaders, TRUE)) {
        $previousHeaders = $this->SoapHeaders;

        $this->__setSoapHeaders(NULL);
      }

      $response = parent::__soapCall($function_name, $arguments, $options, $input_headers, $output_headers);

      if (in_array($function_name, netForumXMLApi::$DoNotUseHeaders, TRUE)) {
        $this->__setSoapHeaders($previousHeaders);
      }
    }
    catch (\SoapFault $e) {
      if (!isset($e->detail)) {
        throw Exceptions\netForumException::FromSoapFaultException($e);
      }
      else {
        // the netForum xWeb documentation is not clear on responses when
        // requests fail. Web methods have inconsistent error responses. Also
        // not sure if every field is constant or not. Better safe then sorry.

        //region netForum_xWeb_Exceptions
        // InvalidCredentialsExceptionInfo
        if (isset($e->detail->InvalidCredentialsExceptionInfo)
          && is_object($e->detail->InvalidCredentialsExceptionInfo)
        ) {
          $message = 'InvalidCredentialsExceptionInfo';

          if (isset($e->detail->InvalidCredentialsExceptionInfo->XWebException)
            && is_object($e->detail->InvalidCredentialsExceptionInfo->XWebException)
            && isset($e->detail->InvalidCredentialsExceptionInfo->XWebException->Message)
          ) {
            $message = $e->detail->InvalidCredentialsExceptionInfo->XWebException->Message;
          }

          throw new Exceptions\InvalidCredentialsException($message, 0, $e);
        }

        // InvalidTokenException
        if (isset($e->detail->InvalidTokenException)
          && is_object($e->detail->InvalidTokenException)
        ) {
          static $authRetries = 0;

          // If our token has expired, we will attempt to re-authenticate and get
          // a new token and resend our original request.
          try {
            if ($this->LogHandler instanceof ILogHandler) {
              $this->LogHandler->writeStringMessage('Received InvalidTokenException,
              trying to login again. Attempts so far: ' . $authRetries . '.', LogHandler::INFORMATIONAL);
            }

            $this->Authenticate(new Generated\Authenticate($this->xWebUsername, $this->xWebPassword));
          }
          catch (Exceptions\netForumException $e) {
            throw new netForumApiBadLoginException('The supplied xWeb Username
              and Password appear to be incorrect. Unable to re-authenticate to
              get new Token.', 0, $e);
          }

          // We were able to login, try the original request again if we
          // haven't been down this path too many times.
          if ($authRetries >= $this->AuthorizationMaxRetries) {
            throw new netForumApiMaxAuthRetriesException('Too many attempts to
            re-authenticate and submit the same request.');
          }

          $authRetries++;

          return $this->__soapCall($function_name, $arguments, $options, $input_headers, $output_headers);
        }

        // LockedCredentialsExceptionInfo
        if (isset($e->detail->LockedCredentialsExceptionInfo)
          && is_object($e->detail->LockedCredentialsExceptionInfo)
        ) {
          $message = 'LockedCredentialsExceptionInfo';

          if (isset($e->detail->LockedCredentialsExceptionInfo->XWebException)
            && is_object($e->detail->LockedCredentialsExceptionInfo->XWebException)
            && isset($e->detail->LockedCredentialsExceptionInfo->XWebException->Message)
          ) {
            $message = $e->detail->LockedCredentialsExceptionInfo->XWebException->Message;
          }

          throw new Exceptions\LockedCredentialsException($message, 0, $e);
        }

        // SystemExceptionInfo
        if (isset($e->detail->SystemExceptionInfo)
          && is_object($e->detail->SystemExceptionInfo)
        ) {
          $message = 'SystemExceptionInfo';

          if (isset($e->detail->SystemExceptionInfo->XWebException)
            && is_object($e->detail->SystemExceptionInfo->XWebException)
            && isset($e->detail->SystemExceptionInfo->XWebException->Message)
          ) {
            $message = $e->detail->SystemExceptionInfo->XWebException->Message;
          }

          throw new Exceptions\SystemException($message, 0, $e);
        }

        // None of the above matched
        throw new Exceptions\netForumException('Unknown Exception thrown.', 0, $e);
        //endregion
      }
    }

    if (isset($output_headers) && array_key_exists('AuthorizationToken', $output_headers)
      && $output_headers['AuthorizationToken'] instanceof Generated\AuthorizationToken
    ) {

      $this->AuthorizationToken = $output_headers['AuthorizationToken']->getToken();

      // We replace our saved token with one from the response in case xWeb is
      // using sliding expiration.
      $this->__setSoapHeaders(NULL);
      $this->__setSoapHeaders(
        new \SoapHeader(netForumXMLApi::AVECTRA_NS, 'AuthorizationToken', array(
          'Token' => $this->AuthorizationToken
        ), TRUE));
    }

    return $response;
  }

  /**
   * @param null $soapHeaders
   * @return bool
   */
  public function __setSoapHeaders($soapHeaders = NULL) {
    $this->SoapHeaders = $soapHeaders;

    parent::__setSoapHeaders($soapHeaders);
  }

  /**
   * @param string $request
   * @param string $location
   * @param string $action
   * @param int $version
   * @param int $one_way
   * @return string
   */
  public function __doRequest($request, $location, $action, $version, $one_way = 0) {
    if ($this->Debugging && $this->LogHandler instanceof ILogHandler) {
      $this->LogHandler->writeXmlStringMessage($request, LogHandler::DEBUG);
    }

    $response = parent::__doRequest($request, $location, $action, $version, $one_way);

    if ($this->Debugging && $this->LogHandler instanceof ILogHandler) {
      $this->LogHandler->writeXmlStringMessage($response, LogHandler::DEBUG);
    }

    return $response;
  }
}
