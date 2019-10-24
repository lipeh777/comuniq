<?php

use Illuminate\Database\Seeder;
use App\StatusChamado;

class StatusChamadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StatusChamado::create([
            'comentario' => 'espero que funcione',
        ]);

        StatusChamado::create([
            'comentario' => 'é tudo culpa de matheus',
        ]);

        StatusChamado::create([
            'comentario' => 'que demora',
        ]);
    }
}
