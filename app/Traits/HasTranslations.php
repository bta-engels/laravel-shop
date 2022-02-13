<?php

namespace App\Traits;

use App;
use Spatie\Translatable\HasTranslations as BaseHasTranslations;

trait HasTranslations
{
    use BaseHasTranslations;
    /**
     * Convert the model instance to an array.
     *
     * @return array
     */
    public function toArray()
    {
        $attributes = parent::toArray();
        $localeHeaderName = config('language.api.locale.headerName');
        if(request()->header($localeHeaderName)) {
            return $attributes;
        }

        foreach ($this->getTranslatableAttributes() as $field) {
            $attributes[$field] = $this->getTranslation($field, App::getLocale());
        }

        return $attributes;
    }
}
