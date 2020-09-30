<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Free Writers</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="imgs/theme/favicon.png">
    <!-- NewsBoard CSS  -->
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/widgets.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/responsive.css') }}">
    @yield('styles')
</head>

<body>
    <div class="scroll-progress primary-bg"></div>
    <!-- Start Preloader -->
    <!--     <div class="preloader text-center">
        <div class="circle"></div>
    </div> -->
    <!--Offcanvas sidebar-->
    <aside id="sidebar-wrapper" class="custom-scrollbar offcanvas-sidebar">
        <button class="off-canvas-close"><i class="elegant-icon icon_close"></i></button>
        <div class="sidebar-inner">
            <!--Categories-->
            <div class="sidebar-widget widget_categories mb-50 mt-30">
                <div class="widget-header-2 position-relative">
                    <h5 class="mt-5 mb-15">Hot topics</h5>
                </div>
                <div class="widget_nav_menu">
                    <ul>
                        <li class="cat-item cat-item-2"><a href="category.html">Travel tips</a> <span class="post-count">30</span></li>
                        <li class="cat-item cat-item-3"><a href="category-grid.html">Book review</a> <span class="post-count">25</span></li>
                        <li class="cat-item cat-item-4"><a href="category-list.html">Hotel review</a> <span class="post-count">16</span></li>
                        <li class="cat-item cat-item-5"><a href="category-masonry.html">Destinations </a> <span class="post-count">22</span></li>
                        <li class="cat-item cat-item-6"><a href="category-big.html">Lifestyle</a> <span class="post-count">25</span></li>
                    </ul>
                </div>
            </div>
            <!--Latest-->
            <div class="sidebar-widget widget-latest-posts mb-50">
                <div class="widget-header-2 position-relative mb-30">
                    <h5 class="mt-5 mb-30">Don't miss</h5>
                </div>
                <div class="post-block-list post-module-1 post-module-5">
                    <ul class="list-post">
                        <li class="mb-30">
                            <div class="d-flex hover-up-2 transition-normal">
                                <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                    <a class="color-white" href="single.html">
                                        <img src="http://via.placeholder.com/500x500" alt="">
                                    </a>
                                </div>
                                <div class="post-content media-body">
                                    <h6 class="post-title mb-15 text-limit-2-row font-medium"><a href="single.html">The Life of a Travel Writer with David Farley</a></h6>
                                    <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                        <span class="post-on">05 August</span>
                                        <span class="post-by has-dot">300 views</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="mb-30">
                            <div class="d-flex hover-up-2 transition-normal">
                                <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                    <a class="color-white" href="single.html">
                                        <img src="http://via.placeholder.com/500x500" alt="">
                                    </a>
                                </div>
                                <div class="post-content media-body">
                                    <h6 class="post-title mb-15 text-limit-2-row font-medium"><a href="single.html">Why Don’t More Black American Women Travel Solo?</a></h6>
                                    <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                        <span class="post-on">12 August</span>
                                        <span class="post-by has-dot">23k views</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="mb-30">
                            <div class="d-flex hover-up-2 transition-normal">
                                <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                    <a class="color-white" href="single.html">
                                        <img src="http://via.placeholder.com/500x500" alt="">
                                    </a>
                                </div>
                                <div class="post-content media-body">
                                    <h6 class="post-title mb-15 text-limit-2-row font-medium"><a href="single.html">The 22 Best Things to See and Do in Bangkok</a></h6>
                                    <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                        <span class="post-on">27 August</span>
                                        <span class="post-by has-dot">23k views</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!--Ads-->
            <div class="sidebar-widget widget-ads">
                <div class="widget-header-2 position-relative mb-30">
                    <h5 class="mt-5 mb-30">Advertise banner</h5>
                </div>
                <a href="https://themeforest.net/user/alithemes/portfolio" target="_blank">
                    <img class="advertise-img border-radius-5" src="http://via.placeholder.com/432x558" alt="">
                </a>
            </div>
        </div>
    </aside>
    <!-- Start Header -->
    <header class="main-header header-style-1 font-heading">
        <div class="header-sticky">
            <div class="container align-self-center">
                <div class="mobile_menu d-lg-none d-block"></div>
                <div class="main-nav d-none d-lg-block float-left">
                    <nav>
                        <!--Desktop menu-->
                        <ul class="main-menu d-none d-lg-inline font-small">
                            <img src="img/logo.png" alt="" style="width: 40px">
                            <li class="current-item">
                                <a href="/"> <i class="elegant-icon icon_house_alt mr-5"></i> {{__('customlang.home')}}</a>
                            </li>
                            <li class="menu-item-has-children"> 
                              <a href="/blogs">
                              {{__('customlang.blogs')}}
                              </a> 
                              <ul class="sub-menu text-muted font-small">
                                    <li><a href="/blogs/art">{{__('customlang.art')}}</a></li>
                                    <li><a href="/blogs/books">{{__('customlang.bookintro')}}</a></li>
                                    <li><a href="/blogs/interview">{{__('customlang.interview')}}</a></li>
                                    <li><a href="/blogs/history">{{__('customlang.history')}}</a></li>
                                    <li><a href="/blogs/self-development">{{__('customlang.self-dev')}}</a></li>
                                    <li><a href="/blogs/politics">{{__('customlang.politics')}}</a></li>
                              </ul>
                            </li>
                            <li> <a href="/academy">FW Academy</a> </li>
                            <li> <a href="/publish">FW Publish</a> </li>
                            <li> <a href="/about">{{__('customlang.about')}}</a> </li>
                        </ul>
                        <!--Mobile menu-->
                        <ul id="mobile-menu" class="d-block d-lg-none text-muted">
                            <img src="img/logo.png" alt="" style="width: 40px">
                            <li class="current-item">
                                <a href="/"> <i class="elegant-icon icon_house_alt mr-5"></i> {{__('customlang.home')}}</a>
                            </li>
                            <li class="menu-item-has-children"> 
                              <a href="/blogs">
                              {{__('customlang.blogs')}}
                              </a> 
                              <ul class="sub-menu text-muted font-small">
                                    <li><a href="/blogs/art">{{__('customlang.art')}}</a></li>
                                    <li><a href="/blogs/books">{{__('customlang.books')}}</a></li>
                                    <li><a href="/blogs/interview">{{__('customlang.interview')}}</a></li>
                                    <li><a href="/blogs/history">{{__('customlang.history')}}</a></li>
                                    <li><a href="/blogs/self-development">{{__('customlang.self-dev')}}</a></li>
                                    <li><a href="/blogs/politics">{{__('customlang.politics')}}</a></li>
                              </ul>
                            </li>
                            <li> <a href="/academy">FW Academy</a> </li>
                            <li> <a href="/publish">FW Publish</a> </li>
                            <li> <a href="/about">{{__('customlang.about')}}</a> </li>
                        </ul>
                    </nav>
                </div>
                
                <div class="float-right header-tools text-muted font-small">
                <!-- <button class="search-icon d-none d-md-inline"><span class="mr-15 text-muted font-small"><i class="elegant-icon icon_search mr-5"></i>Search</span></button> -->
                        <ul class="main-menu d-none d-lg-inline font-small">
                            <li class="menu-item-has-children"> 
                              <a href="">
                              {{__('customlang.language')}}
                              </a> 
                              <ul class="sub-menu text-muted font-small">
                                    <li><a href="/lang/en">English</a></li>
                                    <li><a href="/lang/mn">Монгол</a></li>
                              </ul>
                            </li>
                            </ul>
                    <ul class="header-social-network d-inline-block list-inline mr-15">
                        <li class="list-inline-item"><a class="social-icon fb text-xs-center" target="_blank" href="#"><i class="elegant-icon social_facebook"></i></a></li>
                        <li class="list-inline-item"><a class="social-icon tw text-xs-center" target="_blank" href="#"><i class="elegant-icon social_twitter "></i></a></li>
                    </ul>
                    <div class="off-canvas-toggle-cover d-inline-block">
                        <div class="off-canvas-toggle hidden d-inline-block" id="off-canvas-toggle">
                            <span></span>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </header>
    <!--Start search form-->
    <!-- <div class="main-search-form">
        <div class="container">
            <div class=" pt-50 pb-50 ">
                <div class="row mb-20">
                    <div class="col-12 align-self-center main-search-form-cover m-auto">
                        <p class="text-center"><span class="search-text-bg">Search</span></p>
                        <form action="#" class="search-header">
                            <div class="input-group w-100">
                                <input type="text" class="form-control" placeholder="Search stories, places and people">
                                <div class="input-group-append">
                                    <button class="btn btn-search bg-white" type="submit">
                                        <i class="elegant-icon icon_search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row mt-80">
                    <div class="col-lg-4">
                        <div class="d-flex bg-grey has-border p-25 hover-up-2 transition-normal border-radius-5 mb-30">
                            <div class="post-thumb post-thumb-64 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                <a class="color-white" href="single.html">
                                    <img src="http://via.placeholder.com/500x500" alt="">
                                </a>
                            </div>
                            <div class="post-content media-body">
                                <h6> <a href="category.html">Travel Tips</a> </h6>
                                <p class="text-muted font-small">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="d-flex bg-grey has-border p-25 hover-up-2 transition-normal border-radius-5 mb-30">
                            <div class="post-thumb post-thumb-64 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                <a class="color-white" href="single.html">
                                    <img src="http://via.placeholder.com/500x500" alt="">
                                </a>
                            </div>
                            <div class="post-content media-body">
                                <h6> <a href="category.html">Lifestyle</a> </h6>
                                <p class="text-muted font-small">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4  col-md-6">
                        <div class="d-flex bg-grey has-border p-25 hover-up-2 transition-normal border-radius-5 mb-30">
                            <div class="post-thumb post-thumb-64 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                <a class="color-white" href="single.html">
                                    <img src="http://via.placeholder.com/500x500" alt="">
                                </a>
                            </div>
                            <div class="post-content media-body">
                                <h6> <a href="category.html">Hotel Review</a> </h6>
                                <p class="text-muted font-small">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    
    @yield('content')

    <!-- Footer Start-->
    <footer class="pt-50 pb-20 bg-grey">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="sidebar-widget wow fadeInUp animated mb-30">
                        <div class="widget-header-2 position-relative mb-30">
                            <h5 class="mt-5 mb-30">About me</h5>
                        </div>
                        <div class="textwidget">
                            <p>
                                Start writing, no matter what. The water does not flow until the faucet is turned on.
                            </p>
                            <p><strong class="color-black">Address</strong><br>
                                123 Main Street<br>
                                New York, NY 10001</p>
                            <p><strong class="color-black">Follow me</strong><br>
                                <ul class="header-social-network d-inline-block list-inline color-white mb-20">
                                    <li class="list-inline-item"><a class="fb" href="#" target="_blank" title="Facebook"><i class="elegant-icon social_facebook"></i></a></li>
                                    <li class="list-inline-item"><a class="tw" href="#" target="_blank" title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>
                                </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="sidebar-widget widget_categories wow fadeInUp animated mb-30" data-wow-delay="0.1s">
                        <div class="widget-header-2 position-relative mb-30">
                            <h5 class="mt-5 mb-30">Quick link</h5>
                        </div>
                        <ul class="font-small">
                            <li class="cat-item cat-item-2"><a href="/">{{__('customlang.home')}}</a></li>
                            <li class="cat-item cat-item-4"><a href="/publish">FW Publish</a></li>
                            <li class="cat-item cat-item-5"><a href="/academy">FW Academy</a></li>
                            <li class="cat-item cat-item-6"><a href="/blogs">{{__('customlang.blogs')}}</a></li>
                            <li class="cat-item cat-item-7"><a href="/about">{{__('customlang.about')}}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="sidebar-widget widget_newsletter wow fadeInUp animated mb-30" data-wow-delay="0.3s">
                        <div class="widget-header-2 position-relative mb-30">
                            <h5 class="mt-5 mb-30">{{__('customlang.newsletter')}}</h5>
                        </div>
                        <div class="newsletter">
                            <p class="font-medium">Subscribe to our newsletter and get our newest updates right on your inbox.</p>
                            <form class="input-group form-subcriber mt-30 d-flex">
                                <input type="email" class="form-control bg-white font-small" placeholder="Enter your email">
                                <button class="btn bg-primary text-white" type="submit">{{__('customlang.subscribe')}}</button>
                                <label class="mt-20"> <input class="mr-5" name="name" type="checkbox" value="1" required=""> I agree to the <a href="#" target="_blank">terms &amp; conditions</a> </label>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copy-right pt-30 mt-20 wow fadeInUp animated">
                <p class="float-md-left font-small text-muted">© 2020, Free Writers </p>
                <p class="float-md-right font-small text-muted">
                {{__('customlang.rights')}}
                </p>
            </div>
        </div>
    </footer>
    <!-- End Footer -->
    <div class="dark-mark"></div>
    <!-- Vendor JS-->
       <script src=" js/vendor/modernizr-3.5.0.min.js"></script>
    <script src=" js/vendor/jquery-1.12.4.min.js"></script>
    <script src=" js/vendor/popper.min.js"></script>
    <script src=" js/vendor/bootstrap.min.js"></script>
    <script src=" js/vendor/jquery.slicknav.js"></script>
    <script src=" js/vendor/slick.min.js"></script>
    <script src=" js/vendor/wow.min.js"></script>
    <script src=" js/vendor/jquery.ticker.js"></script>
    <script src=" js/vendor/jquery.vticker-min.js"></script>
    <script src=" js/vendor/jquery.scrollUp.min.js"></script>
    <script src=" js/vendor/jquery.nice-select.min.js"></script>
    <script src=" js/vendor/jquery.magnific-popup.js"></script>
    <script src=" js/vendor/jquery.sticky.js"></script>
    <script src=" js/vendor/perfect-scrollbar.js"></script>
    <script src=" js/vendor/waypoints.min.js"></script>
    <script src=" js/vendor/jquery.theia.sticky.js"></script>
    <script src=" js/vendor/imagesloaded.pkgd.min.js"></script>
    <script src=" js/vendor/masonry.pkgd.min.js"></script>
    <!-- Main JS -->
    <script src=" js/main.js"></script>
</body>

</html>