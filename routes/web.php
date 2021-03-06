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

Route::get('lang/{locale}', function ($locale) {
    session()->put('locale', $locale);
    return redirect()->back();
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/blogs', function() {
    $blogs = Post::join('categories', 'categories.id', '=', 'posts.category_id')->get();
    return view('blogs', compact('blogs'));
});

Route::get('/academy', function() {
    $blogs = Post::join('categories', 'categories.id', '=', 'posts.category_id')->get();
    return view('academy', compact('blogs'));
});

Route::get('/publish', function() {
    $blogs = Post::join('categories', 'categories.id', '=', 'posts.category_id')->get();
    return view('publish', compact('blogs'));
});

Route::get('/blogs/art', function() {
    return view('art');
});

Route::get('/blogs/history', function() {
    return view('history');
});

Route::get('/blogs/interview', function() {
    return view('interview');
});

Route::get('/blogs/books', function() {
    return view('books');
});

Route::get('/blogs/politics', function() {
    return view('politics');
});

Route::get('/blogs/self-development', function() {
    return view('self-development');
});

Route::get('/blogs/{slug}', function ($slug) {
    $blog = Post::join('categories', 'categories.id', '=', 'posts.category_id')
    ->join('users', 'users.id', '=', 'posts.author_id')
    ->where('slug', '=', $slug)->firstOrFail();
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
