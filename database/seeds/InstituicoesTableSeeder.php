<?php

use Illuminate\Database\Seeder;
// use App\Instituicoes;

class InstituicoesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('instituicoes')->insert([
            'name' => Str::random(10),
        ]);
    }
}
