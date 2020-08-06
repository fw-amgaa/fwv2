<?php

use Illuminate\Support\Facades\Route;
use TCG\Voyager\Models\Post;

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
    return view('home');
});

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/blogs', function() {
    $blogs = Post::join('categories', 'categories.id', '=', 'posts.category_id')->get();
    return view('blogs', compact('blogs'));
});

Route::get('/blogs/{slug}', function ($slug) {
    $blog = Post::join('categories', 'categories.id', '=', 'posts.category_id')->where('slug', '=', $slug)->firstOrFail();
    return view('blog-single', compact('blog'));
})->name('blogSingle');

// Route::get('/news', function() {
//     $news = Post::join('categories', 'categories.id', '=', 'posts.category_id')->where('categories.name', 'News')->get();
//     return view('news', compact('news'));
// })->name('newsSingle');

// Route::get('/news/{slug}', function ($slug) {
//     $new = Post::where('slug', '=', $slug)->firstOrFail();
//     return view('news-single', compact('new'));
// }); 

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/photographer_portfolio', function () {
    return view('photographer_portfolio');
});

Route::get('/photography', function () {
    return view('photography');
});

Route::get('/portfolio-single', function () {
    return view('portfolio-single');
});

Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::get('/404', function () {
    return view('404');
});

Route::get('/community', function () {
    return view('community');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
