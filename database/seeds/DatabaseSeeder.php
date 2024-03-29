<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        
        $this->call(InstituicoesTableSeeder::class);
        $this->call(StatusTableSeeder::class);
        $this->call(StatusChamadosTableSeeder::class);
        $this->call(SetoresTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(ItemTableSeeder::class);
        $this->call(ChamadoTipoTableSeeder::class);
    }
}
