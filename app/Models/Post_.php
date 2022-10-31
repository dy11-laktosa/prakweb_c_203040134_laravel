<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Senyuman Matahari",
            "slug" => "senyuman-matahari",
            "author" => "Hady Ismanto",
            "body" => "Ketika ku terbangun di pagi hari pada puncak puntang, melihat semua kondisi dengan sebelah mata. 
        Semua terasa buram, tetapi ketika ku membuka sebelah mata lagi, semuanya terlihat jelas, 
        bahkan ada seseorang yang memberikan senyuman seterang matahari. 
        Ternayata dia adalah seorang wanita bernama ...... kalo rame lanjut part 2...."
        ],
        [
            "title" => "Mengheningkan Cinta",
            "slug" => "mengheningkan-cinta",
            "author" => "Faiza",
            "body" => "Seorang wanita yang penuh dengan keluh kesah romansa, 
        merasakan keheningan dalam arti kata cinta. 
        Mungkin pada kata cinta terdapat 5 huruf, C : cinta ini bagaikan tong sampah nyaring bunyi nya, terdengar suaranya tapi tak terasa kehadirannya. 
        I : Ilmu cinta memanglah dinamis, kadang ke kiri dan kadang ke kanan, tak jelas seperti lampu sen ibu-ibu, 
        N: Nama yang tak pernah terlupakan menjadi orang yang sangat ku benci, 
        T : Tanda, tanda yang memang kulihat bahwa dia mendekatiku, 
        A : Apalah daya cinta hanya sebuah kata yang pernah bermakna baik di mataku, sehingga ku memaknai cinta dalam artiku ialah mengheningkan cinta."
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
