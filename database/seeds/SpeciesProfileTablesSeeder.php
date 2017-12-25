<?php

use Illuminate\Database\Seeder;
use App\Models\Data\Term;
use App\Models\Data\TermAuthor;
use App\Models\Data\TermRank;
use App\Models\Data\TermUsage;
use App\Models\Data\TermCommonName;


class SpeciesProfileTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $terms = factory(Term::class)->times(10)->make();
        Term::insert($terms->toArray());


        $term_authors = factory(TermAuthor::class)->times(10)->make();
         TermAuthor::insert($term_authors->toArray());

        $term_ranks = factory(TermRank::class)->times(10)->make();
         TermRank::insert($term_ranks->toArray());

        $term_usages = factory(TermUsage::class)->times(10)->make();
         TermUsage::insert($term_usages->toArray());

        $term_common_names = factory(TermCommonName::class)->times(10)->make();
         TermCommonName::insert($term_common_names->toArray());

    }
}
