<?php

namespace App\Models\Data;

use Illuminate\Database\Eloquent\Model;

class TermUsage extends Model
{
    protected $table = 'data_term_usages';

    public function terms()
    {
        return $this->hasMany(Term::class);
    }
}
