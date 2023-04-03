<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class primerUsuario extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contraseña = "posadas007";
        $user = new User([
            "email" => "aagaleano@gmail.com",
            // "nro_doc" => "34895705",
            // "telefono" => "3764950735",
            "password" => Hash::make($contraseña),
            "name" => "Abraham Galeano",
        ]);
        $user->saveOrFail();
    }
}
