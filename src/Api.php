<?php

namespace Alikhedmati\ApiResponse;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Response;

class Api
{
    /**
     * @var int
     */

    protected int $statusCode;

    /**
     * @var Collection|array
     */

    protected Collection|array $data;

    /**
     * @var string
     */

    protected string $message;
    
    /**
     * @param int $statusCode
     * @return $this
     */

    public function setStatusCode(int $statusCode): static
    {
        $this->statusCode = $statusCode;

        return $this;
    }

    /**
     * @param Collection|array $data
     * @return $this
     */

    public function setData(Collection|array $data): static
    {
        $this->data = $data;

        return $this;
    }

    /**
     * @param string $message
     * @return $this
     */

    public function setMessage(string $message): static
    {
        $this->message = $message;

        return $this;
    }

    /**
     * @return string
     */

    protected function generateMessage(): string
    {
        return trans('api-response::httpStatusCodes.'. $this->statusCode . '.large');
    }

    /**
     * @return JsonResponse
     */

    public function response(): JsonResponse
    {
        return Response::json([
            'message' => $this?->message ?? $this->generateMessage(),
            'data' => $this->data
        ], $this->statusCode);
    }
}
