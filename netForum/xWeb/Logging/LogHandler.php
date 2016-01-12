<?php

namespace netForum\xWeb\Logging;

abstract class LogHandler implements ILogHandler {
  /**
   * Borrowed from rfc3164, Same as Drupal Watchdog.
   *
   * Numerical Code         Severity
   *
   *
   * 0       Emergency: system is unusable
   * 1       Alert: action must be taken immediately
   * 2       Critical: critical conditions
   * 3       Error: error conditions
   * 4       Warning: warning conditions
   * 5       Notice: normal but significant condition
   * 6       Informational: informational messages
   * 7       Debug: debug-level messages
   *
   */

  const ERROR = 3;
  const INFORMATIONAL = 6;
  const DEBUG = 7;

  /**
   * @var \netForum\xWeb\Logging\ILogHandler
   */
  protected static $Logger;

  /**
   * @return \netForum\xWeb\Logging\ILogHandler
   */
  public static function GetLogger() {
    return LogHandler::$Logger;
  }

  /**
   * @param \netForum\xWeb\Logging\ILogHandler $logHandler
   */
  public static function SetLogger(ILogHandler $logHandler) {
    LogHandler::$Logger = $logHandler;
  }

  /**
   * @param \Exception $exception
   */
  public static function LogException(\Exception $exception) {
    if (LogHandler::$Logger instanceof ILogHandler) {
      LogHandler::$Logger->writeExceptionMessage($exception, LogHandler::ERROR);
    }
  }
}
