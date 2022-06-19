<?php

namespace Database\Seeders;

use App\Models\Equipment;
use App\Models\FE;
use App\Models\Guardian;
use App\Models\Maintenance;
use App\Models\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password')
         ]);

         \App\Models\User::factory()->create([
            'name' => 'Karim kompissi',
            'email' => 'karimkompissi@gmail.com',
            'password' => Hash::make('password')
        ]);

        Team::factory(10)->create();
        Equipment::factory(10)->create();
        Maintenance::factory(10)->create();
        Guardian::factory(10)->create();
        FE::factory(10)->create();
    }
}
