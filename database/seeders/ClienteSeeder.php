<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seed = new Cliente();
        $seed->nombre = "Consumidor Final";
        $seed->direccion = "-";
        $seed->telefono = "-";
        $seed->dni = "-";
        $seed->email = null;
        $seed->save();

        $seed = new Cliente();
        $seed->nombre = "Ariel Bernardo";
        $seed->direccion = "Marcos Sastre 4624 Buenos Aires";
        $seed->telefono = "3704299434";
        $seed->dni = "24159131";
        $seed->email = null;
        $seed->save();

        $seed = new Cliente();
        $seed->nombre = "Fernando Posse";
        $seed->direccion = "Lamadrid 5423 Buenos Aires";
        $seed->telefono = "0114566412";
        $seed->dni = "18153213";
        $seed->email = "posse@hotmail.com";
        $seed->save();

    }
}
