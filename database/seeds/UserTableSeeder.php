<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
use App\Address;
use App\Country;

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
        $Pais = Country::where('name','México')->first();


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
        $user->empresa = 'Empresa de ejemplo';
        $user->save();
        $user->roles()->attach($role_empleador);
        $user->phone()->create([
            'phone' => '1234567890'
        ]);
        $user->address()->create([
            'estado' => 'Estado',
            'ciudad' => 'Ciudad',
            'calle' => 'Calle',
            'extNumber' => '10',
            'reference' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, ipsam incidunt eligendi nihil assumenda id voluptas natus nobis esse! Ad distinctio iusto beatae modi fugiat corporis ea, deserunt voluptas voluptate.'
        ]);
        $Address = Address::all()->last();
        $Address->country()->attach($Pais);

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
