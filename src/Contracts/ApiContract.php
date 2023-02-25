<?php

namespace Alikhedmati\ApiResponse\Contracts;

use Illuminate\Support\Collection;

interface ApiContract
{
    public function success(string $message, Collection|array $data = [], int $status = 200);

    public function failure(string $message, Collection|array $errors = [], int $status = 400);
}