<?php

namespace Tecnoponto\D4sign\Services;

class Batches extends Client
{
    public function create($keys)
    {
        return $this->post('batches', ['keys' => $keys]);
    }
}
