<?php

namespace Alikhedmati\ApiResponse;

use Alikhedmati\ApiResponse\Contracts\ApiContract;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Response;

class Api implements ApiContract
{
    /**
     * @param string $message
     * @param Collection|array $data
     * @param int $status
     * @return JsonResponse
     */

    public function success(string $message, Collection|array $data = [], int $status = 200): JsonResponse
    {
        return Response::json([
            'message' => $message,
            'data' => $data
        ], $status);
    }

    /**
     * @param string $message
     * @param Collection|array $errors
     * @param int $status
     * @return JsonResponse
     */

    public function failure(string $message, Collection|array $errors = [], int $status = 400): JsonResponse
    {
        return Response::json([
            'message' => $message,
            'errors' => $errors
        ], $status);
    }
}
