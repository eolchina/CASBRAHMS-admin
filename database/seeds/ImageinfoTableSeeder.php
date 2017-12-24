<?php

use Illuminate\Database\Seeder;
use App\Models\Image;
use App\Models\MultipleImage;


class ImageinfoTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $images = factory(Image::class)->times(10)->make();
        Image::insert($images->toArray());


         $multipleimages = factory(MultipleImage::class)->times(10)->make();
         MultipleImage::insert($multipleimages->toArray());




    }
}
