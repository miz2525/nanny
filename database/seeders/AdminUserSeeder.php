<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $result = database_path('seeders/json/admins.json');
        $result = file_get_contents($result);
        $result = json_decode($result, true);
        
        Admin::insert($result);
    }
}
