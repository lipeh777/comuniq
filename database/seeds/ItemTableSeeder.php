<?php

use Illuminate\Database\Seeder;

class ItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('itens')->insert([
    		'numero_tombamento' => Str::random(6),	
    	]);
        //
    }
}
