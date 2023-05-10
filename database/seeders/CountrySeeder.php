<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $result = database_path('seeders/json/countries.json');
        $result = file_get_contents($result);
        $result = json_decode($result, true);
        
        Country::insert($result);
    }
}
