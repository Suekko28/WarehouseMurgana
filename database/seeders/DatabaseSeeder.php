<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Company;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        Company::factory()->create([
            'name'=>'susu_kambing_jantan',
        ]);
        User::factory()->create([
            'name' => 'james',
            'email' => 'test@test.com',
            'password'=>'123',
            'role'=>'2',
            'company_id'=>'1',
        ]);
        User::factory()->create([
            'name' => 'sa-admin',
            'email' => 'test@gmail.com',
            'password'=>'123',
            'role'=>'1',
        ]);
    }
}
