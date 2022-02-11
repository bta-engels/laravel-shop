<?php

namespace App\Http\Requests;

use App\Models\Todo;

class ApiTodoRequest extends ApiMainRequest
{
    protected function prepareForValidation()
    {
        $this->merge(['done' => $this->done ?? 0]);
    }

    public function validated()
    {
        $model = new Todo();
        $translatables = $model->getTranslatableAttributes();
        $locale = app()->getLocale();
        $validated = parent::validated();

        foreach($validated as $key => $val) {
            // if $key in translatable array then modify array structur here
            if(in_array($key, $translatables)) {
                $validated[$key] = [$locale => $val];
            }
        }

        return $validated;
    }
}
