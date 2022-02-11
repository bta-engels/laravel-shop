<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

class ApiController
{
    public function __construct(Request $request)
    {
        if($request->header('X-Lang')) {
            app()->setLocale($request->header('X-Lang'));
        }
    }
}
