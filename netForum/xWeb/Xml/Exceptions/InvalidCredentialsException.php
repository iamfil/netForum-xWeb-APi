<?php

namespace netForum\xWeb\Xml\Exceptions;

class InvalidCredentialsException extends netForumException {
  public function __construct($message, $code = 0, \Exception $previous = NULL) {
    parent::__construct($message, $code, $previous);
  }
}