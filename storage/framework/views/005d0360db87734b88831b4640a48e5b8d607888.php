<?php $__env->startSection('content'); ?>


    <!-- Start Main content -->
    <main class="bg-grey pb-30">
        <div class="container pt-30">
            <div class="featured-slider-3 position-relative">
                <div class="slider-3-arrow-cover"></div>
                <div class="featured-slider-3-items">
                    <div class="slider-single overflow-hidden border-radius-10">
                        <div class="post-thumb position-relative">
                            <div class="thumb-overlay position-relative" style="background-image: url(http://via.placeholder.com/3000x1144)">
                                <div class="post-content-overlay">
                                    <div class="container">
                                        <div class="entry-meta meta-0 font-small mb-20">
                                            <a href="category.html" tabindex="0"><span class="post-cat text-info text-uppercase">Travel</span></a>
                                            <a href="category.html" tabindex="0"><span class="post-cat text-warning text-uppercase">Animal</span></a>
                                        </div>
                                        <h1 class="post-title mb-20 font-weight-900 text-white">
                                            <a class="text-white" href="single.html" tabindex="0">How to Visit Bali's Monkey Forest</a>
                                        </h1>
                                        <div class="entry-meta meta-1 font-small text-white mt-10 pr-5 pl-5">
                                            <span class="post-on">26 August 2020</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End feature -->
        <div class="container">
            <div class="hot-tags pt-30 pb-30 font-small align-self-center">
                <div class="widget-header-3">
                    <div class="row align-self-center">
                        <div class="col-md-4 align-self-center">
                            <h5 class="widget-title">Featured posts</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="loop-grid mb-30">
                <div class="row">
                    <div class="col-lg-8 mb-30">
                        <div class="carausel-post-1 hover-up border-radius-10 overflow-hidden transition-normal position-relative wow fadeInUp animated">
                            <div class="arrow-cover"></div>
                            <div class="slide-fade">
                                <div class="position-relative post-thumb">
                                    <div class="thumb-overlay img-hover-slide position-relative" style="background-image: url(<?php echo e(Voyager::image($featuredBlog->image)); ?>)">
                                        <a class="img-link" href="/blogs/<?php echo e($featuredBlog->slug); ?>"></a>
                                        <span class="top-left-icon bg-warning"><i class="elegant-icon icon_star_alt"></i></span>
                                        <div class="post-content-overlay text-white ml-30 mr-30 pb-30">
                                            <div class="entry-meta meta-0 font-small mb-20">
                                                <a href="/blogs"><span class="post-cat text-info text-uppercase">Blogs</span></a>
                                                <a href="/blogs/<?php echo e($featuredBlog->sluger); ?>"><span class="post-cat text-warning text-uppercase"><?php echo e($featuredBlog->sluger); ?></span></a>
                                            </div>
                                            <h3 class="post-title font-weight-900 mb-20">
                                                <a class="text-white" href="/blogs/<?php echo e($featuredBlog->slug); ?>"><?php echo e($featuredBlog->title); ?></a>
                                            </h3>
                                            <div class="entry-meta meta-1 font-small text-white mt-10 pr-5 pl-5">
                                                <span class="post-on"><?php echo e($featuredBlog->created_at); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php $__currentLoopData = $alsoBlogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <article class="col-lg-4 col-md-6 mb-30 wow fadeInUp animated" data-wow-delay="0.2s">
                        <div class="post-card-1 border-radius-10 hover-up">
                            <div class="post-thumb thumb-overlay img-hover-slide position-relative" style="background-image: url(<?php echo e(Voyager::image($blog->image)); ?>)">
                                <a class="img-link" href="/blogs/<?php echo e($blog->slug); ?>"></a>
                                <span class="top-right-icon bg-success"><i class="elegant-icon icon_camera_alt"></i></span>
                                <ul class="social-share">
                                    <li><a href="#"><i class="elegant-icon social_share"></i></a></li>
                                    <li><a class="fb" href="#" title="Share on Facebook" target="_blank"><i class="elegant-icon social_facebook"></i></a></li>
                                    <li><a class="tw" href="#" target="_blank" title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>
                                </ul>
                            </div>
                            <div class="post-content p-30">
                                <div class="entry-meta meta-0 font-small mb-10">
                                    <a href="/blogs"><span class="post-cat text-info">Blog</span></a>
                                    <a href="/blogs/<?php echo e($blog->sluger); ?>"><span class="post-cat text-success"><?php echo e($blog->sluger); ?></span></a>
                                </div>
                                <div class="d-flex post-card-content">
                                    <h5 class="post-title mb-20 font-weight-900">
                                        <a href="/blogs/<?php echo e($blog->slug); ?>"><?php echo e($blog->title); ?></a>
                                    </h5>
                                    <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                        <span class="post-on"><?php echo e($blog->created_at); ?></span>
                                        <span class="time-reading has-dot"><?php echo e($blog->read); ?> mins read</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                                <?php $__currentLoopData = $interviewBlogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <article class="col-md-6 mb-40 wow fadeInUp  animated">
                                        <div class="post-card-1 border-radius-10 hover-up">
                                            <div class="post-thumb thumb-overlay img-hover-slide position-relative" style="background-image: url(<?php echo e(Voyager::image($blog->image)); ?>)">
                                                <a class="img-link" href="/blogs/<?php echo e($blog->slug); ?>"></a>
                                                <ul class="social-share">
                                                    <li><a href="#"><i class="elegant-icon social_share"></i></a></li>
                                                    <li><a class="fb" href="#" title="Share on Facebook" target="_blank"><i class="elegant-icon social_facebook"></i></a></li>
                                                    <li><a class="tw" href="#" target="_blank" title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="post-content p-30">
                                                <div class="entry-meta meta-0 font-small mb-10">
                                                    <a href="/blogs"><span class="post-cat text-info">Blogs</span></a>
                                                    <a href="/blogs/interviews"><span class="post-cat text-success">Interviews</span></a>
                                                </div>
                                                <div class="d-flex post-card-content">
                                                    <h5 class="post-title mb-20 font-weight-900">
                                                        <a href="/blogs/<?php echo e($blog->slug); ?>"><?php echo e($blog->title); ?> </a>
                                                    </h5>
                                                    <div class="post-excerpt mb-25 font-small text-muted">
                                                        <p><?php echo e($blog->excerpt); ?> </p>
                                                    </div>
                                                    <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                        <span class="post-on"><?php echo e($blog->created_at); ?></span>
                                                        <span class="time-reading has-dot"><?php echo e($blog->read); ?> mins read</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                        </div>
                        <div class="post-module-3">
                            <div class="widget-header-1 position-relative mb-30">
                                <h5 class="mt-5 mb-30">Latest posts</h5>
                            </div>
                            <div class="loop-list loop-list-style-1">
                            <?php $__currentLoopData = $latestBlogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <article class="hover-up-2 transition-normal wow fadeInUp animated">
                                    <div class="row mb-40 list-style-2">
                                        <div class="col-md-4">
                                            <div class="post-thumb position-relative border-radius-5">
                                                <div class="img-hover-slide border-radius-5 position-relative" style="background-image: url(<?php echo e(Voyager::image($blog->image)); ?>)">
                                                    <a class="img-link" href="/blogs/<?php echo e($blog->slug); ?>"></a>
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
                                                    <a href="category.html"><span class="post-cat text-success"><?php echo e($blog->sluger); ?></span></a>
                                                </div>
                                                <h5 class="post-title font-weight-900 mb-20">
                                                    <a href="/blogs/<?php echo e($blog->slug); ?>"><?php echo e($blog->title); ?> </a>
                                                    <span class="post-format-icon"><i class="elegant-icon icon_star_alt"></i></span>
                                                </h5>
                                                <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                    <span class="post-on"><?php echo e($blog->created_at); ?></span>
                                                    <span class="time-reading has-dot"><?php echo e($blog->read); ?> mins read</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- End Main content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('components.ui', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/amgaa/Desktop/FreeWriters/fw-v2/laravel/resources/views/home.blade.php ENDPATH**/ ?>