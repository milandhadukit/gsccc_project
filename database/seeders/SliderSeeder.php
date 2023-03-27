<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Slider;
use Illuminate\Support\Facades\Schema;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        Slider::truncate();

        $silderImage = [
            ['image'=>'1679546447.jpg','content_en'=>'Gujarat State Centre on Climate Change', 'content_hi' => 'राज्य जलवायु परिवर्तन केंद्र','content_gu'=>'રાજ્ય આબોહવા પરિવર્તન કેન્દ્ર'],
            ['image'=>'1679546722.jpg','content_en'=>'Gujarat State Centre on Climate Change', 'content_hi' => 'राज्य जलवायु परिवर्तन केंद्र','content_gu'=>'રાજ્ય આબોહવા પરિવર્તન કેન્દ્ર'],
           
        ];
        
        Slider::insert($silderImage); 
    }
}
