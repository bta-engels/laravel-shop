<?php

namespace App\Http\Requests;

use App\Models\Product;

class ProductRequest extends MainRequest
{
    public function validated()
    {
        $translatables = (new Product)->getTranslatableAttributes();
        $locale = app()->getLocale();

        $validated = collect(parent::validated())->map(function ($item, $key) use ($translatables, $locale) {
            if(in_array($key, $translatables)) {
                return [$locale => $item];
            }
            return $item;
        })->toArray();

        return $validated;
    }
}
