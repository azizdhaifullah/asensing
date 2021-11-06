<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class ApiController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function setResponse($status, $message = null, $data = null){

        $response = [
            'status' => $status,
            'message' => $message ? $message: "Undefined",
            'data' => $data
        ];

        return response()->json($response, $status);
    }
}
