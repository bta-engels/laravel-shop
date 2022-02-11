<?php

namespace App\Http\Requests;

use App\Models\Product;

class ProductRequest extends MainRequest
{
    public function validated()
    {
        $model = new Product;
        $translatables = $model->getTranslatableAttributes();
        $locale = app()->getLocale();
        $validated = parent::validated();

        foreach($validated as $key => $val) {
            // if $key in translatable array then modify array structur here
            if(in_array($key, $translatables)) {
                $validated[$key]=[$locale => $val];
            }
        }

        return $validated;
    }
}
