<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            ApprenantSeeder::class,
            AdministrationSeeder::class,
            AtelierSeeder::class,
            GroupeSeeder::class,
            InscriptionSeeder::class,
        ]);
    }
}

