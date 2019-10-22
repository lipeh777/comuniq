<?php

use Illuminate\Database\Seeder;

class ItemPatrimonioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('item_patrimonios')->insert([
    		'numero_tombamento' => Str::random(6),	
    	]);
        //
    }
}
