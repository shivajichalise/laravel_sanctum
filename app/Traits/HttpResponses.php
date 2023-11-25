<?php

namespace App\Traits;

use Symfony\Component\HttpFoundation\JsonResponse;

trait HttpResponses
{
    protected function success($data, $message = null, $code = 200): JsonResponse
    {
        return response()->json([
            'status' => 'Request was successfull.',
            'message' => $message,
            'data' => $data
        ], $code);
    }

    protected function error($data, $message = null, $code): JsonResponse
    {
        return response()->json([
            'status' => 'Error has occured.',
            'message' => $message,
            'data' => $data
        ], $code);
    }
}
