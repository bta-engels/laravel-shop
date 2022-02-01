<?php

namespace App\Http\Requests;

use App\Models\Product;

class ProductRequest extends MainRequest
{
    public function validated()
    {
        $product = new Product;
        $translatables = $product->getTranslatableAttributes();
        $locale = app()->getLocale();
        $validated = parent::validated();
/*
 // via collection functions
        $validated = collect(parent::validated())->map(function ($item, $key) use ($translatables, $locale) {
            if(in_array($key, $translatables)) {
                return [$locale => $item];
            }
            return $item;
        })->toArray();
*/
        foreach($validated as $key => $val) {
            // if $key in translatable array then modify array structur here
        }
        dd($validated);

        return $validated;
    }
}
