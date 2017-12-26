<?php

namespace App\Models\Data;

use Illuminate\Database\Eloquent\Model;

/**
* Determination
*/
class Determination extends Model
{
    protected $table = 'data_determinations';

    public function botanist()
    {
        return $this->belongsTo(Botanist::class);
    }

    public function specimen()
    {
        return $this->belongsTo(Specimen::class);
    }
}
