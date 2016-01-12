<?php

namespace netForum\xWeb\Xml\Exceptions;

use netForum\xWeb\Logging\LogHandler;

/**
 * Base class for all netFoxum XML web service response exceptions.
 *
 * Class netForumException
 * @package netForum\xWeb\Xml\Exceptions
 */
class netForumException extends \Exception {
  public function __construct($message = "", $code = 0, \Exception $previous = NULL) {
    parent::__construct($message, $code, $previous);

    LogHandler::LogException($this);
  }

  public static function FromSoapFaultException(\SoapFault $soapFault) {
    return new self($soapFault->getMessage(), $soapFault->getCode(), $soapFault);
  }
}
