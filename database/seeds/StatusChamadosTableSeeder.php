<?php

use Illuminate\Database\Seeder;
use App\StatusChamados;

class StatusChamadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StatusChamados::create([
            'comentario' => 'espero que funcione',
        ]);

        StatusChamados::create([
            'comentario' => 'é tudo culpa de matheus',
        ]);

        StatusChamados::create([
            'comentario' => 'que demora',
        ]);
    }
}
