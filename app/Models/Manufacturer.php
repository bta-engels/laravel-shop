<?php

namespace App\Models;

use Database\Factories\ManufacturerFactory;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Manufacturer
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property-read Collection|Product[] $product
 * @property-read int|null $product_count
 * @method static Builder|Manufacturer newModelQuery()
 * @method static Builder|Manufacturer newQuery()
 * @method static Builder|Manufacturer query()
 * @method static Builder|Manufacturer whereDescription($value)
 * @method static Builder|Manufacturer whereId($value)
 * @method static Builder|Manufacturer whereName($value)
 * @mixin Eloquent
 * @property-read Collection|Product[] $products
 * @property-read int|null $products_count
 * @method static ManufacturerFactory factory(...$parameters)
 */
class Manufacturer extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    public $timestamps = false;

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
