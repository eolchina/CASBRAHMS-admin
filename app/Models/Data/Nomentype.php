<?php

namespace App\Models\Data;

use Illuminate\Database\Eloquent\Model;

/**
* Nomentype
*/
class Nomentype extends Model
{
    protected $table = 'data_nomentypes';

    public function specimens()
    {
        return $this->hasMany(Specimen::class);
    }
}
