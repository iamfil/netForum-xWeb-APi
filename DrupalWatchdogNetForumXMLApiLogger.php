<?php

use netForum\xWeb\Logging\ILogHandler;
use netForum\xWeb\Logging\LogHandler;

/**
 * Class DrupalWatchdogNetForumXMLApiLogger
 *
 * Implements a ILogHandler backed by Drupal's Watchdog.
 */
class DrupalWatchdogNetForumXMLApiLogger implements ILogHandler {

  /**
   * @param string $message
   * @param int $severity
   */
  public function writeStringMessage($message, $severity) {
    watchdog('netforum_xweb_api', $message, NULL, $severity);
  }

  /**
   * @param string $xmlMessage
   * @param int $severity
   */
  public function writeXmlStringMessage($xmlMessage, $severity) {
    watchdog('netforum_xweb_api', htmlentities($xmlMessage, ENT_QUOTES, 'UTF-8'), NULL, $severity);
  }

  /**
   * @param \Exception $exception
   * @param int $severity
   */
  public function writeExceptionMessage(\Exception $exception, $severity = LogHandler::ERROR) {
    watchdog('netforum_xweb_api', $exception, NULL, $severity);
  }
}
