<?php

namespace Database\Seeders;

use App\Models\Language;
use Illuminate\Database\Seeder;

class LaguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $result = database_path('seeders/json/languages.json');
        $result = file_get_contents($result);
        $result = json_decode($result, true);
        
        Language::insert($result);
    }
}
