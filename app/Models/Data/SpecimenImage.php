<?php

namespace App\Models\Data;

use Illuminate\Database\Eloquent\Model;

/**
* SpecimenImage
*/
class SpecimenImage extends Model
{
    protected $table = 'data_specimen_images';

    public function specimen()
    {
        return $this->belongsTo(Specimen::class);
    }

    public function geolocations()
    {
        return $this->morphToMany(Geolocation::class, 'geolocationable', 'geolocationables');
    }

    public function geomountains()
    {
        return $this->morphToMany(Geomountain::class, 'geomountainable', 'geomountainables');
    }

    public function terms()
    {
        return $this->morphToMany(Term::class, 'termable', 'termables');
    }
}
