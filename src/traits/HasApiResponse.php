<?php

namespace AliKhedmati\APIResponse;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Collection;

trait HasApiResponse
{
    /**
     * @param string $message
     * @param Collection|array $data
     * @param int $status
     * @return JsonResponse
     */

    protected function successResponse(string $message, Collection|array $data = [], int $status = 200): JsonResponse
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

    protected function failureResponse(string $message, Collection|array $errors = null, int $status = 400): JsonResponse
    {
        return response()->json([
            'message'   =>  $message,
            'errors'    =>  $errors
        ], $status);
    }
}
