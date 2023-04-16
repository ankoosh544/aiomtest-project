<?php
namespace App\Traits;

trait HttpResponses{
    protected function success($data, $messages= null, $code = 200){
        return response()->json([
            'status' => "Request was Successful.",
            'message' => $messages,
            'data' => $data,

        ], $code);
    }

    protected function error($data, $messages= null, $code){
        return response()->json([
            'status' => "Error.",
            'message' => $messages,
            'data' => $data,

        ], $code);
    }
}