<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $result = database_path('seeders/json/cities.json');
        $result = file_get_contents($result);
        $result = json_decode($result, true);
        
        City::insert($result);
    }
}
