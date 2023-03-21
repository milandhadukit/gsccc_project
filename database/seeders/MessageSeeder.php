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
        Schema::disableForeignKeyConstraints();
        Translation::truncate();

        // /* Fetch All Sms Template Type */
        $messageData = config('global.MESSAGE');
        $ter = array();
        foreach ($messageData as $key => $message) {

            // die;
            //$ter[] = $key;
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
