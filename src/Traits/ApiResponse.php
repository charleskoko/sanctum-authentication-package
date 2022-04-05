<?php

namespace Charleskoko\SanctumAuthentication\Traits;

use Illuminate\Http\JsonResponse;

trait ApiResponse
{

    protected function success(?array $data = null, ?string $message = null , ?int $code = 200): JsonResponse
    {
        return response()->json([
            'status' => 'Success',
            'message' => $message,
            'data' => $data
        ], $code);
    }


    protected function error( ?int $code, ?array $data = null, ?string $message = null): JsonResponse
    {
        return response()->json([
            'status' => 'Error',
            'message' => $message,
            'data' => $data
        ], $code);
    }

}
