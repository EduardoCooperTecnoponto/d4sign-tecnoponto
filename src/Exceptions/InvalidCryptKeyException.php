<?php

namespace Tecnoponto\D4sign\Exceptions;

class InvalidCryptKeyException extends \Exception
{
    protected $message = 'CryptKey not found.';
}
