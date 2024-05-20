<?php

namespace Tecnoponto\D4sign\Services;

class Account extends Client
{
    public function balance()
    {
        return $this->get('account/balance');
    }
}
