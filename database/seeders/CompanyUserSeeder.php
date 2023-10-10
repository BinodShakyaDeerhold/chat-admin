<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class CompanyUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Company User 1',
            'email' => 'company1@example.com',
            'password' => bcrypt('password1'),
            'role' => 'CompanyUser',
            'company_id' => 1
        ]);

        User::create([
            'name' => 'Company User 2',
            'email' => 'company2@example.com',
            'password' => bcrypt('password2'),
            'role' => 'CompanyUser',
            'company_id' => 2
        ]);
    }
}
