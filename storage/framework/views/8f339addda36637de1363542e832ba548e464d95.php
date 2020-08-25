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
        <link href="<?php echo e(URL::asset('css/font-awesome.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(URL::asset('vendors/linearicon/style.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(URL::asset('vendors/themify/themify-icons.css')); ?>" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="<?php echo e(URL::asset('css/bootstrap.min.css')); ?>" rel="stylesheet">
        
        <!-- Extra plugin css -->
        <link href="<?php echo e(URL::asset('vendors/animate-css/animate.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(URL::asset('vendors/scroll/jquery.mCustomScrollbar.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(URL::asset('vendors/owl-carousel/owl.carousel.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(URL::asset('vendors/magnify-popup/magnific-popup.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(URL::asset('vendors/bootstrap-selector/bootstrap-select.css')); ?>" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo e(URL::asset('vendors/flexslider/css/flexslider.css')); ?>">
        
        <link href="<?php echo e(URL::asset('css/style.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(URL::asset('css/responsive.css')); ?>" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
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
        
        <!--================Blog Main Area =================-->
        <section class="blog_main_area blog_main_fit">
            <div class="container">
                <div class="blog_main_inner">
                    <div class="breadcumd_title">
                        <h2>Blogs</h2>
                        <p>This is blog landing page</p>
                    </div>
                    <ul class="port_fillter blog_fillter">
                        <li class="active" data-filter="*">All</li>
                        <li data-filter=".history">History</li>
                        <li data-filter=".politics">Politics</li>
                        <li data-filter=".self-development">Self Development</li>
                        <li data-filter=".interview">Interview</li>
                        <li data-filter=".book-introduction">Book Introduction</li>
                    </ul>
                    <div class="row blog_main_item_inner">
                        <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-md-4 col-sm-6 main_blog_item web <?php echo e($blog->sluger); ?>">
                                <div class="n_blog_item">
                                    <div class="blog_image">
                                        <img src="<?php echo e(Voyager::image($blog->image)); ?>" alt="">
                                        <div class="blog_hover">
                                            <a class="image_pop"  href="<?php echo e(Voyager::image($blog->image)); ?>"><i class="fa fa-plus" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="n_blog_text">
                                        <a href="#"><h5><?php echo e($blog->created_at); ?></h5></a>
                                        <a href="/blogs/<?php echo e($blog->slug); ?>"><h3><?php echo e($blog->title); ?></h3></a>
                                        <p><?php echo e($blog->excerpt); ?></p>
                                        <a class="blog_r_btn" href="/blogs/<?php echo e($blog->slug); ?>" style="text-align: center !important">Read More</a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Blog Main Area =================-->
        
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
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="<?php echo e(URL::asset('js/jquery-2.2.4.js')); ?>"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="<?php echo e(URL::asset('js/bootstrap.min.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('js/mailchimp.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('js/mail-chimp-active.js')); ?>"></script>
        <!--parallax js-->
        <script type="text/javascript" src="<?php echo e(URL::asset('js/parallax.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('vendors/scroll/jquery.mCustomScrollbar.concat.min.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('vendors/scroll/jquery.nicescroll.min.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('vendors/counterup/waypoints.min.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('vendors/counterup/jquery.counterup.min.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('vendors/isotope/imagesloaded.pkgd.min.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('vendors/isotope/isotope.pkgd.min.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('vendors/owl-carousel/owl.carousel.min.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('vendors/magnify-popup/jquery.magnific-popup.min.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('vendors/bootstrap-selector/bootstrap-select.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(URL::asset('vendors/flexslider/js/jquery.flexslider.js')); ?>"></script>
        <!-- instafeed-->
        <script type="text/javascript" src="<?php echo e(URL::asset('vendors/instafeed/instafeed.min.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(URL::asset('vendors/instafeed/script.js')); ?>"></script>
        
        
        <script src="<?php echo e(URL::asset('js/theme.js')); ?>"></script>
    </body>
</html><?php /**PATH /home/amgaa/Desktop/FreeWriters/fw-v2/laravel/resources/views/blogs.blade.php ENDPATH**/ ?>