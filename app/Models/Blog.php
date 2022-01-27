<?php

namespace App\Models;

use Database\Factories\BlogFactory;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\Blog
 *
 * @property int $id
 * @property string $title
 * @property string|null $body
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static BlogFactory factory(...$parameters)
 * @method static Builder|Blog newModelQuery()
 * @method static Builder|Blog newQuery()
 * @method static Builder|Blog query()
 * @method static Builder|Blog whereBody($value)
 * @method static Builder|Blog whereCreatedAt($value)
 * @method static Builder|Blog whereId($value)
 * @method static Builder|Blog whereTitle($value)
 * @method static Builder|Blog whereUpdatedAt($value)
 * @mixin Eloquent
 */
class Blog extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
}
