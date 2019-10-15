<?php

use Illuminate\Database\Seeder;
use App\Instituicoes;

class InstituicoesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for ($i = 0; $i < 5; $i++){
	        Instituicoes::create([
				'name' => $faker->name,
			]);
		}
    }
}
