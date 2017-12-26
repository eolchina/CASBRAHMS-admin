<?php

use Illuminate\Database\Seeder;
use App\Models\Data\Botanist;
use App\Models\Data\Collector;
use App\Models\Data\Specimen;
use App\Models\Data\SpecimenImage;
use App\Models\Data\Determination;
use App\Models\Data\Geolocation;
use App\Models\Data\Geomountain;
use App\Models\Data\Collection;
use App\Models\Data\Nomentype;
use App\Models\Data\Herbarium;

class HerbariumInfoTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $botanists = factory(Botanist::class)->times(10)->make();
        Botanist::insert($botanists->toArray());


        $collectors = factory(Collector::class)->times(10)->make();
        Collector::insert($collectors->toArray());

        $specimens = factory(Specimen::class)->times(10)->make();
        Specimen::insert($specimens->toArray());

        $specimen_images = factory(SpecimenImage::class)->times(10)->make();
        SpecimenImage::insert($specimen_images->toArray());

        $determinations = factory(Determination::class)->times(10)->make();
        Determination::insert($determinations->toArray());

        $geolocations = factory(Geolocation::class)->times(10)->make();
        Geolocation::insert($geolocations->toArray());


        $geomountains = factory(Geomountain::class)->times(10)->make();
        Geomountain::insert($geomountains->toArray());

        $collections = factory(Collection::class)->times(10)->make();
        Collection::insert($collections->toArray());

        $nomentypes = factory(Nomentype::class)->times(10)->make();
        Nomentype::insert($nomentypes->toArray());

        $herbaria = factory(Herbarium::class)->times(10)->make();
        Herbarium::insert($herbaria->toArray());
    }
}
