<?php

namespace App\Models;

use Database\Factories\FeatureFactory;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\Feature
 *
 * @property int $id
 * @property string $title
 * @property string|null $body
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static FeatureFactory factory(...$parameters)
 * @method static Builder|Feature newModelQuery()
 * @method static Builder|Feature newQuery()
 * @method static Builder|Feature query()
 * @method static Builder|Feature whereBody($value)
 * @method static Builder|Feature whereCreatedAt($value)
 * @method static Builder|Feature whereId($value)
 * @method static Builder|Feature whereTitle($value)
 * @method static Builder|Feature whereUpdatedAt($value)
 * @mixin Eloquent
 */
class Feature extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
}
