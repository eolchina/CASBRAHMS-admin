<?php

namespace App\Models\Data;

use Illuminate\Database\Eloquent\Model;

/**
* Specimen
*/
class Specimen extends Model
{
    protected $table = 'data_specimens';

    public function collection()
    {
        return $this->belongsTo(Collection::class);
    }

    public function determination()
    {
        return $this->belongsTo(Determination::class);
    }

    public function collector()
    {
        return $this->belongsTo(Collector::class);
    }

    public function botanist()
    {
        return $this->belongsTo(Botanist::class);
    }

    public function herbarium()
    {
        return $this->belongsTo(Herbarium::class);
    }

    public function specimenimages()
    {
        return $this->hasMany(SpecimenImage::class);
    }

    public function geolocations()
    {
        return $this->morphToMany(Geolocation::class, 'data_geolocationable');
    }

    public function geomountain()
    {
        return $this->morphToMany(Geomountain::class, 'data_geomountainable');
    }

    public function nomentype()
    {
        return $this->belongsTo(Nomentype::class);
    }

    public function terms()
    {
        return $this->morphToMany(Term::class, 'termable');
    }
}
