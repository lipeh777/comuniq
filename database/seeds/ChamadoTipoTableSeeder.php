<?php

use Illuminate\Database\Seeder;
use App\ChamadoTipo;

class ChamadoTipoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chamado_tipos')->insert([
            'tipo' => Str::random(10),
        ]);
    }
}
