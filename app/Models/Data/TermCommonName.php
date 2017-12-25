<?php

namespace App\Models\Data;

use Illuminate\Database\Eloquent\Model;

class TermCommonName extends Model
{
    
    protected $table = 'data_term_commonnames';

    public function term()
    {
    	
    	return $this->hasOne(Term::class);
    }
}
