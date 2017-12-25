<?php

namespace App\Models\Data;

use Illuminate\Database\Eloquent\Model;

class TermAuthor extends Model
{
    
    protected $table = 'data_term_authors';

    public function terms()
    {
    	
    	return $this->hasMany(Term::class);
    }
}
