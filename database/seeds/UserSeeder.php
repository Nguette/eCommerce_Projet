<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('utilisateurs')->insert([
            'name'=>'Moustapha Ndiaye',
            'email'=>'ndiayetapha@gmail.com',
            'password'=>Hash::make('passer123')
        ]);
    }
}
