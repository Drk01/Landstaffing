<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_administrativo = Role::where('name','Administrativo')->first();
        $role_empleador = Role::where('name','Empleador')->first();
        $role_empleado = Role::where('name', 'Empleado')->first();


        $user = new User();
        $user->name = 'Administrador';
        $user->lastname = 'example';
        $user->motherLastname = 'example';
        $user->email = 'administrativo@example.com';
        $user->password = bcrypt('secret');
        $user->save();
        $user->roles()->attach($role_administrativo);

        $user = new User();
        $user->name = 'Empleador';
        $user->email = 'empleador@example.com';
        $user->password = bcrypt('secret');
        $user->lastname = 'example';
        $user->motherLastname = 'example';
        $user->save();
        $user->roles()->attach($role_empleador);

        $user = new User();
        $user->name = 'Empleado';
        $user->email = 'empleado@example.com';
        $user->lastname = 'example';
        $user->motherLastname = 'example';
        $user->password = bcrypt('secret');
        $user->save();
        $user->roles()->attach($role_empleado);
    }
}
