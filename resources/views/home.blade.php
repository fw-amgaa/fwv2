@extends('components.ui')

@section('content')


    <!-- Start Main content -->
    <main class="bg-grey pb-30">
        <div class="container pt-30">
            <div class="featured-slider-3 position-relative">
                <div class="slider-3-arrow-cover"></div>
                <div class="featured-slider-3-items">
                    @foreach($slider as $blog)
                    <div class="slider-single overflow-hidden border-radius-10">
                        <div class="post-thumb position-relative">
                            <div class="thumb-overlay position-relative" style="background-image: url({{Voyager::image($blog->image)}})">
                                <div class="post-content-overlay">
                                    <div class="container">
                                        <div class="entry-meta meta-0 font-small mb-20">
                                            <a href="/blogs" tabindex="0"><span class="post-cat text-info text-uppercase">Blogs</span></a>
                                            <a href="/blogs/{{$blog->sluger}}" tabindex="0"><span class="post-cat text-warning text-uppercase">{{$blog->sluger}}</span></a>
                                        </div>
                                        <h1 class="post-title mb-20 font-weight-900 text-white">
                                            <a class="text-white" href="/blogs/{{$blog->sluger}}" tabindex="0">{{$blog->title}} </a>
                                        </h1>
                                        <div class="entry-meta meta-1 font-small text-white mt-10 pr-5 pl-5">
                                            <span class="post-on">{{$blog->created_at}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- End feature -->
        <div class="container">
            <div class="hot-tags pt-30 pb-30 font-small align-self-center">
                <div class="widget-header-3">
                    <div class="row align-self-center">
                        <div class="col-md-4 align-self-center">
                            <h5 class="widget-title">Featured posts</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="loop-grid mb-30">
                <div class="row">
                    <div class="col-lg-8 mb-30">
                        <div class="carausel-post-1 hover-up border-radius-10 overflow-hidden transition-normal position-relative wow fadeInUp animated">
                            <div class="arrow-cover"></div>
                            <div class="slide-fade">
                                <div class="position-relative post-thumb">
                                    <div class="thumb-overlay img-hover-slide position-relative" style="background-image: url({{ Voyager::image($featuredBlog->image) }})">
                                        <a class="img-link" href="/blogs/{{ $featuredBlog->slug }}"></a>
                                        <span class="top-left-icon bg-warning"><i class="elegant-icon icon_star_alt"></i></span>
                                        <div class="post-content-overlay text-white ml-30 mr-30 pb-30">
                                            <div class="entry-meta meta-0 font-small mb-20">
                                                <a href="/blogs"><span class="post-cat text-info text-uppercase">Blogs</span></a>
                                                <a href="/blogs/{{ $featuredBlog->sluger }}"><span class="post-cat text-warning text-uppercase">{{ $featuredBlog->sluger }}</span></a>
                                            </div>
                                            <h3 class="post-title font-weight-900 mb-20">
                                                <a class="text-white" href="/blogs/{{ $featuredBlog->slug }}">{{ $featuredBlog->title }}</a>
                                            </h3>
                                            <div class="entry-meta meta-1 font-small text-white mt-10 pr-5 pl-5">
                                                <span class="post-on">{{ $featuredBlog->created_at }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @foreach($alsoBlogs as $blog)
                    <article class="col-lg-4 col-md-6 mb-30 wow fadeInUp animated" data-wow-delay="0.2s">
                        <div class="post-card-1 border-radius-10 hover-up">
                            <div class="post-thumb thumb-overlay img-hover-slide position-relative" style="background-image: url({{ Voyager::image($blog->image) }})">
                                <a class="img-link" href="/blogs/{{ $blog->slug }}"></a>
                                <span class="top-right-icon bg-success"><i class="elegant-icon icon_camera_alt"></i></span>
                                <ul class="social-share">
                                    <li><a href="#"><i class="elegant-icon social_share"></i></a></li>
                                    <li><a class="fb" href="#" title="Share on Facebook" target="_blank"><i class="elegant-icon social_facebook"></i></a></li>
                                    <li><a class="tw" href="#" target="_blank" title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>
                                </ul>
                            </div>
                            <div class="post-content p-30">
                                <div class="entry-meta meta-0 font-small mb-10">
                                    <a href="/blogs"><span class="post-cat text-info">Blog</span></a>
                                    <a href="/blogs/{{ $blog->sluger }}"><span class="post-cat text-success">{{ $blog->sluger }}</span></a>
                                </div>
                                <div class="d-flex post-card-content">
                                    <h5 class="post-title mb-20 font-weight-900">
                                        <a href="/blogs/{{ $blog->slug }}">{{ $blog->title }}</a>
                                    </h5>
                                    <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                        <span class="post-on">{{ $blog->created_at }}</span>
                                        <span class="time-reading has-dot">{{ $blog->read }} mins read</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="bg-grey pt-50 pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="post-module-2">
                            <div class="widget-header-1 position-relative mb-30  wow fadeInUp animated">
                                <h5 class="mt-5 mb-30">FW Academy</h5>
                            </div>
                            <div class="loop-list loop-list-style-1">
                                <div class="row">
                                @foreach($blogs as $blog)
                                <article class="col-md-6 mb-40 wow fadeInUp  animated">
                                    <div class="post-card-1 border-radius-10 hover-up">
                                        <div class="post-thumb thumb-overlay img-hover-slide position-relative" style="background-image: url({{Voyager::image($blog->image)}})">
                                            <a class="img-link" href="/blogs/{{$blog->slug}}"></a>
                                            <ul class="social-share">
                                                <li><a href="#"><i class="elegant-icon social_share"></i></a></li>
                                                <li><a class="fb" href="#" title="Share on Facebook" target="_blank"><i class="elegant-icon social_facebook"></i></a></li>
                                                <li><a class="tw" href="#" target="_blank" title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="post-content p-30">
                                            <div class="entry-meta meta-0 font-small mb-10">
                                                <a href="/academy"><span class="post-cat text-info">FW Academy</span></a>
                                                <a href="/blogs/books"><span class="post-cat text-success">Book (For example)</span></a>
                                            </div>
                                            <div class="d-flex post-card-content">
                                                <h5 class="post-title mb-20 font-weight-900">
                                                    <a href="/blogs/{{$blog->slug}}">{{$blog->title}}</a>
                                                </h5>
                                                <div class="post-excerpt mb-25 font-small text-muted">
                                                    <p>{{$blog->excerpt}}</p>
                                                </div>
                                                <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                    <span class="post-on">{{$blog->created_at}}</span>
                                                    <span class="time-reading has-dot">{{$blog->read}} mins read</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="post-module-2">
                            <div class="widget-header-1 position-relative mb-30  wow fadeInUp animated">
                                <h5 class="mt-5 mb-30">FW Publish</h5>
                            </div>
                            <div class="loop-list loop-list-style-1">
                                <div class="row">
                                @foreach($blogs as $blog)
                                <article class="grid-item col pb-50 wow fadeIn animated">
                                    <div class="post-card-1 border-radius-10 hover-up">
                                        <div class="post-thumb thumb-overlay img-hover-slide position-relative" style="background-image: url({{ Voyager::image($blog->image) }})">
                                            <a class="img-link" href="/blogs/{{$blog->slug}}"></a>
                                            <span class="top-right-icon bg-success"><i class="elegant-icon icon_camera_alt"></i></span>
                                            <ul class="social-share">
                                                <li><a href="#"><i class="elegant-icon social_share"></i></a></li>
                                                <li><a class="fb" href="#" title="Share on Facebook" target="_blank"><i class="elegant-icon social_facebook"></i></a></li>
                                                <li><a class="tw" href="#" target="_blank" title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="post-content p-30">
                                            <div class="entry-meta meta-0 font-small mb-10">
                                                <a href="/publish"><span class="post-cat text-info">FW Publish</span></a>
                                            </div>
                                            <div class="d-flex post-card-content">
                                                <h5 class="post-title mb-20 font-weight-900">
                                                    <a href="/blogs/{{$blog->title}}">{{$blog->title}}</a>
                                                </h5>
                                                <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                    <span class="post-on">{{$blog->created_at}}</span>
                                                    <span class="time-reading has-dot">{{$blog->read}} mins read</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="post-module-3">
                            <div class="widget-header-1 position-relative mb-30">
                                <h5 class="mt-5 mb-30">Latest posts</h5>
                            </div>
                            <div class="loop-list loop-list-style-1">
                            @foreach($latestBlogs as $blog)
                                <article class="hover-up-2 transition-normal wow fadeInUp animated">
                                    <div class="row mb-40 list-style-2">
                                        <div class="col-md-4">
                                            <div class="post-thumb position-relative border-radius-5">
                                                <div class="img-hover-slide border-radius-5 position-relative" style="background-image: url({{ Voyager::image($blog->image) }})">
                                                    <a class="img-link" href="/blogs/{{ $blog->slug }}"></a>
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
                                                    <a href="category.html"><span class="post-cat text-success">{{ $blog->sluger }}</span></a>
                                                </div>
                                                <h5 class="post-title font-weight-900 mb-20">
                                                    <a href="/blogs/{{ $blog->slug }}">{{ $blog->title }} </a>
                                                    <span class="post-format-icon"><i class="elegant-icon icon_star_alt"></i></span>
                                                </h5>
                                                <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                    <span class="post-on">{{ $blog->created_at }}</span>
                                                    <span class="time-reading has-dot">{{$blog->read}} mins read</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- End Main content -->
@endsection
