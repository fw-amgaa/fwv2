@extends('components.ui')

@section('content')

<main>
        <!--archive header-->
        <div class="archive-header pt-50 text-center">
            <div class="container">
                <h2 class="font-weight-900">FW Academy</h2>
                <div class="breadcrumb">
                    <a href="index.html" rel="nofollow">Home</a>
                    <span></span> FW Academy
                </div>
                <div class="bt-1 border-color-1 mt-30 mb-50"></div>
            </div>
        </div>
        <div class="container">
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
    </main>

@endsection