<?php

use Illuminate\Database\Seeder;
use App\Models\World\Country;
use App\Models\World\City;
use App\Models\World\Language;

class WorldinfoTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $countries = factory(Country::class)->times(100)->make();
        Country::insert($countries->toArray());


         $cities = factory(City::class)->times(100)->make();
         City::insert($cities->toArray());

         $languages = factory(Language::class)->times(100)->make();
         Language::insert($languages->toArray());




    }
}
