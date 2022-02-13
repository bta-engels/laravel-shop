<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

class ApiController
{
    protected $translate = false;

    public function __construct(Request $request)
    {
        $localeHeaderName = config('language.api.locale.headerName');
        if($request->header($localeHeaderName)) {
            app()->setLocale($request->header($localeHeaderName));
            $this->translate = true;
        }
    }
}
