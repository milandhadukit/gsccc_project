<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ImageVideo;
use Illuminate\Support\Facades\Schema;

class ImageVideoSeeder extends Seeder
{
    

    //  php artisan db:seed --class=ImageVideoSeeder
   
    public function run(): void
    {   
        Schema::disableForeignKeyConstraints();
        ImageVideo::truncate();

        $data = [
            ['image'=>'1679563946.jpg','video_link'=>'https://www.youtube.com/watch?v=n0qJ8e1x668&ab_channel=WsCubeTech'],
            
           
        ];
        
        ImageVideo::insert($data); 
        
    }
}
