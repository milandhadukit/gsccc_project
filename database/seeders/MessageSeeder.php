<?php

namespace Database\Seeders;

use App\Models\Menus;
use App\Models\Translation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        // php artisan db:seed --class=MessageSeeder


        Schema::disableForeignKeyConstraints();
        Translation::truncate();

        $messageData = config('global.MESSAGE');

        foreach ($messageData as $key => $message) {

            foreach ($message as $val) {
                $temp = array();
                $temp = array_merge($val, array('group' => $key));
                Translation::updateOrCreate([
                    'group' => $temp['group'],
                    'key'   => $temp['key'],
                    'text'  => $temp['text']
                ]);
            }
        }
    }
}
