<?php

use Illuminate\Database\Seeder;
use App\Setor;

class SetoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setor::create([
            'name' => 'administrativo',
        ]);
        Setor::create([
            'name' => 'financeiro',
        ]);
        Setor::create([
            'name' => 'academico',
        ]);
    }
}
