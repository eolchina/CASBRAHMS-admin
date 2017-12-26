<?php

namespace App\Models\Data;

use Illuminate\Database\Eloquent\Model;

/**
* Herbarium
*/
class Herbarium extends Model
{
    protected $table = 'data_herbaria';

    public function specimens()
    {
        return $this->hasMany(Specimen::class);
    }
}
