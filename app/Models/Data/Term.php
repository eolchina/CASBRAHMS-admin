<?php

namespace App\Models\Data;

use Illuminate\Database\Eloquent\Model;
use Encore\Admin\Traits\AdminBuilder;
use Encore\Admin\Traits\ModelTree;
use Baum;

class Term extends Baum\Node
{
    use ModelTree, AdminBuilder;

    protected $table = 'data_terms';

    // 'parent_id' column name
    protected $parentColumn = 'parent_id';

    // 'order' column name
    protected $orderColumn = 'order';

    // 'lft' column name
    protected $leftColumn = 'lft';

    // 'rgt' column name
    protected $rightColumn = 'rgt';

    // 'depth' column name
    protected $depthColumn = 'depth';

    // guard attributes from mass-assignment
    protected $guarded = array('id', 'parent_id', 'lft', 'rgt', 'depth');

    /**
     * reset Title column to use tree model
     * @param [type] $attributes [description]
     */
    public function __construct(array $attributes = [])
    {
        
        parent::__construct($attributes);

        $this->setTitleColumn('name');
    }



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
        
        // return $this->belongsTo(TermCommonName::class)->withDefault();
        return $this->belongsTo(TermCommonName::class);
    }

    public function specimens()
    {
        return $this->morphedByMany(Specimen::class, 'termable');
    }

    public function specimenimages()
    {
        return $this->morphedByMany(SpecimenImage::class, 'termable');
    }
}
