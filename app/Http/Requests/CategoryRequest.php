<?php

namespace App\Http\Requests;

use App\Models\Category;


class CategoryRequest extends MainRequest
{
    public function validated()
    {
        $category = new Category();
        $translatables = $category->getTranslatableAttributes();
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
            if(in_array($key, $translatables)) {
                $validated[$key]=[$locale => $val];
            }
        }

        return $validated;
    }
}
