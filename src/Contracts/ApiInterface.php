<?php

namespace Alikhedmati\ApiResponse\Contracts;

use Illuminate\Support\Collection;

interface ApiInterface
{
    public function success(string $message, Collection|array $data = [], int $status = 200);

    public function failure(string $message, Collection|array $errors = null, int $status = 400);
}