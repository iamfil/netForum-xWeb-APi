<?php

use netForum\xWeb\Logging\ILogHandler;
use netForum\xWeb\Logging\LogHandler;

/**
 * Class DrupalDevelNetForumXMLApiLogger
 *
 * Implements a ILogHandler backed by the Drupal's Devel module.
 */
class DrupalDevelNetForumXMLApiLogger extends LogHandler implements ILogHandler {
  /**
   * @param string $message
   * @param int $severity
   */
  public function writeStringMessage($message, $severity = LogHandler::ERROR) {
    dpm($message);
  }


  /**
   * @param string $xmlMessage
   * @param int $severity
   */
  public function writeXmlStringMessage($xmlMessage, $severity = LogHandler::ERROR) {
    dpm($xmlMessage);
  }


  /**
   * @param \Exception $exception
   * @param int $severity
   */
  public function writeExceptionMessage(\Exception $exception, $severity = LogHandler::ERROR) {
    dpm($exception);
  }
}
