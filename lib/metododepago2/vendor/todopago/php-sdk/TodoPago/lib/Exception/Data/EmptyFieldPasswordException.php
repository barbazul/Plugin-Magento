<?php

namespace TodoPago\Exception\Data;

class EmptyFieldUserException extends EmptyFieldException {

    public function __construct($field = "Data\\User::password", $code = 0, Exception $previous = null) {
		parent::__construct($field, $code, $previous);
    }

}