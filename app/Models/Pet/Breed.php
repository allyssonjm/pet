<?php

namespace App\Models\Pet;

use App\Models\Pet\Dog;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * App\Models\Pet\Breed
 *
 * @property int $id
 * @property string $name
 * @property-read \Illuminate\Database\Eloquent\Collection|Dog[] $dogs
 * @property-read int|null $dogs_count
 * @method static \Illuminate\Database\Eloquent\Builder|Breed newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Breed newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Breed query()
 * @method static \Illuminate\Database\Eloquent\Builder|Breed whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Breed whereName($value)
 * @mixin \Eloquent
 */
class Breed extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name'
    ];

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
