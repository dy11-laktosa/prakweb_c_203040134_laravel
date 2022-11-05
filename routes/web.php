<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Hady Ismanto R",
        "email" => "irhady02@gmail.com",
        "image" => "profile.jpg"
    ]);
});


Route::get('/blog', function () {
    $blog_posts = [
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

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

//halaman single post
Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "Senyuman Matahari",
            "slug" => "senyuman-matahari",
            "author" => "Hady Ismanto",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat eveniet laudantium provident inventore officia ratione placeat possimus nisi, illo perspiciatis, facilis excepturi unde repudiandae architecto iusto atque maiores a delectus blanditiis perferendis. Totam optio sed laudantium harum. Qui deserunt itaque, officiis, impedit quo magni soluta esse, atque repudiandae aut fugit nemo numquam inventore. Eaque modi incidunt, placeat nisi blanditiis autem ex quae, sit accusamus iste explicabo reprehenderit illum ea, asperiores alias in quasi obcaecati vero quia perspiciatis. Ex, omnis inventore?."
        ],
        [
            "title" => "Mengheningkan Cinta",
            "slug" => "mengheningkan-cinta",
            "author" => "Fazia",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla aspernatur repudiandae quidem incidunt possimus? Dolorem magnam reiciendis, aspernatur dolore accusamus excepturi molestias minus recusandae eligendi odio? Cum suscipit distinctio quidem rerum iusto eum, consectetur nobis laboriosam excepturi quae ipsa magnam ipsum eaque quas deleniti? Aspernatur voluptatem error impedit sequi eveniet suscipit reprehenderit nesciunt. Libero laborum blanditiis quia asperiores velit placeat sapiente quod quae optio? Sunt eveniet a modi earum accusantium quos distinctio commodi aliquam ut. Cumque molestias libero tempore neque odit excepturi cupiditate officiis quis itaque, impedit dolorem in? Modi commodi iure provident illum harum, magnam nesciunt neque. Consequuntur, vero!."
        ],
    ];

    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
