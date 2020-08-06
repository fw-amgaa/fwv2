<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="img/fav-icon.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title> Writers | Blog </title>

        <!-- Icon css link -->
        <link href="{{ URL::asset('css/font-awesome.min.css')}}" rel="stylesheet">
        <link href="{{ URL::asset('vendors/linearicon/style.css')}}" rel="stylesheet">
        <link href="{{ URL::asset('vendors/themify/themify-icons.css')}}" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="{{ URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
        
        <!-- Extra plugin css -->
        <link href="{{ URL::asset('vendors/animate-css/animate.css')}}" rel="stylesheet">
        <link href="{{ URL::asset('vendors/scroll/jquery.mCustomScrollbar.css')}}" rel="stylesheet">
        <link href="{{ URL::asset('vendors/owl-carousel/owl.carousel.min.css')}}" rel="stylesheet">
        <link href="{{ URL::asset('vendors/magnify-popup/magnific-popup.css')}}" rel="stylesheet">
        <link href="{{ URL::asset('vendors/bootstrap-selector/bootstrap-select.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="{{ URL::asset('vendors/flexslider/css/flexslider.css')}}">
        
        <link href="{{ URL::asset('css/style.css')}}" rel="stylesheet">
        <link href="{{ URL::asset('css/responsive.css')}}" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <x-header/>
        
        <!--================Blog Main Area =================-->
        <section class="blog_main_area blog_main_fit">
            <div class="container">
                <div class="blog_main_inner">
                    <div class="breadcumd_title">
                        <h2>News</h2>
                        <p>This is news Landing Page</p>
                    </div>
                    <ul class="port_fillter blog_fillter">
                        <li class="active" data-filter="*">All</li>
                        <li data-filter=".fi">Financial</li>
                        <li data-filter=".web">Web Design</li>
                        <li data-filter=".seo">Seo & Marketing</li>
                        <li data-filter=".it">IT Startup</li>
                        <li data-filter=".br">Branding</li>
                        <li data-filter=".ph">Photography</li>
                    </ul>
                    <div class="row blog_main_item_inner">
                        @foreach($news as $new)
                            <div class="col-md-4 col-sm-6 main_blog_item web ph">
                                <div class="n_blog_item">
                                    <div class="blog_image">
                                        <img src="{{ URL::asset('img/blog/news-blog/n-blog-2.jpg')}}" alt="">
                                        <div class="blog_hover">
                                            <a class="image_pop"  href="img/blog/news-blog/n-blog-2.jpg"><i class="fa fa-plus" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="n_blog_text">
                                        <a href="#"><h5>{{ $new->created_at }}</h5></a>
                                        <a href="/news/{{ $new->slug }}"><h3>{{ $new->title }}</h3></a>
                                        <p>{{ $new->excerpt }}</p>
                                        <a class="blog_r_btn" href="/news/{{ $new->slug }}">Read More</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <!--================End Blog Main Area =================-->
        
        <x-footer/>
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="{{ URL::asset('js/jquery-2.2.4.js')}}"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{ URL::asset('js/bootstrap.min.js')}}"></script>
        <script src="{{ URL::asset('js/mailchimp.js')}}"></script>
        <script src="{{ URL::asset('js/mail-chimp-active.js')}}"></script>
        <!--parallax js-->
        <script type="text/javascript" src="{{ URL::asset('js/parallax.js')}}"></script>
        <script src="{{ URL::asset('vendors/scroll/jquery.mCustomScrollbar.concat.min.js')}}"></script>
        <script src="{{ URL::asset('vendors/scroll/jquery.nicescroll.min.js')}}"></script>
        <script src="{{ URL::asset('vendors/counterup/waypoints.min.js')}}"></script>
        <script src="{{ URL::asset('vendors/counterup/jquery.counterup.min.js')}}"></script>
        <script src="{{ URL::asset('vendors/isotope/imagesloaded.pkgd.min.js')}}"></script>
        <script src="{{ URL::asset('vendors/isotope/isotope.pkgd.min.js')}}"></script>
        <script src="{{ URL::asset('vendors/owl-carousel/owl.carousel.min.js')}}"></script>
        <script src="{{ URL::asset('vendors/magnify-popup/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{ URL::asset('vendors/bootstrap-selector/bootstrap-select.js')}}"></script>
        <script type="text/javascript" src="{{ URL::asset('vendors/flexslider/js/jquery.flexslider.js')}}"></script>
        <!-- instafeed-->
        <script type="text/javascript" src="{{ URL::asset('vendors/instafeed/instafeed.min.js')}}"></script>
        <script type="text/javascript" src="{{ URL::asset('vendors/instafeed/script.js')}}"></script>
        
        
        <script src="{{ URL::asset('js/theme.js')}}"></script>
    </body>
</html>