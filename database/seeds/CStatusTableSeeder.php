<?php

use Illuminate\Database\Seeder;
use App\Cstatus;

class CStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = new Cstatus;
        $status->name = 'En revisión';
        $status->description = 'Tu perfíl está siendo analizado en base a la información que nos proporcionaste y se te asignarán "habilidades" según tus conocimientos';
        $status->save();

        $status = new Cstatus;
        $status->name = 'Revisado';
        $status->description = 'Tu perfíl fué revisado ya por un administrador del sitio, se te asignaron habilidades en base a la información que nos proporcionaste';
        $status->save();
    }
}
