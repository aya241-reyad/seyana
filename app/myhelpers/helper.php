<?php

use Illuminate\Http\JsonResponse;






 function ResponseJson($status,$message,$data=null):JsonResponse{
    $response=[
        'status'=>$status,
        'message'=>$message,
        'data'=>$data

       ];
       return response()->json($response);


}