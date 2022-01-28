<?php

namespace App\Models\Pet;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Pet\Tutor
 *
 * @property int $id
 * @property string $name
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Pet\Dog[] $dogs
 * @property-read int|null $dogs_count
 * @method static \Illuminate\Database\Eloquent\Builder|Tutor newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tutor newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tutor query()
 * @method static \Illuminate\Database\Eloquent\Builder|Tutor whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tutor whereName($value)
 * @mixin \Eloquent
 */
class Tutor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public $timestamps = false;

    /**
     * Get all of the dogs for the Breed
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function dogs()
    {
        return $this->hasMany(Dog::class);
    }
}
