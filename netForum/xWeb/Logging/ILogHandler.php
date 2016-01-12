<?php

namespace netForum\xWeb\Logging;

/**
 * Interface ILogHandler
 * @package netForum\xWeb\Logging
 */
interface ILogHandler {
  /**
   * @param string $message
   * @param int $severity
   */
  public function writeStringMessage($message, $severity);


  /**
   * @param string $xmlMessage
   * @param int $severity
   */
  public function writeXmlStringMessage($xmlMessage, $severity);


  /**
   * @param \Exception $exception
   * @param int $severity
   */
  public function writeExceptionMessage(\Exception $exception, $severity);
}
