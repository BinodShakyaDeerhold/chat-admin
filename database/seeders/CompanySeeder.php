<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::create([
            'name' => 'Company 1',
            'representative_name' => 'Super Admin',
            'address' => 'Sifal',
            'contact_no' => '012345678',
            'person_in_charge' => 'Super Admin',
            'theme' => 'Light',
            'product_name' => 'Chat',
            'description' => 'Genuine Product',
            'summary' => 'One in a million',
            'input_date_related_to_product' => false,
            'date_for' => 'Product',
            'date' => '2023-10-10',
        ]);
        Company::create([
            'name' => 'Company 2',
            'representative_name' => 'Super Admin',
            'address' => 'Sifal',
            'contact_no' => '012345678',
            'person_in_charge' => 'Super Admin',
            'theme' => 'Dark',
            'product_name' => 'Chat',
            'description' => 'Genuine Product',
            'summary' => 'One in a million',
            'input_date_related_to_product' => false,
            'date_for' => 'Product',
            'date' => '2023-10-09',
        ]);
        //
    }
}
