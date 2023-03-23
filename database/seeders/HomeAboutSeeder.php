<?php

namespace Database\Seeders;

use App\Models\HomeAbout;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class HomeAboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    //  php artisan db:seed --class=HomeAboutSeeder






    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        HomeAbout::truncate();

        $homeAboute = [
            [
                'image' => '1679555033.jpg ', 
                'content_en' => 'Gujarat State Centre on Climate Change', 
                'content_hi' => 'राज्य जलवायु परिवर्तन केंद्र', 
                'content_gu' => 'રાજ્ય આબોહવા પરિવર્તન કેન્દ્ર',
                'title_en' => 'Gujarat State Centre on Climate Change', 
                'title_hi' => 'राज्य जलवायु परिवर्तन केंद्र', 
                'title_gu' => 'રાજ્ય આબોહવા પરિવર્તન કેન્દ્ર',
                'introduction_en' => 'Gujarat State Centre on Climate Change', 
                'introduction_hi' => 'राज्य जलवायु परिवर्तन केंद्र', 
                'introduction_gu' => 'રાજ્ય આબોહવા પરિવર્તન કેન્દ્ર',
                'objective_en' => 'Gujarat State Centre on Climate Change', 
                'objective_hi' => 'राज्य जलवायु परिवर्तन केंद्र', 
                'objective_gu' => 'રાજ્ય આબોહવા પરિવર્તન કેન્દ્ર',
                
            ],

        ];

        HomeAbout::insert($homeAboute);

    }
}
