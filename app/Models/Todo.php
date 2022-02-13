<?php

namespace App\Models;

use Database\Factories\TodoFactory;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use App\Traits\HasTranslations;

/**
 * App\Models\Todo
 *
 * @property int $id
 * @property string $text
 * @property int $done
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static TodoFactory factory(...$parameters)
 * @method static Builder|Todo newModelQuery()
 * @method static Builder|Todo newQuery()
 * @method static Builder|Todo query()
 * @method static Builder|Todo whereCreatedAt($value)
 * @method static Builder|Todo whereDone($value)
 * @method static Builder|Todo whereId($value)
 * @method static Builder|Todo whereText($value)
 * @method static Builder|Todo whereUpdatedAt($value)
 * @mixin Eloquent
 * @property-read array $translations
 */
class Todo extends Model
{
    use HasFactory, HasTranslations;
    protected $guarded = ['id'];
    public $translatable = ['text'];
}
