<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

class TestDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Artisan::call('db:seed', ['--class' => 'CompanySeeder']);
        Artisan::call('db:seed', ['--class' => 'SuperAdminSeeder']);
        Artisan::call('db:seed', ['--class' => 'CompanyUserSeeder']);
    }
}
