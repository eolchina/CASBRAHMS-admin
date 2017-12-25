<?php

namespace App\Models\Data;

use Illuminate\Database\Eloquent\Model;

class Term extends Model
{
    
    protected $table = 'data_terms';

    public function author()
    {

    	return $this->belongsTo(TermAuthor::class, 'term_author_id');
    }

    public function rank()
    {
    	
    	return $this->belongsTo(TermRank::class, 'term_rank_id');
    }

    public function usage()
    {
    	
    	return $this->belongsTo(TermUsage::class, 'term_usage_id');
    }

    public function commonName()
    {
    	
    	return $this->belongsTo(TermCommonName::class)->withDefault();
    }


}
