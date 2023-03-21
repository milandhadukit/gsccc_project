<?php

namespace Database\Seeders;

use App\Models\Menus;
use App\Models\Translation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Translation::create([
            [
                'group' => 'menus',
                'key' => 'dash',
                'text' => ["en" => "Dashboard"],
            ],
            [
                'group' => 'menus',
                'key' => 'list',
                'text' => ["en" => "CMS"],
            ],
        ]);
    }
}
