<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="img/fav-icon.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title> Writers | Home </title>

        <!-- Icon css link -->
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="vendors/linearicon/style.css" rel="stylesheet">
        <link href="vendors/themify/themify-icons.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Rev slider css -->
        <link href="vendors/revolution/css/settings.css" rel="stylesheet">
        <link href="vendors/revolution/css/layers.css" rel="stylesheet">
        <link href="vendors/revolution/css/navigation.css" rel="stylesheet">
        <link href="vendors/animate-css/animate.css" rel="stylesheet">
        
        <!-- Extra plugin css -->
        <link href="vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">
        <link href="vendors/magnify-popup/magnific-popup.css" rel="stylesheet">
        <link href="vendors/scroll/jquery.mCustomScrollbar.min.css" rel="stylesheet">
        <link href="vendors/bootstrap-selector/bootstrap-select.css" rel="stylesheet">
        <link href="vendors/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link rel="stylesheet" href="vendors/pagepiling/jquery.pagepiling.css">
        
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <style>
            .main_header_area .pull-left i {
                color: #fff;
            }
            .main_header_area.affix .pull-left i {
                color: black;
            }
            .main_header_area .pull-left .h_contact_bar{
                color: #fff;
            }
            .main_header_area.affix .pull-left .h_contact_bar{
                color: black;
            }
            .main_header_area .pull-right i{
                color: #fff;
            }
            .main_header_area.affix .pull-right i{
                color: black;
            }
            .main_header_area .logo-text{
                color: white;
            }
            .main_header_area.affix .logo-text{
                color: black;
            }
            .main_header_area .pull-left .h_contact_bar:before{
                background: rgba(255, 255, 255, 0.5);
            }
            .main_header_area.affix .pull-left .h_contact_bar:before{
                background: black;
            }
            .main_header_area.business_menu.transparent_menu .navbar-default .nav.navbar-nav > li > a {
                color: #fff;
            }
            .main_header_area.business_menu.transparent_menu.affix .navbar-default .nav.navbar-nav > li > a {
                color: black;
            }
        </style>
         <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.header','data' => []]); ?>
