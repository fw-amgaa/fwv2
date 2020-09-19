<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use TCG\Voyager\Models\Post;
use TCG\Voyager\Models\Category;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $blogs = Post::join('categories', 'categories.id', '=', 'posts.category_id')->get();
        $categories = Category::all();
        $featuredBlog = Post::where('featured', '0')->first();
        $alsoBlogs = Post::join('categories', 'categories.id', '=', 'posts.category_id')->take(3)->get();

    
        View::share('blogs', $blogs);
        View::share('categories', $categories);
        View::share('featuredBlog', $featuredBlog);
        View::share('alsoBlogs', $alsoBlogs);
    }
}
