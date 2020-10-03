<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use TCG\Voyager\Models\Post;
use TCG\Voyager\Models\Category;
use TCG\Voyager\Models\User;

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
        $featuredBlog = Post::join('categories', 'categories.id', '=', 'posts.category_id')->where('featured', '1')->first();
        $alsoBlogs = Post::join('categories', 'categories.id', '=', 'posts.category_id')
        ->join('icons', 'icons.id', '=', 'posts.icon')
        ->join('colors', 'colors.id', '=', 'posts.icon_color')
        ->take(4)->get();

        $latestBlogs = Post::join('categories', 'categories.id', '=', 'posts.category_id')->orderBy('posts.created_at', 'DESC')->take(8)->get();
        $interviewBlogs = Post::join('categories', 'categories.id', '=', 'posts.category_id')->where('sluger', 'interview')->take(4)->get();

        $art = Post::join('categories', 'categories.id', '=', 'posts.category_id')->where('sluger', 'art')->get();
        $interview = Post::join('categories', 'categories.id', '=', 'posts.category_id')->where('sluger', 'interview')->get();
        $books = Post::join('categories', 'categories.id', '=', 'posts.category_id')->where('sluger', 'books')->get();
        $history = Post::join('categories', 'categories.id', '=', 'posts.category_id')->where('sluger', 'history')->get();
        $politics = Post::join('categories', 'categories.id', '=', 'posts.category_id')->where('sluger', 'politics')->get();
        $self = Post::join('categories', 'categories.id', '=', 'posts.category_id')->where('sluger', 'self-development')->get();

        $slider = Post::join('categories', 'categories.id', '=', 'posts.category_id')->where('home', '1')->get();

        $pub = Post::join('categories', 'categories.id', '=', 'posts.category_id')->orderBy('posts.created_at', 'ASC')->take(3)->get();

        $author = User::where('id', '4')->firstOrFail();
    
        View::share('blogs', $blogs);
        View::share('categories', $categories);
        View::share('featuredBlog', $featuredBlog);
        View::share('alsoBlogs', $alsoBlogs);
        View::share('latestBlogs', $latestBlogs);
        View::share('interviewBlogs', $interviewBlogs);
        
        View::share('art', $art);
        View::share('interview', $interview);
        View::share('books', $books);
        View::share('history', $history);
        View::share('politics', $politics);
        View::share('self', $self);

        View::share('slider', $slider);
        View::share('pub', $pub);
        View::share('author', $author);
    }
}
