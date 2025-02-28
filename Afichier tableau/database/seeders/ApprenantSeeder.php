<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ApprenantSeeder extends Seeder
{
    public function run()
    {
        $existing = DB::table('apprenants')->where('email', 'bennaniamine@example.com')->exists();
    if (!$existing) {
        DB::table('apprenants')->insert([
            'nom' => 'mohammed amine bennani kabci',
            'email' => 'bennaniamine@example.com',
            'statut' => 'Actif',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
    }
}
