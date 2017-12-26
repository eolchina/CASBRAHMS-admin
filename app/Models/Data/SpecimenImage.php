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
        return $this->morphToMany(Geolocation::class, 'data_geolocationable');
    }

    public function geomountains()
    {
        return $this->morphToMany(Geomountain::class, 'data_geomountainable');
    }

    public function terms()
    {
        return $this->morphToMany(Term::class, 'data_termable');
    }
}
