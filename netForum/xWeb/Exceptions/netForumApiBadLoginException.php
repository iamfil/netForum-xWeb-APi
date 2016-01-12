<?php

namespace netForum\xWeb\Exceptions;

class netForumApiBadLoginException extends netForumApiException {
  public function __construct($message = "", $code = 0, \Exception $previous = NULL) {
    parent::__construct($message, $code, $previous);
  }
}
