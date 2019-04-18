<?php

use Illuminate\Database\Seeder;

class CountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->insert([
            'name' => 'Mexico',
            'lada' => '52',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
