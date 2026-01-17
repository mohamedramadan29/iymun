<?php

namespace Database\Seeders;

use App\Models\dashboard\admin;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = admin::create([
            "name" => "mohamed",
            "email" => "mr319242@gmail.com",
            "password" => bcrypt("11111111"),
            // 'type' => 'admin',
            'role' => 1,
        ]);
    }
}
