@extends('components.ui')

@section('content')

      <main>
        <!--archive header-->
        <div class="archive-header pt-50">
            <div class="container">
                <h2 class="font-weight-900">{{__('customlang.self')}}</h2>
                <div class="breadcrumb">
                    <a href="/" rel="nofollow">Home</a>
                    <a href="/blogs" rel="nofollow">{{__('customlang.blogs')}}</a>
                    <span></span> {{__('customlang.self-development')}}
                </div>
                <div class="bt-1 border-color-1 mt-30 mb-50"></div>
            </div>
        </div>
        <div class="pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="post-module-3">
                            <div class="loop-list loop-list-style-1">
                              @foreach($self as $blog)
                                <article class="hover-up-2 transition-normal wow fadeInUp animated">
                                    <div class="row mb-40 list-style-2">
                                        <div class="col-md-4">
                                            <div class="post-thumb position-relative border-radius-5">
                                                <div class="img-hover-slide border-radius-5 position-relative" style="background-image: url({{ Voyager::image($blog->image) }}">
                                                    <a class="img-link" href="single.html"></a>
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
                                                    <a href="#"><span class="post-cat text-primary">{{ $blog->sluger }}</span></a>
                                                </div>
                                                <h5 class="post-title font-weight-900 mb-20">
                                                    <a href="single.html">{{ $blog->title }}</a>
                                                    <span class="post-format-icon"><i class="elegant-icon icon_star_alt"></i></span>
                                                </h5>
                                                <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                    <span class="post-on">{{ $blog->created_at }}</span>
                                                    <span class="time-reading has-dot">11 mins read</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                              @endforeach
                            </div>
                        </div>
                        <div class="pagination-area mb-30 wow fadeInUp animated">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-start">
                                    <li class="page-item"><a class="page-link" href="#"><i class="elegant-icon arrow_left"></i></a></li>
                                    <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                    <li class="page-item"><a class="page-link" href="#">02</a></li>
                                    <li class="page-item"><a class="page-link" href="#">03</a></li>
                                    <li class="page-item"><a class="page-link" href="#">04</a></li>
                                    <li class="page-item"><a class="page-link" href="#"><i class="elegant-icon arrow_right"></i></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <x-author/>
                </div>
            </div>
        </div>
      </main>
@endsection