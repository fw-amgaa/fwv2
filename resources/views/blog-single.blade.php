<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="img/fav-icon.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title> Writers | Blog Single </title>

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

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet"> 

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
        <section class="single_blog_area">
            <div class="container">
                <div class="single_blog_title">
                    <a href="#"><h6 class="blog_category" style="text-transform: capitalize">{{ $blog->sluger }}</h6></a>
                    <h2>{{ $blog->title }}</h2>
                    <a href="#"><h5 class="blog_date"> {{__('customlang.posted')}}: {{ $blog->created_at }}</h5></a>
                </div>
                <div class="single_blog_img_content">
                    <div class="blog_image_slider owl-carousel">
                        <div class="item">
                            <img src="{{ Voyager::image($blog->image) }}" alt="">
                        </div>
                    </div>
                    <div class="single_blog_content">
                        {!! $blog->body !!}
                    </div>
                </div>
                <div class="single_blog_category">
                    <div class="pull-left">
                        <b>{{__('customlang.category')}}: </b> <a href="#" style="text-transform: capitalize">{{ $blog->sluger }}</a>
                    </div>
                    <div class="pull-right">
                        <h4>{{__('customlang.share')}} :</h4>
                        <ul class="share_icon">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="ti-google"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Blog Main Area =================-->
        
        <!--================Like post Area =================-->
        <section class="like_post_area">
            <div class="container">
                <div class="sec_title sec_title3">
                    <h2>{{__('customlang.also')}}...</h2>
                </div>
                <div class="row">
                    @foreach($alsoBlogs as $blog)
                    <div class="col-md-4">
                        <div class="n_blog_item">
                            <div class="blog_image">
                                <img src="{{ Voyager::image($blog->image) }}" alt="">
                                <div class="blog_hover">
                                    <a class="image_pop"  href="{{ Voyager::image($blog->image) }}"><i class="fa fa-plus" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                                </div>
                                <div class="blog_p_icon">
                                    <i class="fa fa-picture-o"></i>
                                </div>
                            </div>
                            <div class="n_blog_text">
                                <a href="/blogs/{{ $blog->slug }}"><h5>{{ $blog->created_at }}</h5></a>
                                <a href="/blogs/{{ $blog->slug }}"><h3>{{ $blog->title }}</h3></a>
                                <p>{{ $blog->excerpt }}</p>
                                <a class="blog_r_btn" href="/blogs/{{ $blog->slug }}" style="text-align: center !important">{{__('customlang.read')}}</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!--================End Like post Area =================-->
        
        <!--================Comment Area =================-->
        <!-- <section class="comment_area">
            <div class="container">
                <div class="comment_list">
                    <div class="comment_title">
                        <h3>Comments (4)</h3>
                    </div>
                    <div class="user_comment">
                        <div class="media">
                            <div class="media-left">
                                <img class="img-circle" src="img/comment/comment-1.png" alt="">
                            </div>
                            <div class="media-body">
                                <a href="#"><h4>Kusner Ivanka</h4></a>
                                <a href="#"><h5>Dec 12,2017 </h5></a>
                                <p>Maecenas sed diam eget risus varius blandit sit amet non magna. Curabitur blandit tempus porttitor. Morbi leo risus, porta ac consectetur ac, 
                                        vestibulum at eros. Vestibulum id ligula porta felis euismod semper. Maecenas sed diam eget risus varius blandit sit amet non magna. Curabitur blandit tempus porttitor. Morbi leo risus, porta ac consectetur ac.</p>
                                <a class="comment_reply" href="#">Reply</a>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <img class="img-circle" src="img/comment/comment-2.png" alt="">
                            </div>
                            <div class="media-body">
                                <a href="#"><h4>Diamante Rosinante</h4></a>
                                <a href="#"><h5>Dec 12,2017 </h5></a>
                                <p>Maecenas sed diam eget risus varius blandit sit amet non magna. Curabitur blandit tempus porttitor. Morbi leo risus, porta ac consectetur ac, 
                                    vestibulum at eros. Vestibulum id ligula porta felis euismod semper. Maecenas sed diam eget risus varius blandit sit amet non magna. Curabitur blandit tempus porttitor. Morbi leo risus, porta ac consectetur ac.</p>
                                <a class="comment_reply" href="#">Reply</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="comment_form_area">
                    <div class="comment_title">
                        <h3>Post A Comment</h3>
                        <p>Your email address will not be published.</p>
                    </div>
                    <div class="row">
                        <form class="office_contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                            <div class="form-group col-md-12">
                                <textarea class="form-control" name="message" id="message" rows="1" placeholder="Message"></textarea>
                            </div>
                            <div class="form-group p_star col-md-4">
                                <input class="form-control" name="name" type="text" required>
                                <span class="placeholder" data-placeholder="Name"></span>
                            </div>
                            <div class="form-group p_star col-md-4">
                                <input class="form-control" name="email" type="email" required>
                                <span class="placeholder" data-placeholder="Email"></span>
                            </div>
                            <div class="form-group p_star col-md-4">
                                <input type="text" class="form-control" id="website" name="website" placeholder="Website">
                            </div>
                            <div class="form-group col-md-12">
                                <button type="submit" value="submit" class="btn submit_dark form-control">Send Comment</button>
                             </div>
                        </form>
                    </div>
                </div>
            </div>
        </section> -->
        <!--================End Comment Area =================-->
                                
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