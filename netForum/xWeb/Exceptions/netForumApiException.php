<?php

namespace netForum\xWeb\Exceptions;

use netForum\xWeb\Logging\LogHandler;

class netForumApiException extends \Exception {
  public function __construct($message = "", $code = 0, \Exception $previous = NULL) {
    parent::__construct($message, $code, $previous);

    LogHandler::LogException($this);
  }
}
