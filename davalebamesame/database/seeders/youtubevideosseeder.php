<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\youtubevideos;

class youtubevideosseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        youtubevideos::create([
            "title" => "გადამწყვეტი რაუნდი: რომელი ზღვაა გამოსახული ამ სურათებზე?",
            "url" => "https://www.youtube.com/watch?v=p3y9NPWNtqs",
            "description" => "გადამწყვეტი რაუნდი: თქვენს წინაშეა კონკრეტული ზღვის სურათები. 1954 წელს დიდი საბჭოთა ენციკლოპედიის მფლობელებს დაეგზავნათ მონიტორზე გამოსახული გვერდი და მიეცათ რეკომენდაცია კონკრეტულ გვერდზე ჩაეკრათ. რომელი ზღვაა გამოსახული ამ სურათებზე",
            "chanel" => "რა? სად? როდის?"
        ]);

        youtubevideos::create([
            "title" => "ვის ბაძავდნენ ისინი?",
            "url" => "https://www.youtube.com/watch?v=p6TZ7PEvulI",
            "description" => "აკა მორჩილაძე თავის წიგნში „ჩრდილი გზაზე“ წერს: სტალინური დროება, ისედაც მასობრივი სპორტის დიდი მოსიყვარულე გახლდათ და ჯანსაღი ცხოვრების წესისაც , მაგრამ საბჭოთა საქართველოში მეორე მსოფ. ომის შემდეგ ჯანსაღი ცხოვრების წესის განსაკუთრებული პოპულარიზაცია მოხდაო. ომის შემდეგ სსრკში შემოვიდა ნაალაფარი, რამაც უბიძგა იმ დროინდელ თბილისელ ჭაბუკებს ვარჯიშის დაწყებისკენ. ვის ჰბაძავდნენ ისინი",

            "chanel" => "რა? სად? როდის?"
            
        ]);

        youtubevideos::create([
            "title" => "რა? სად? როდის? - ტელემაყურებელი დავით სიჭინავას ექვსეულის წინააღმდეგ ",
            "url" => "https://www.youtube.com/watch?v=G9HWoifaEjc",
            "description" => "დღეს თამაშობს დავით სიჭინავას ექვსეული: ანა კალატოზი, ბექა ხოჯავა, ცვატა ბერძენიშვილი, გაგი გაბრიჭიძე, ივლიანე ქარდავა, დავით სიჭინავა",
            "chanel" => "რა? სად? როდის?"
            
        ]);

        youtubevideos::create([
            "title" => "რა? სად? როდის? - ვახტანგ ბაციკაძის ექვსეული",
            "url" => "https://www.youtube.com/watch?v=0cBQgztEOHs",
            "description" => "📌 ეუროპოპის არffხი - https://www.youtube.com/c/popsport_com",
            "chanel" => "ოქტოპუსი / Octopus"
            
        ]);

        youtubevideos::create([
            "title" => "რა? სად? როდის? - შემოდგომის სერიის ფინალი! ტელემაყურებელი ირინა ფრუიძის ექვსეულის წინააღმდეგ",
            "url" => "https://www.youtube.com/watch?v=N988HM0-4h8",
            "description" => "ბაჩი კაკაბაძე, გიგა კვერენჩხილაძე, ქეთი დიასამიძე, გიორგი ბაქრაძე, დავით გორგილაძე, ირინა ფრუიძე",
            "chanel" => "რა? სად? როდის?"
            
        ]);
    }
}