<?php $component->withName('header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
        
        <!--================Slider Area =================-->
        <section class="main_slider_area">
            <div id="main_slider" class="rev_slider" data-version="5.3.1.6">
                <ul> 
                <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li data-index="rs-1595" data-transition="slotzoom-horizontal" data-slotamount="10">
                        <!-- MAIN IMAGE -->
                        <img src="<?php echo e(Voyager::image($blog->image)); ?>" data-bgparallax="7" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">
                        <!-- LAYERS -->

                        <!-- LAYER NR. 1 -->
                        <div class="slider_text_box">
                            <div class="tp-caption first_text" 
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                                data-x="['center']" 
                                data-y="top"
                                data-voffset="['300','300','300','210','180','185']"
                                data-hoffset="['0','0','0','0','0']"
                                data-fontsize="['32','32','32','25','25','18']"
                                data-lineheight="['40','40','40','28','28']"
                                data-transform_idle="o:1;"
                                data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" 
                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                                data-start="1000" 
                                data-splitin="chars" 
                                data-splitout="none" 
                                data-responsive_offset="on">Үнэ цэнийг хуваалцья 
                            </div>
                            <div class="tp-caption secand_text" 
                                data-x="['center']" 
                                data-y="top" 
                                data-voffset="['365','365','350','250','210']"
                                data-fontsize="['60','60','60','50','40','30']" 
                                data-lineheight="['60','60','60','60','75']" 
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                                data-transform_idle="o:1;"
                                data-transform_in="x:[105%];z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;" 
                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                data-mask_in="x:50px;y:0px;s:inherit;e:inherit;" 
                                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                                data-start="500" 
                                data-splitout="none" 
                                data-responsive_offset="on" 
                                data-elementdelay="0.05">Чөлөөт бичээчид
                            </div>
                            <div class="tp-caption third_text" 
                                data-x="['center']" 
                                data-y="top" 
                                data-voffset="['450','450','450','330','290','290','280']"
                                data-fontsize="['20','20','18','18','18']"
                                data-lineheight="['20','20','20','20','20','20','16']"
                                data-width="['820','840','820','600','450','350','380']"
                                data-height="none"
                                data-transform_idle="o:1;"
                                data-whitespace="normal"
                                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                                data-start="800" 
                                data-splitin="none" 
                                data-splitout="none" 
                                data-responsive_offset="on" 
                                data-elementdelay="0.05" ><p>Бидний дуртай авга ах</p>
                            </div>
                            <div class="tp-caption button" 
                                data-x="['center']" 
                                data-y="top" 
                                data-voffset="['560','570','560','450','430','430','510']" 
                                data-hoffset="['0','0','0','0','0','0']" 
                                data-fontsize="['20','20','20','20','20','20']"
                                data-lineheight="['20','20','20','20','20']"
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                                data-textAlign="['center','left','left','left']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[10,10,10,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[10,10,10,0]"
                                data-start="1500" 
                                data-splitin="none" 
                                data-splitout="none" 
                                data-responsive_offset="on">
                                <a class="l_btn" href="/blog">Read News</a>
                                <a class="c_btn" href="/contact">Contact us</a>
                            </div>
                        </div>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        </section>
        <!--================End Slider Area =================-->
        
        <!--================Start feature_area =================-->
        <!-- <section class="feature_area">
            <div class="main_title">
                <h5>Industry expertise</h5>
                <h2>Klamp Business Features</h2>
            </div>
            <div class="container">
                <div class="row feature_item_inner">
                    <div class="col-md-4">
                        <div class="media">
                            <div class="media-left">
                                <i class="ti-settings"></i>
                            </div>
                            <div class="media-body">
                                <a href="#"><h4>Easy Customize</h4></a>
                                <p>Aenean lacinia bibendum nulla sed consectetur. Nulla vitae elit libero, a pharetra augue euismod.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="media">
                            <div class="media-left">
                                <i class="fa fa-sliders"></i>
                            </div>
                            <div class="media-body">
                                <a href="#"><h4>Fully Responsive</h4></a>
                                <p>Aenean lacinia bibendum nulla sed consectetur. Nulla vitae elit libero, a pharetra augue euismod.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="media">
                            <div class="media-left">
                                <i class="fa fa-lightbulb-o"></i>
                            </div>
                            <div class="media-body">
                                <a href="#"><h4>Creative Design</h4></a>
                                <p>Aenean lacinia bibendum nulla sed consectetur. Nulla vitae elit libero, a pharetra augue euismod.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="media">
                            <div class="media-left">
                                <i class="lnr lnr-layers"></i>
                            </div>
                            <div class="media-body">
                                <a href="#"><h4>Clean & Clear Layer Design</h4></a>
                                <p>Aenean lacinia bibendum nulla sed consectetur. Nulla vitae elit libero, a pharetra augue euismod.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="media">
                            <div class="media-left">
                                <i class="fa fa-hand-pointer-o"></i>
                            </div>
                            <div class="media-body">
                                <a href="#"><h4>One-click Import</h4></a>
                                <p>Aenean lacinia bibendum nulla sed consectetur. Nulla vitae elit libero, a pharetra augue euismod.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="media">
                            <div class="media-left">
                                <i class="ti-layout-media-center-alt"></i>
                            </div>
                            <div class="media-body">
                                <a href="#"><h4>Amazing Sliders</h4></a>
                                <p>Aenean lacinia bibendum nulla sed consectetur. Nulla vitae elit libero, a pharetra augue euismod.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!--================End feature_area =================-->
        
        <!--================About Area =================-->
        <!-- <section class="about_area">
            <div class="about_left_side">
                <div class="sec_b_title">
                    <h5>About Us</h5>
                    <h2>Who we are</h2>
                    <p>Aenean lacinia bibendum nulla sed consectetur. Vestibulum id ligula porta felis euismod semper. </p>
                    <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
                </div>
                <div class="experience_area">
                    <div class="experience_box">
                        <img src="img/about/experience.jpg" alt="">
                        <div class="ex_box">
                            <div class="ex_box_inner">
                                <h4>More than <span>25</span> years of <span>experience</span></h4>
                            </div>
                        </div>
                    </div>
                    <div class="experience_count">
                        <div class="media">
                            <div class="media-left">
                                <img src="img/icon/user-icon.png" alt="">
                            </div>
                            <div class="media-body">
                                <h4 class="counter">32</h4>
                                <p>Professional Advisors</p>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <img src="img/icon/camera-icon.png" alt="">
                            </div>
                            <div class="media-body">
                                <h4 class="counter">169</h4>
                                <p>Projects Complited</p>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <img src="img/icon/cup.png" alt="">
                            </div>
                            <div class="media-body">
                                <h4 class="counter">10</h4>
                                <p>Professional Advisors</p>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <img src="img/icon/batch.png" alt="">
                            </div>
                            <div class="media-body">
                                <h4 class="counter">687</h4>
                                <p>Satisfied Customers</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about_right_side">
                <div class="about_r_part_1">
                    <div class="mission_text">
                        <h5>Crreative agency</h5>
                        <h4>Our Mission</h4>
                        <p>Aenean lacinia bibendum nulla sed consectetur. Vestibulum id ligula porta felis euismod semper. </p>
                        <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                        <a class="l_btn" href="#">learn more</a>
                    </div>
                </div>
                <div class="about_r_part_2">
                    <div class="mission_text">
                        <h5>Crreative agency</h5>
                        <h4>Strategy Planning</h4>
                        <p>Aenean lacinia bibendum nulla sed consectetur. Vestibulum id ligula porta felis euismod semper. </p>
                        <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                        <a class="l_btn" href="#">learn more</a>
                    </div>
                </div>
            </div>
        </section> -->
        <!--================End About Area =================-->
        
        <!--================End About Area =================-->
        <section class="latest_project_area">
            <div class="container">
                <div class="main_title">
                    <h5>Check Our Works</h5>
                    <h2>Latest Projects</h2>
                </div>
                <nav class="latest_menu">
                    <ul>
                        <li data-filter="*" class="active"><a href="">All</a></li>
                        <li data-filter=".financial"><a href="">Financial</a></li>
                        <li data-filter=".design"><a href="">Web Design</a></li>
                        <li data-filter=".marketing"><a href="">Seo & Marketing</a></li>
                        <li data-filter=".startup"><a href="">IT Startup</a></li>
                    </ul>
                </nav>
                <div class="row">
                    <div class="l_project_inner">
                        <div class="col-md-4 col-sm-6 l_p_i design marketing">
                            <div class="l_project_item">
                                <img src="img/l-project/l-project-1.jpg" alt="">
                                <div class="l_project_hover">
                                    <div class="l_project_h_inner">
                                        <h4>Business Conference 2019</h4>
                                        <p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
                                        <a href="#">See project <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 l_p_i financial">
                            <div class="l_project_item">
                                <img src="img/l-project/l-project-2.jpg" alt="">
                                <div class="l_project_hover">
                                    <div class="l_project_h_inner">
                                        <h4>Business Conference 2019</h4>
                                        <p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
                                        <a href="#">See project <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 l_p_i design marketing startup">
                            <div class="l_project_item">
                                <img src="img/l-project/l-project-3.jpg" alt="">
                                <div class="l_project_hover">
                                    <div class="l_project_h_inner">
                                        <h4>Business Conference 2019</h4>
                                        <p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
                                        <a href="#">See project <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 l_p_i financial design">
                            <div class="l_project_item">
                                <img src="img/l-project/l-project-4.jpg" alt="">
                                <div class="l_project_hover">
                                    <div class="l_project_h_inner">
                                        <h4>Business Conference 2019</h4>
                                        <p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
                                        <a href="#">See project <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 l_p_i design startup">
                            <div class="l_project_item">
                                <img src="img/l-project/l-project-5.jpg" alt="">
                                <div class="l_project_hover">
                                    <div class="l_project_h_inner">
                                        <h4>Business Conference 2019</h4>
                                        <p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
                                        <a href="#">See project <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 l_p_i financial design">
                            <div class="l_project_item">
                                <img src="img/l-project/l-project-6.jpg" alt="">
                                <div class="l_project_hover">
                                    <div class="l_project_h_inner">
                                        <h4>Business Conference 2019</h4>
                                        <p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
                                        <a href="#">See project <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End About Area =================-->

                <!--================News Blog Area =================-->
        <!-- <section class="news_blog_area">
            <div class="container">
                <div class="main_title">
                    <h5>Latest News</h5>
                    <h2>From blog news</h2>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="n_blog_item">
                            <div class="blog_image_slider owl-carousel">
                                <div class="item">
                                    <img src="img/blog/news-blog/n-blog-1.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img src="img/blog/news-blog/n-blog-2.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img src="img/blog/news-blog/n-blog-3.jpg" alt="">
                                </div>
                            </div>
                            <div class="n_blog_text">
                                <a href="#"><h5>December 14, 2019</h5></a>
                                <a href="#"><h3>How To Wear Fishnets Like a Street Style Superstar</h3></a>
                                <p>It is a long established fact that a reader will be distracted by the  when at its layout letters.</p>
                                <a class="blog_r_btn" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="n_blog_item">
                            <div class="blog_image">
                                <img src="img/blog/news-blog/n-blog-2.jpg" alt="">
                                <div class="blog_hover">
                                    <a class="image_pop"  href="img/blog/news-blog/n-blog-2.jpg"><i class="fa fa-plus" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <div class="n_blog_text">/portfolio-singled fact that a reader will be distracted by the  when at its layout letters.</p>
                                <a class="blog_r_btn" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="n_blog_item">
                            <div class="blog_video">
                                <img class="img-responsive" src="img/blog/news-blog/n-blog-3.jpg" alt="">
                                <div class="blog_hover">
                                    <a class="popup-youtube" href="https://www.youtube.com/watch?v=3xJzYpRVQVA"><i class="fa fa-play" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <div class="n_blog_text">
                                <a href="#"><h5>December 14, 2019</h5></a>
                                <a href="#"><h3>How To Wear Fishnets Like a Street Style Superstar</h3></a>
                                <p>It is a long established fact that a reader will be distracted by the  when at its layout letters.</p>
                                <a class="blog_r_btn" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!--================End News Blog Area =================-->
        
        <!--================Customer Area =================-->
        <section class="customer_saying_area_two">
            <!-- <div class="container">
                <div class="sec_title">
                    <h2>What our customer saying</h2>
                </div>
                <div class="saying_slider owl-carousel">
                    <div class="item">
                        <div class="saying_item">
                            <img class="img-circle" src="img/saying-slider/saying-client-1.png" alt="">
                            <p>Aenean lacinia bibendum nulla sed consectetur. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                            <a href="#"><h4>Rosinante Vole</h4></a>
                            <h5>SEO Marketer</h5>
                        </div>
                    </div>
                    <div class="item">
                        <div class="saying_item">
                            <img class="img-circle" src="img/saying-slider/saying-client-1.png" alt="">
                            <p>Aenean lacinia bibendum nulla sed consectetur. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                            <a href="#"><h4>Rosinante Vole</h4></a>
                            <h5>SEO Marketer</h5>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="row m0 clients_logo">
                <div class="clogo_item">
                    <img src="img/clients-logo/coffie.png" alt="">
                </div>
                <div class="clogo_item">
                    <img src="img/clients-logo/chock.png" alt="">
                </div>
                <div class="clogo_item">
                    <img src="img/clients-logo/market.png" alt="">
                </div>
            </div>
        </section>
        <!--================End Customer Area =================-->
        
        <!--================Find More Area =================-->
        <!-- <section class="find_more_area">
            <div class="container">
                <div class="pull-left">
                    <h5>Purchase Klamp today!</h5>
                    <h3>What are you waiting for?</h3>
                </div>
                <div class="pull-right">
                    <a class="l_btn" href="#">find our more</a>
                </div>
            </div>
        </section> -->
        <!--================End Find More Area =================-->
        
        <!--================Team Members Area =================-->
        <!-- <section class="team_members_area">
            <div class="container">
                <div class="team_details">
                    <div class="main_w_title">
                        <h5>Behind the scenes</h5>
                        <h2>We help clients Business & Consulting</h2>
                        <p>Aenean lacinia bibendum nulla sed consectetur. Vestibulum id ligula porta felis euismod semper. </p>
                        <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus . Aenean lacinia bibendum nulla sed consectetur vestibulum id ligula porta.</p>
                    </div>
                    <a class="c_btn" href="#">view team members</a>
                </div>
            </div>
        </section> -->
        <!--================End Team Members Area =================-->
        
        <!--================Map Contact Area =================-->
        <!-- <section class="map_area">
            <div id="mapBox" class="mapBox row m0" 
            data-lat="40.7058316" 
            data-lon="-74.2581888" 
            data-zoom="10" 
            data-marker="img/map-marker.png" 
            data-info="PO Box CT16122 Collins Street West, Victoria 8007, Australia."
            data-mlat="40.7029647"
            data-mlon="-73.638341"></div>
            <div class="office_word_area">
                <div class="office_text pull-left">
                    <div class="sec_b_title">
                        <h5>Address</h5>
                        <h2>Office in the world</h2>
                    </div>
                    <div class="office_text_inner">
                        <div class="office_text_item">
                            <h4>newyork office</h4>
                            <p>Brooklyn Law School. 250 Joralemon, New york </p>
                            <p>Monday to Friday : 9am to 8pm</p>
                            <p>creativewithjoy@gmail.com</p>
                        </div>
                        <div class="office_text_item">
                            <h4>amsterdam office</h4>
                            <p>Roeterseiland Campus Building E, 10th floor Amsterdam</p>
                            <p>Monday to Friday : 9am to 8pm</p>
                            <p>creativewithjoy@gmail.com</p>
                        </div>
                        <div class="office_text_item">
                            <h4>London office</h4>
                            <p>Brooklyn Law School. 250 Joralemon, New york </p>
                            <p>Monday to Friday : 9am to 8pm</p>
                            <p>creativewithjoy@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="contact_form pull-right">
                    <div class="sec_title">
                        <h5>Request a free consultation</h5>
                        <h2>Contact Form</h2>
                    </div>
                    <div class="row">
                        <form class="rewuest_contact" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                            </div>
                            <div class="form-group col-md-12">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" id="number" name="number" placeholder="Phone">
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" id="subject" name="subject" placeholder="Subjects">
                            </div>
                            <div class="form-group col-md-12">
                                <select class="selectpicker">
                                    <option>I would like to discuss</option>
                                    <option>I would like to discuss</option>
                                    <option>I would like to discuss</option>
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <button type="submit" value="submit your quote" class="btn submit_dark form-control">submit now</button>
                             </div>
                        </form>
                    </div>
                </div>
            </div>
        </section> -->
        <!--================End Map Contact Area =================-->
        
         <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.footer','data' => []]); ?>
<?php $component->withName('footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
        
        <!--================Contact Success and Error message Area =================-->
        <div id="success" class="modal modal-message fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <span class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></span>
                        <h2 class="modal-title">Thank you</h2>
                        <p class="modal-subtitle">Your message is successfully sent...</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modals error -->

        <div id="error" class="modal modal-message fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <span class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></span>
                        <h2 class="modal-title">Sorry</h2>
                        <p class="modal-subtitle"> Something went wrong </p>
                    </div>
                </div>
            </div>
        </div>
        <!--================End Contact Success and Error message Area =================-->
        
        
        <!--================End Footer Area =================-->
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery-2.2.4.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Rev slider js -->
        <script src="vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <!-- TYPEWRITER AND COMING SOON ADD ON -->
		<script type="text/javascript" src="vendors/revolution-addons/typewriter/js/revolution.addon.typewriter.js"></script>
		<script type="text/javascript" src="vendors/revolution-addons/countdown/revolution.addon.countdown.min.js"></script>
        <!--gmaps Js-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
        <script src="js/gmaps.min.js"></script>
        <!-- contact js -->
        <script src="js/jquery.form.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/contact.js"></script>
        <script src="js/mailchimp.js"></script>
        <script src="js/mail-chimp-active.js"></script>
        <!--CustomScrollbar js-->
        <script src="vendors/scroll/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="vendors/scroll/jquery.nicescroll.min.js"></script>
        <script src="vendors/counterup/waypoints.min.js"></script>
        <script src="vendors/counterup/jquery.counterup.min.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope.pkgd.min.js"></script>
        <script type="text/javascript" src="js/parallax.js"></script>
        <script src="vendors/pagepiling/jquery.pagepiling.min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/magnify-popup/jquery.magnific-popup.min.js"></script>
        <script src="vendors/bootstrap-selector/bootstrap-select.js"></script>
        <script src="vendors/lightbox/js/lightbox.min.js"></script>
        <script src="js/video_player.js"></script>
        <script src="js/theme.js"></script>
    </body>
</html><?php /**PATH /home/amgaa/Desktop/FreeWriters/fw-v2/laravel/resources/views/home.blade.php ENDPATH**/ ?>