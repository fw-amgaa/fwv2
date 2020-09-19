<div>
        <!-- Preloader-->
        <div class="loader-container">
			<div class="loader">
				<div id="mask">
                    <svg class="preloader-icon" width="34" height="38" viewbox="0 0 34 38">
                      <path class="preloader-path" stroke-dashoffset="0" d="M29.437 8.114L19.35 2.132c-1.473-.86-3.207-.86-4.68 0L4.153 8.114C2.68 8.974 1.5 10.56 1.5 12.28v11.964c0 1.718 1.22 3.306 2.69 4.165l10.404 5.98c1.47.86 3.362.86 4.834 0l9.97-5.98c1.472-.86 2.102-2.45 2.102-4.168V12.28c0-1.72-.59-3.306-2.063-4.166z"></path>
                    </svg>
              </div>
			</div>
		</div>
        <!-- End Preloader-->
       
       <!--================Search Header Area =================-->
       <div class="container-fluid searchForm">
            <form action="#" class="row">
                <div class="input-group">
                    <span class="input-group-addon"><i class="ti-search"></i></span>
                    <input type="search" name="search" class="form-control" placeholder="Type & Hit Enter">
                    <span class="input-group-addon form_hide"><i class="ti-close"></i></span>
                </div>
            </form>
        </div>
       <!--================End Search Header Area =================-->
       
       <!--================Offcanvas Menu Area =================-->
        <div class="offcanvas_menu right_direction">
            <div class="closer_icon">
                <i class="ti-close"></i>
            </div>
            <div class="menu_title">
                <h2> {{__('customlang.welcome')}} </h2>
            </div>
            <div class="off_menu">
                <ul class="nav">
                    <li class="submenu active">
                        <a href="#">{{__('customlang.home')}}</a>
                    </li>
                    <li><a href="/about-us">{{__('customlang.about')}}</a></li>
                    <li class="submenu">
                        <a href="#">{{__('customlang.blog')}}</a>
                        <ul>
                            <li><a href="blog.html">{{__('customlang.blog')}}</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="#">{{__('customlang.contact')}}</a>
                    </li>
                </ul>
            </div>
            <div class="curency language">
                <h4>{{__('customlang.language')}}:</h4>
                <a href="lang/en">Eng</a>
                <a href="lang/mn">Mon</a>
            </div>
            <ul class="of_social">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            </ul>
            <div class="copy_right_menu">
                <p>© <a href="#">Writers</a> 2020. {{__('customlang.rights')}}. </p>
            </div>
        </div>
        <!--================End Offcanvas Menu Area =================-->
       
        <!--================Header Area =================-->
        <header class="main_header_area business_menu transparent_menu h_pad">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <a class="navbar-brand" href="/"><img src="img/logo.png" alt="" style="width: 60px"></a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <ul class="nav navbar-nav">
                        <li><a href="/">{{__('customlang.home')}}</a></li>
                        <li class="dropdown">
                            <a href="/blogs" class="dropdown-toggle">{{__('customlang.blogs')}}</a>
                                <ul class="dropdown-menu sub-menu">
                                    <li><a href="/blogs?category=history">{{__('customlang.history')}}</a></li>
                                    <li><a href="/blogs?category=politics">{{__('customlang.politics')}}</a></li>
                                    <li><a href="/blogs?category=self-development">{{__('customlang.selfdev')}}</a></li>
                                    <li><a href="/blogs?category=interview">{{__('customlang.interview')}}</a></li>
                                    <li><a href="/blogs?category=book-introduction">{{__('customlang.bookintro')}}</a></li>
                                    <li><a href="/blogs?category=art">{{__('customlang.art')}}</a></li>
                                </ul>
                        </li>
                        <li><a href="/about-us">{{__('customlang.contact')}}</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="nav_searchFrom"><a href="#"><i class="ti-search"></i></a></li>
                        <li style="display: inline-block"><a href="#"><i class="lnr lnr-menu bar_menu"></i></a></li>
                    </ul>
                </div><!-- /.container-fluid -->
            </nav>
        </header>
        <!--================End Header Area =================-->
</div>