<?php

namespace App\Models;

use Database\Factories\ProductFactory;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

/**
 * App\Models\Product
 *
 * @property int $id
 * @property int|null $category_id
 * @property int $manufacturer_id
 * @property string $name
 * @property string|null $description
 * @property string|null $image
 * @property-read Manufacturer $manufacturer
 * @method static Builder|Product newModelQuery()
 * @method static Builder|Product newQuery()
 * @method static Builder|Product query()
 * @method static Builder|Product whereCategoryId($value)
 * @method static Builder|Product whereDescription($value)
 * @method static Builder|Product whereId($value)
 * @method static Builder|Product whereImage($value)
 * @method static Builder|Product whereManufacturerId($value)
 * @method static Builder|Product whereName($value)
 * @mixin Eloquent
 * @property-read Category $category
 * @property-read mixed $cm
 * @method static ProductFactory factory(...$parameters)
 */
class Product extends Model
{
    use HasFactory;

    //use HasTranslations;

    //public $translatable = ['name'];



    protected $guarded = ['id'];
    protected $appends = ['cm'];
    public $timestamps = false;


    public function getCmAttribute()
    {
        $category = $this->category->name;
        $manufacturer = $this->manufacturer->name;
        return "($category) $manufacturer";
    }


    public function manufacturer()
    {
        return $this->belongsTo(Manufacturer::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
