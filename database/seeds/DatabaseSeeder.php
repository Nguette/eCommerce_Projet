<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('utilisateurs')->insert([
            'name'=>'Harouna Nguette',
            'email'=>'harounanguette@gmail.com',
            'password'=>Hash::make('1995')
        ]);
    }
}
