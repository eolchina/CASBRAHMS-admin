<?php

namespace App\Models\Data;

use Illuminate\Database\Eloquent\Model;

class TermRank extends Model
{
    protected $table = 'data_term_ranks';

    public function terms()
    {
        return $this->hasMany(Term::class);
    }
}
