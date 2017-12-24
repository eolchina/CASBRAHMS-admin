<?php

use Illuminate\Database\Seeder;
// use App\Models\User;
use App\Models\User\Profile;
use App\Models\User\Address;
use App\Models\User\Sns;

class UserinfoTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        // produce random number from 1-5 to reference with one to many table
        // $user_ids = ['1', '2', '3', '4', '5'];

        //$user_ids = range(1, 100);

        // $faker = app(Faker\Generator::class);
       
        // $profiles = factory(Profile::class)->times(100)->make()->each(function ($profile) use ($faker, $user_ids){
        //     $profile->user_id = $faker->numberBetween(1, 100);
        // });
        $profiles = factory(Profile::class)->times(100)->make();
        Profile::insert($profiles->toArray());


        // $addresses = factory(Address::class)->times(100)->make()->each(function ($address) use ($faker, $user_ids){
        //     $address->user_id = $faker->randomElement($user_ids);
        // });
         $addresses = factory(Address::class)->times(100)->make();
         Address::insert($addresses->toArray());


        // $snses = factory(Sns::class)->times(100)->make()->each(function ($sns) use ($faker, $user_ids){
        //     $sns->user_id = $faker->randomElement($user_ids);
        // });
         $snses = factory(Sns::class)->times(100)->make();
         Sns::insert($snses->toArray());




    }
}
