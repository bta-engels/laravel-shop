<?php

namespace App\Http\Requests;

class ApiTodoUpdateRequest extends ApiTodoRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'text'   => 'required|max:100|min:3',
            'done'   => 'nullable|boolean',
        ];
    }
}
