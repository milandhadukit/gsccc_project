<?php

namespace Database\Seeders;

use App\Models\LatestPodcast;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class LatestProdcastSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    // php artisan db:seed --class=LatestProdcastSeeder
    
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        LatestPodcast::truncate();

        $data = [
            [ 'image' => '1679637014.jpg','music'=>'','date'=>'','content_en'=>'','content_hi'=>'','content_gu'=>''],
            [ 'image' => '1679637289.jpg','music'=>'1679635661.mp3','date'=>'2023-03-24','content_en'=>'aaa','content_hi'=>'bbbb','content_gu'=>'cccccc'],

        ];
        LatestPodcast::insert($data);
    }
}
