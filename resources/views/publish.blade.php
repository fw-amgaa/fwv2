@extends('components.ui')

@section('content')
<main>
        <!--archive header-->
        <div class="archive-header pt-50 text-center pb-50">
            <div class="container">
                <h2 class="font-weight-900">FW Publish</h2>
                <div class="breadcrumb">
                    <a href="/" rel="nofollow">{{__('customlang.home')}}</a>
                    <span></span> FW Publish
                </div>
            </div>
        </div>
        <div class="container">
            <!--Loop Masonry-->
            <div class="grid row mb-30">
                <div class="grid-sizer"></div>
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
                                    <span class="time-reading has-dot">{{$blog->read}} {{__('customlang.pminsolitics')}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
                @endforeach
            </div>
        </div>
    </main>
@endsection

