<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupeSeeder extends Seeder
{
    public function run()
    {
        DB::table('groupes')->insert([
            'nom' => 'Groupe A',
            'description' => 'Groupe pour les apprenants débutants',
            'atelier_id' => 1,
            'max_participants' => 15,
        ]);

        DB::table('groupes')->insert([
            'nom' => 'Groupe B',
            'description' => 'Groupe avancé pour les apprenants confirmés',
            'atelier_id' => 1,
            'max_participants' => 10,
        ]);
    }
}

