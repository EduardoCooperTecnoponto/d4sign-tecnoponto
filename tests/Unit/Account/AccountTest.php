<?php

namespace Tecnoponto\D4sign\Tests\Unit\Account;

use Tecnoponto\D4sign\Facades\D4Sign;
use Tecnoponto\D4sign\Tests\TestCase;

class AccountTest extends TestCase
{
    /**
     *
     * @test
     */
    public function verifyGetBalance()
    {
        $this->assertJson(D4Sign::account()->balance()->getBody()->getContents());
    }
}
