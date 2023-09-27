<?php
namespace App\Http\Controllers\Api;

trait ApiResponseTrait
{
    public function apiResponse($data = null , $msg = null, $status = null){

        $array = [
            'data' => $data ,
            'status' => $status,
            'message' => $msg
        ];

        return response($array , $status);
    }
}
