<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();
        $role->name= 'Administrativo';
        $role->description = 'Administrativo';
        $role->save();

        $role = new Role();
        $role->name = 'Empleador';
        $role->description = 'Empleador';
        $role->save();

        $role = new Role();
        $role->name = 'Empleado';
        $role->description = 'Empleado';
        $role->save();
    }
}
