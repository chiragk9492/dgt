<?php

namespace App\Http\Responses;

class ApiResponse
{
    public static function success($data, $message = '', $statusCode = 200)
    {
        $response = [
            'success' => true,
            'message' => $message,
            'data' => $data,
        ];

        return response()->json($response, $statusCode);
    }

    public static function error($message, $statusCode = 400)
    {
        $response = [
            'success' => false,
            'message' => $message,
        ];

        return response()->json($response, $statusCode);
    }
}

?>