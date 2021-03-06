<?php

namespace App\Models;

use Database\Factories\CategoryFactory;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

/**
 * App\Models\Category
 *
 * @property int $id
 * @property string $name
 * @property-read Collection|Product[] $products
 * @property-read int|null $products_count
 * @method static CategoryFactory factory(...$parameters)
 * @method static Builder|Category newModelQuery()
 * @method static Builder|Category newQuery()
 * @method static Builder|Category query()
 * @method static Builder|Category whereId($value)
 * @method static Builder|Category whereName($value)
 * @mixin Eloquent
 * @property-read array $translations
 */
class Category extends Model
{
    use HasFactory,HasTranslations;






    protected $guarded = ['id'];
    public $timestamps = false;
    // all translatable columns as array
    public $translatable = ['name'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

}
