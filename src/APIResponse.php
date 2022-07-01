<?php

namespace Alikhedmati\ApiResponse;

use Alikhedmati\ApiResponse\Contracts\APIInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Collection;

class APIResponse implements APIInterface
{
    /**
     * @param string $message
     * @param Collection|array $data
     * @param int $status
     * @return JsonResponse
     */

    public function success(string $message, Collection|array $data = [], int $status = 200): JsonResponse
    {
        return response()->json([
            'message'   =>  $message,
            'data'  =>  $data
        ], $status);
    }

    /**
     * @param string $message
     * @param Collection|array|null $errors
     * @param int $status
     * @return JsonResponse
     */

    public function failure(string $message, Collection|array $errors = null, int $status = 400): JsonResponse
    {
        return response()->json([
            'message'   =>  $message,
            'errors'    =>  $errors
        ], $status);
    }
}
