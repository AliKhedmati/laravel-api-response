<?php

namespace Alikhedmati\ApiResponse;

use Alikhedmati\ApiResponse\Contracts\ApiContract;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Response;

class Api
{

    /**
     * @var int
     */

    protected int $statusCode = 200;

    /**
     * @var Collection|array
     */

    protected Collection|array $data = [];
    
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
     * @return int
     */

    protected function getStatusCode(): int
    {
        return $this->statusCode;
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
     * @return array|Collection
     */

    public function getData(): array|Collection
    {
        return $this->data;
    }

    /**
     * @return string
     */

    protected function generateMessage(): string
    {
        return trans('api-response::httpStatusCodes.'. $this->getStatusCode() . '.large');
    }

    /**
     * @return JsonResponse
     */

    public function response(): JsonResponse
    {
        return Response::json([
            'message' => $this->generateMessage(),
            'data' => $this->getData()
        ], $this->getStatusCode());
    }
}
