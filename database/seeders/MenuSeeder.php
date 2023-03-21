<?php

namespace Database\Seeders;

use App\Models\Menus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i <= 100; $i++) {
            Menus::updateOrCreate([
                'title_en'       => "Test-" . $i,
                'title_hi'       => "Test-" . $i,
                'title_gu'       => "Test-" . $i,
                'description_en' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
                'description_hi' => "लोरेम इप्सम प्रिंटिंग और टाइपसेटिंग उद्योग का केवल डमी टेक्स्ट है। लोरेम इप्सम 1500 के दशक के बाद से उद्योग का मानक डमी टेक्स्ट रहा है, जब एक अज्ञात प्रिंटर ने टाइप की एक गैली ली और एक टाइप नमूना पुस्तक बनाने के लिए इसे स्क्रैम्बल किया।",
                'description_gu' => "લોરેમ ઇપ્સમ એ પ્રિન્ટિંગ અને ટાઇપસેટિંગ ઉદ્યોગનું ખાલી ડમી ટેક્સ્ટ છે. 1500 ના દાયકાથી લોરેમ ઇપ્સમ એ ઉદ્યોગનું પ્રમાણભૂત ડમી ટેક્સ્ટ છે, જ્યારે કોઈ અજાણ્યા પ્રિન્ટર પ્રકારનો એક ગેલી લઈને તેને એક પ્રકારનો નમૂનો પુસ્તક બનાવવા માટે સ્ક્રેમ્બલ કરે છે.",
            ]);
        }
    }
}
