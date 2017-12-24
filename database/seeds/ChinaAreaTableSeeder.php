<?php

use Illuminate\Database\Seeder;
use App\Models\ChinaArea;

class ChinaAreaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $chinaareas = factory(ChinaArea::class)->times(100)->make();
        ChinaArea::insert($chinaareas->toArray());
    }
}
