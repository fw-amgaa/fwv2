<?php $__env->startSection('styles'); ?>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/widgets.css">
    <link rel="stylesheet" href="css/responsive.css">
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <!-- Start Main content -->
    <main class="bg-grey pb-30">
        <div class="container single-content">
            <div class="entry-header entry-header-style-1 mb-50 pt-50">
                <h1 class="entry-title mb-50 font-weight-900">
                    <?php echo e($blog->title); ?>

                </h1>
                <div class="row">
                    <div class="col-md-6">
                        <div class="entry-meta align-items-center meta-2 font-small color-muted">
                            <p class="mb-5">
                                <a class="author-avatar" href="#"><img class="img-circle" src="http://via.placeholder.com/300x300" alt=""></a>
                                By <a href="author.html"><span class="author-name font-weight-bold">Altanshagai Mijiddorj</span></a>
                            </p>
                            <span class="mr-10"><?php echo e($blog->created_at); ?> </span>
                            <span class="has-dot"> 8 mins read</span>
                        </div>
                    </div>
                    <div class="col-md-6 text-right d-none d-md-inline">
                        <ul class="header-social-network d-inline-block list-inline mr-15">
                            <li class="list-inline-item text-muted"><span>Share this: </span></li>
                            <li class="list-inline-item"><a class="social-icon fb text-xs-center" target="_blank" href="#"><i class="elegant-icon social_facebook"></i></a></li>
                            <li class="list-inline-item"><a class="social-icon tw text-xs-center" target="_blank" href="#"><i class="elegant-icon social_twitter "></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--end single header-->
            <figure class="image mb-30 m-auto text-center border-radius-10">
                <img class="border-radius-10" src="<?php echo e(Voyager::image($blog->image)); ?> " alt="post-title" />
            </figure>
            <!--figure-->
            <article class="entry-wraper mb-50">
                <div class="excerpt mb-30">
                    <p><?php echo e($blog->excerpt); ?> </p>
                </div>
                <div class="entry-main-content dropcap wow fadeIn animated">
                    <?php echo $blog->body; ?>

                </div>
                <div class="entry-bottom mt-50 mb-30 wow fadeIn animated">
                    <div class="tags">
                        <span>Category: </span>
                        <a href="/blogs/<?php echo e($blog->sluger); ?>" rel="tag"><?php echo e($blog->sluger); ?></a>
                    </div>
                </div>
                <div class="single-social-share clearfix wow fadeIn animated">
                    <ul class="header-social-network d-inline-block list-inline float-md-right mt-md-0 mt-4">
                        <li class="list-inline-item text-muted"><span>Share this: </span></li>
                        <li class="list-inline-item"><a class="social-icon fb text-xs-center" target="_blank" href="#"><i class="elegant-icon social_facebook"></i></a></li>
                        <li class="list-inline-item"><a class="social-icon tw text-xs-center" target="_blank" href="#"><i class="elegant-icon social_twitter "></i></a></li>
                    </ul>
                </div>
                <!--author box-->
                <div class="author-bio p-30 mt-50 border-radius-10 bg-white wow fadeIn animated">
                    <div class="author-image mb-30">
                        <a href="author.html"><img src="http://via.placeholder.com/300x300" alt="" class="avatar"></a>
                    </div>
                    <div class="author-info">
                        <h4 class="font-weight-bold mb-20"><span class="vcard author"><span class="fn"><a href="author.html" title="Posted by Barbara Cartland" rel="author">Barbara Cartland</a></span></span>
                        </h4>
                        <h5 class="text-muted">About author</h5>
                        <div class="author-description text-muted">You should write because you love the shape of stories and sentences and the creation of different words on a page. </div>
                        <a href="author.html" class="author-bio-link mb-md-0 mb-3">View all posts (125)</a>
                        <div class="author-social">
                            <ul class="author-social-icons">
                                <li class="author-social-link-facebook"><a href="#" target="_blank"><i class="ti-facebook"></i></a></li>
                                <li class="author-social-link-twitter"><a href="#" target="_blank"><i class="ti-twitter-alt"></i></a></li>
                                <li class="author-social-link-instagram"><a href="#" target="_blank"><i class="ti-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--related posts-->
                <div class="related-posts">
                    <div class="post-module-3">
                        <div class="widget-header-2 position-relative mb-30">
                            <h5 class="mt-5 mb-30">Related posts</h5>
                        </div>
                        <div class="loop-list loop-list-style-1">
                            <?php $__currentLoopData = $alsoBlogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blogs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <article class="hover-up-2 transition-normal wow fadeInUp  animated">
                                <div class="row mb-40 list-style-2">
                                    <div class="col-md-4">
                                        <div class="post-thumb position-relative border-radius-5">
                                            <div class="img-hover-slide border-radius-5 position-relative" style="background-image: url(<?php echo e(Voyager::image($blogs->image)); ?>)">
                                                <a class="img-link" href="/blogs/<?php echo e($blogs->slug); ?>"></a>
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
                                                <a href="/blogs/<?php echo e($blogs->slugger); ?>"><span class="post-cat text-primary"><?php echo e($blogs->slugger); ?></span></a>
                                            </div>
                                            <h5 class="post-title font-weight-900 mb-20">
                                                <a href="/blogs/<?php echo e($blogs->slug); ?>"><?php echo e($blogs->title); ?></a>
                                                <span class="post-format-icon"><i class="elegant-icon icon_star_alt"></i></span>
                                            </h5>
                                            <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                <span class="post-on"><?php echo e($blogs->created_at); ?></span>
                                                <span class="time-reading has-dot">11 mins read</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </article>
        </div>
        <!--container-->
    </main>
    <!-- End Main content -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('components.ui', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/amgaa/Desktop/FreeWriters/fw-v2/laravel/resources/views/blog-single.blade.php ENDPATH**/ ?>