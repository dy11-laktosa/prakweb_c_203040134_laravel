return view('home');
});

Route::get('/about', function () {
return view('about', [
"name" => "Hady Ismanto Rachmat",
"email" => "irhady02@gmail.com",
"image" => "profile.jpg"
]);
});

Route::get('/blog', function () {
return view('posts');
});