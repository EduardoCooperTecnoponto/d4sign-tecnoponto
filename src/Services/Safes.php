<?php

namespace Tecnoponto\D4sign\Services;

class Safes extends Client
{
    /**
     * @param  string  $safeKey
     *
     * @return mixed
     */
    public function find($uuidSafe = '')
    {
        return $this->get('safes/' . $uuidSafe);
    }
}
