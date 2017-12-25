<?php

use Illuminate\Database\Seeder;
use App\Models\LoginHistory;

class LoginHistoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $loginHistories = factory(LoginHistory::class)->times(100)->make();
        LoginHistory::insert($loginHistories->toArray());
    }
}
