<?php

use Illuminate\Database\Seeder;
use App\Status;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Status::create([
            'description' => 'novo',
            'final' => false,
        ]);

        Status::create([
            'description' => 'em analise',
            'final' => false,
        ]);

        Status::create([
            'description' => 'em andamento',
            'final' => false,
        ]);

        Status::create([
            'description' => 'inrecuperavel',
            'final' => true,
        ]);

        Status::create([
            'description' => 'resolvido',
            'final' => true,
        ]);
    }
}
