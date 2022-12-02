<?php

namespace App\Http\Controllers;

use Carbon\Traits\Mixin;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function fails($code, string $message)
    {
        return response()->json([
            'code' =>$code,
            'message' => $message,
        ]);
    }

    public function success($code, string $message, mixin $data)
    {
        return response()->json([
            'code' => $code,
            'message' => $message,
            'data' => $data,
        ]);
    }
}
