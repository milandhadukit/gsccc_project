<?php

namespace Database\Seeders;

use App\Models\Translation;
use Illuminate\Database\Seeder;

class MenuValidationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
    $createValidation = [
        [

            "group" => "menu",
            "key" => "title",
            "text" => ["en" => "Enter Title", "hi" => "शीर्षक दर्ज करें", "gu" => "શીર્ષક દાખલ કરો"],
        ],
     
        [
            "group" => "menu",
            "key" => "descreption",
            "text" => ["en" => "Enter Descreption", "hi" => "विवरण दर्ज करें", "gu" => "વર્ણન દાખલ કરો"],
        ],
    ];
    Translation::create($createValidation);
}
}
