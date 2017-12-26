<?php

namespace App\Models\Data;

use Illuminate\Database\Eloquent\Model;

/**
* Geolocation
*/
class Geolocation extends Model
{
    protected $table = 'data_geolocations';

    public function collections()
    {
        return $this->hasMany(Collection::class);
    }

    public function specimens()
    {
        return $this->morphedByMany(Specimen::class, 'data_geolocationable');
    }

    public function specimenimages()
    {
        return $this->morphedByMany(SpecimenImage::class, 'data_geolocationable');
    }
}
