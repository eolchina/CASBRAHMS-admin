<?php

use Illuminate\Database\Seeder;
use App\Model\Taxonomyterm;

class TaxonomytermsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $taxonomyterms = factory(Taxonomyterm::class)->times(1000)->make();
        Taxonomyterm::insert($taxonomyterms->toArray());
    }
}
