<?php

use Illuminate\Database\Seeder;

class ProfilesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profiles')->insert([
            'full_name' => 'Crist Joenathan',
            'email' =>'crist.joenathan@gmail.com',
            'photo' => 'CristJoenathan.jpeg'
        ]);
    }
}
