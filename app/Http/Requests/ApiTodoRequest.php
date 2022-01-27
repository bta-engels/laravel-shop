<?php

namespace App\Http\Requests;

class ApiTodoRequest extends ApiMainRequest
{
    protected function prepareForValidation()
    {
        $this->merge(['done' => $this->done ?? 0]);
    }
}
