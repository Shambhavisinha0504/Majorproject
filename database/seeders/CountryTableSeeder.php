<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Country;

class CountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Country::create([
          'country_name' => 'India'
        ]);
        Country::create([
            'country_name' => 'Sri Lanka'
          ]);
          Country::create([
            'country_name' => 'Pakistan'
          ]);
          Country::create([
            'country_name' => 'China'
          ]);
          Country::create([
            'country_name' => 'Japan'
          ]);
          Country::create([
            'country_name' => 'Bangladesh'
          ]);
          Country::create([
            'country_name' => 'Singapore'
          ]);
    }
}
