<?php

namespace netForum\xWeb\Exceptions;

class netForumApiMaxAuthRetriesException extends netForumApiException {
  public function __construct($message = "", $code = 0, \Exception $previous = NULL) {
    parent::__construct($message, $code, $previous);
  }
}
