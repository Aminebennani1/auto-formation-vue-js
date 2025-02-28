<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InscriptionSeeder extends Seeder
{
    public function run()
    {
        DB::table('inscriptions')->insert([
            'apprenant_id' => 1,
            'atelier_id' => 1,
            'groupe_id' => 1,
            'date_inscription' => now(),
        ]);

       
    }
}
