@extends('components.ui')

@section('styles')
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/widgets.css">
    <link rel="stylesheet" href="css/responsive.css">
@endsection


@section('content')

    <!-- Start Main content -->
    <main class="bg-grey pb-30">
        <div class="container single-content">
            <div class="entry-header entry-header-style-1 mb-50 pt-50">
                <h1 class="entry-title mb-50 font-weight-900">
                    {{$blog->title}}
                </h1>
                <div class="row">
                    <div class="col-md-6">
                        <div class="entry-meta align-items-center meta-2 font-small color-muted">
                            <p class="mb-5">
                                <a class="author-avatar" href="#"><img class="img-circle" src=" {{ Voyager::image($blog->avatar) }} " alt=""></a>
                                By <a href=""><span class="author-name font-weight-bold">{{ $blog->name }}</span></a>
                            </p>
                            <span class="mr-10">{{$blog->created_at}} </span>
                            <span class="has-dot"> 8 {{__('customlang.mins')}}</span>
                        </div>
                    </div>
                    <div class="col-md-6 text-right d-none d-md-inline">
                        <ul class="header-social-network d-inline-block list-inline mr-15">
                            <li class="list-inline-item text-muted"><span>{{__('customlang.share')}}: </span></li>
                            <li class="list-inline-item"><a class="social-icon fb text-xs-center" target="_blank" href="#"><i class="elegant-icon social_facebook"></i></a></li>
                            <li class="list-inline-item"><a class="social-icon tw text-xs-center" target="_blank" href="#"><i class="elegant-icon social_twitter "></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--end single header-->
            <figure class="image mb-30 m-auto text-center border-radius-10">
                <img class="border-radius-10" src="{{Voyager::image($blog->image)}} " alt="post-title" />
            </figure>
            <!--figure-->
            <article class="entry-wraper mb-50" style="max-width: 640px">
                <div class="excerpt mb-30">
                    <p>{{$blog->excerpt}} </p>
                </div>
                <div class="entry-main-content dropcap wow fadeIn animated">
                    {!!$blog->body!!}
                </div>
                <div class="entry-bottom mt-50 mb-30 wow fadeIn animated">
                    <div class="tags">
                        <span>{{__('customlang.category')}}: </span>
                        <a href="/blogs/{{$blog->sluger}}" rel="tag">{{$blog->sluger}}</a>
                    </div>
                </div>
                <div class="single-social-share clearfix wow fadeIn animated">
                    <ul class="header-social-network d-inline-block list-inline float-md-right mt-md-0 mt-4">
                        <li class="list-inline-item text-muted"><span>Share this: </span></li>
                        <li class="list-inline-item"><a class="social-icon fb text-xs-center" target="_blank" href="#"><i class="elegant-icon social_facebook"></i></a></li>
                        <li class="list-inline-item"><a class="social-icon tw text-xs-center" target="_blank" href="#"><i class="elegant-icon social_twitter "></i></a></li>
                    </ul>
                </div>
                <!--author box-->
                <div class="author-bio p-30 mt-50 border-radius-10 bg-white wow fadeIn animated">
                    <div class="author-image mb-30">
                        <a href="author.html"><img src="{{ Voyager::image($blog->avatar) }}" alt="" class="avatar"></a>
                    </div>
                    <div class="author-info">
                        <h4 class="font-weight-bold mb-20"><span class="vcard author"><span class="fn"><a href="" title="Posted by {{$blog->name}}" rel="author">{{$blog->name}}</a></span></span>
                        </h4>
                        <h5 class="text-muted">About author</h5>
                        <div class="author-description text-muted"> {{$blog->author_desc}} </div>
                        <!-- <a href="" class="author-bio-link mb-md-0 mb-3">View all posts</a> -->
                        <div class="author-social">
                            <ul class="author-social-icons">
                                <li class="author-social-link-facebook"><a href="{{$blog->facebook}}" target="_blank"><i class="elegant-icon social_facebook"></i></a></li>
                                <li class="author-social-link-twitter"><a href="{{$blog->instagram}}" target="_blank"><i class="elegant-icon social_instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--related posts-->
                <div class="related-posts">
                    <div class="post-module-3">
                        <div class="widget-header-2 position-relative mb-30">
                            <h5 class="mt-5 mb-30">Related posts</h5>
                        </div>
                        <div class="loop-list loop-list-style-1">
                            @foreach($alsoBlogs as $blogs)
                            <article class="hover-up-2 transition-normal wow fadeInUp  animated">
                                <div class="row mb-40 list-style-2">
                                    <div class="col-md-4">
                                        <div class="post-thumb position-relative border-radius-5">
                                            <div class="img-hover-slide border-radius-5 position-relative" style="background-image: url({{ Voyager::image($blogs->image) }})">
                                                <a class="img-link" href="/blogs/{{$blogs->slug}}"></a>
                                            </div>
                                            <ul class="social-share">
                                                <li><a href="#"><i class="elegant-icon social_share"></i></a></li>
                                                <li><a class="fb" href="#" title="Share on Facebook" target="_blank"><i class="elegant-icon social_facebook"></i></a></li>
                                                <li><a class="tw" href="#" target="_blank" title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-8 align-self-center">
                                        <div class="post-content">
                                            <div class="entry-meta meta-0 font-small mb-10">
                                                <a href="/blogs/{{$blogs->slugger}}"><span class="post-cat text-primary">{{$blogs->slugger}}</span></a>
                                            </div>
                                            <h5 class="post-title font-weight-900 mb-20">
                                                <a href="/blogs/{{$blogs->slug}}">{{$blogs->title}}</a>
                                                <span class="post-format-icon"><i class="elegant-icon icon_star_alt"></i></span>
                                            </h5>
                                            <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                <span class="post-on">{{$blogs->created_at}}</span>
                                                <span class="time-reading has-dot">{{$blog->read}} {{__('customlang.mins')}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            @endforeach
                        </div>
                    </div>
                </div>
            </article>
        </div>
        <!--container-->
    </main>
    <!-- End Main content -->

@endsection