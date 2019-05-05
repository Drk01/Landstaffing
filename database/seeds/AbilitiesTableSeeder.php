<?php

use Illuminate\Database\Seeder;

class AbilitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abilities')->insert([
            'name' => 'Cocinero',
            'description' => 'Cocina alimentos',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('abilities')->insert([
            'name' => 'Mesero',
            'description' => 'Atiende a los comensales',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('abilities')->insert([
            'name' => 'Chofer',
            'description' => 'Maneja automóviles',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
