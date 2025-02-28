<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AtelierSeeder extends Seeder
{
    public function run()
    {
        DB::table('ateliers')->insert([
            'nom' => 'Atelier Laravel',
            'description' => 'Introduction à Laravel pour les débutants',
            'date_debut' => now(),
            'date_fin' => now()->addDays(7),
            'administration_id' => 1,
        ]);

        DB::table('ateliers')->insert([
            'nom' => 'Atelier Vue.js',
            'description' => 'Construire des interfaces utilisateur dynamiques',
            'date_debut' => now(),
            'date_fin' => now()->addDays(5),
            'administration_id' => 1,
        ]);
    }
}

