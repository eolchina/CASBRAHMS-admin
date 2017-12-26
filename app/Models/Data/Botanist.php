<?php

namespace App\Models\Data;

use Illuminate\Database\Eloquent\Model;

/**
* Botanist
*/
class Botanist extends Model
{
    protected $table = 'data_botanists';

    public function specimens()
    {
        return $this->hasMany(Specimen::class);
    }

    public function determinations()
    {
        return $this->hasMany(Determination::class);
    }

    public function collections()
    {
        return $this->hasMany(Collection::class);
    }
}
