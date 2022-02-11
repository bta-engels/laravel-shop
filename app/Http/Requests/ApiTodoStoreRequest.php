<?php

namespace App\Http\Requests;

use App\Models\Todo;

class ApiTodoStoreRequest extends ApiTodoRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'text'   => 'required|unique:todos|max:100|min:3',
            'done'   => 'nullable|boolean',
        ];
    }

    public function validated()
    {
        $model = new Todo();
        $translatables = $model->getTranslatableAttributes();
        $validated = parent::validated();
        $locales = config('languages.lang');

        foreach($validated as $key => $val) {
            // if $key in translatable array then modify array structur here
            if(in_array($key, $translatables)) {
                $validated[$key] = [];
                foreach($locales as $lang) {
                    $validated[$key] += [$lang => $val];
                }
            }
        }

        return $validated;
    }
}
