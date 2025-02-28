<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class AdministrationSeeder extends Seeder
{
    public function run()
    {
       DB::table('administrations')->insert([
            'nom' => 'Mr.Fouad',
            'email' => 'MrFouad@example.com',
            'role' => 'Super Mr.Fouad',
        ]);

    }
}

