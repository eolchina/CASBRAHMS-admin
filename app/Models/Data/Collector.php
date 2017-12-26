<?php

namespace App\Models\Data;

use Illuminate\Database\Eloquent\Model;

/**
* Collector
*/
class Collector extends Model
{
    protected $table = 'data_collectors';

    public function collections()
    {
        return $this->hasMany(Collection::class);
    }
}
