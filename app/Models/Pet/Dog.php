<?php

namespace App\Models\Pet;

use App\Models\Pet\Breed;
use App\Models\Pet\Tutor;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * App\Models\Pet\Dog
 *
 * @property int $id
 * @property string $name
 * @property int $breed_id
 * @property int $tutor_id
 * @property-read Breed $breed
 * @property-read Tutor $tutor
 * @method static \Illuminate\Database\Eloquent\Builder|Dog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Dog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Dog query()
 * @method static \Illuminate\Database\Eloquent\Builder|Dog whereBreedId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Dog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Dog whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Dog whereTutorId($value)
 * @mixin \Eloquent
 */
class Dog extends Model
{
    // use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name',
        'breed_id',
        'tutor_id'
    ];

    /**
     * Get the tutor associated with the Dog
     *
     * @return Tutor
     */
    public function tutor()
    {
        return $this->belongsTo(Tutor::class);
    }

    /**
     * Get the tutor associated with the Dog
     *
     * @return Breed
     */
    public function breed()
    {
        return $this->belongsTo(Breed::class);
    }
}
