<?php
namespace App\Traits;

use Illuminate\Http\JsonResponse;

trait Responses {

    public function coreResponse($message, $data = null, $statusCode, $isSuccess = true) {
        if(!$message) return response()->json(['message' => 'Insira uma mensagem!'], 500);

        if($isSuccess) {
            return response()->json([
                'message' => $message,
                'error' => false,
                'code' => $statusCode,
                'results' => $data
            ], $statusCode);
        }  else {
            return response()->json([
                'message' => $message,
                'error' => true,
                'code' => $statusCode,
            ], $statusCode);
        }
    }

    /**
     * Send any success response
     *
     * @param   string          $message
     * @param   integer         $statusCode
     */

    public function success($message, $data, $statusCode = JsonResponse::HTTP_OK)
    {
        return $this->coreResponse($message, $data, $statusCode);
    }

    /**
     * Send any error response
     *
     * @param   string          $message
     * @param   integer         $statusCode
     */

    public function error($message, $statusCode = JsonResponse::HTTP_INTERNAL_SERVER_ERROR)
    {
        return $this->coreResponse($message, null, $statusCode, false);
    }
}
