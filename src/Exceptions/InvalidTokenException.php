<?php

namespace Tecnoponto\D4sign\Exceptions;

class InvalidTokenException extends \Exception
{
    protected $message = 'API Token not found.';
}
