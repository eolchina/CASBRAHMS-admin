<?php

namespace App\Models\Data;

use Illuminate\Database\Eloquent\Model;

/**
* Geomountain
*/
class Geomountain extends Model
{
    protected $table = 'data_geomountains';

    public function collections()
    {
        return $this->hasMany(Collection::class);
    }

    public function specimens()
    {
        return $this->morphedByMany(Specimen::class, 'data_geomountainable');
    }

    public function specimenimages()
    {
        return $this->morphedByMany(SpecimenImage::class, 'data_geomountainable');
    }
}
