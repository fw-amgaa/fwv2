@extends('components.ui')

@section('content')


    <!-- Start Main content -->
    <main class="bg-grey pb-30 pt-30">
        <div class="container">
            <div class="loop-grid mb-30">
                <div class="row">
                    <div class="col-lg-8 mb-30">
                        <div class="carausel-post-1 hover-up border-radius-10 overflow-hidden transition-normal position-relative wow fadeInUp animated">
                            <div class="arrow-cover"></div>
                            <div class="slide-fade">
                            @foreach($slider as $featuredBlog)
                                <div class="position-relative post-thumb">
                                    <div class="thumb-overlay img-hover-slide position-relative" style="background-image: url({{ Voyager::image($featuredBlog->image) }})">
                                        <a class="img-link" href="/blogs/{{ $featuredBlog->slug }}"></a>
                                        <span class="top-left-icon bg-warning"><i class="elegant-icon icon_star_alt"></i></span>
                                        <div class="post-content-overlay text-white ml-30 mr-30 pb-30">
                                            <div class="entry-meta meta-0 font-small mb-20">
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
                            @endforeach
                            </div>
                        </div>
                    </div>
                    @foreach($alsoBlogs as $blog)
                    <article class="col-lg-4 col-md-6 mb-30 wow fadeInUp animated" data-wow-delay="0.2s">
                        <div class="post-card-1 border-radius-10 hover-up">
                            <div class="post-thumb thumb-overlay img-hover-slide position-relative" style="background-image: url({{ Voyager::image($blog->image) }})">
                                <a class="img-link" href="/blogs/{{ $blog->slug }}"></a>
                                <span class="top-right-icon {{$blog->color_class}}"><i class="elegant-icon {{$blog->icon_class}}"></i></span>
                                <ul class="social-share">
                                    <li><a href="#"><i class="elegant-icon social_share"></i></a></li>
                                    <li><a class="fb" href="#" title="Share on Facebook" target="_blank"><i class="elegant-icon social_facebook"></i></a></li>
                                    <li><a class="tw" href="#" target="_blank" title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>
                                </ul>
                            </div>
                            <div class="post-content p-30">
                                <div class="entry-meta meta-0 font-small mb-10">
                                    <a href="/blogs/{{ $blog->sluger }}"><span class="post-cat text-success" style="text-transform: capitalize">{{ $blog->sluger }}</span></a>
                                </div>
                                <div class="d-flex post-card-content">
                                    <h5 class="post-title mb-20 font-weight-900">
                                        <a href="/blogs/{{ $blog->slug }}">{{ $blog->title }}</a>
                                    </h5>
                                    <div class="post-excerpt mb-25 font-small text-muted">
                                                    <p>{{$blog->excerpt}}</p>
                                                </div>
                                    <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                        <span class="post-on">{{ $blog->created_at }}</span>
                                        <span class="time-reading has-dot">{{ $blog->read }} {{__('customlang.mins')}}</span>
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
                                @foreach($interviewBlogs as $blog)
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
                                                <a href="/blogs/books"><span class="post-cat text-success" style="text-transform: capitalize">{{__('customlang.book')}} (For example)</span></a>
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
                        <div class="post-module-2">
                            <div class="widget-header-1 position-relative mb-30  wow fadeInUp animated">
                                <h5 class="mt-5 mb-30">FW Publish</h5>
                            </div>
                            <div class="loop-list loop-list-style-1">
                                <div class="row">
                                @foreach($pub as $blog)
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
                                                <div class="post-excerpt mb-25 font-small text-muted">
                                                    <p>{{$blog->excerpt}}</p>
                                                </div>
                                                <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                    <span class="post-on">{{$blog->created_at}}</span>
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
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- End Main content -->
@endsection
