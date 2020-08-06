<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="img/fav-icon.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title> Writers | Contact Us </title>

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
        <link href="vendors/scroll/jquery.mCustomScrollbar.css" rel="stylesheet">
        <link href="vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">
        <link href="vendors/magnify-popup/magnific-popup.css" rel="stylesheet">
        <link href="vendors/bootstrap-selector/bootstrap-select.css" rel="stylesheet">
        
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <x-header/>
        
        <!--================Total Area =================-->
        <div class="total_c_contact_area h_pad">
            <div class="contact_d_text_area">
                <div class="container">
                    <div class="description_text">
                        <h6>Contact Us</h6>
                        <h4>A digital <span class="f_light">creative agency</span><br>
                        that goes beyond through <span>beautiful disruption.</span></h4>
                        <p>Vestibulum id ligula porta felis euismod semper. Maecenas faucibus mollis interdum. Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Sed posuere consectetur est at lobortis. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
                    </div>
                </div>
            </div>
        </div>
        <!--================End Total Area =================-->
        
        <div class="office_map_area">
            <!--================Map Area =================-->
            <div id="mapBox" class="mapBox row m0" 
            data-lat="39.4001994" 
            data-lon="-84.5617397" 
            data-zoom="17" 
            data-marker="img/contact/map-marker.png" 
            data-info="PO Box CT16122 Collins Street West, Victoria 8007, Australia."
            data-mlat="39.400199"
            data-mlon="-84.56174"></div>
            <!--================End Map Area =================-->
        </div>
        
        <!--================Contact Details Froms Area =================-->
        <section class="contact_d_form">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="contact_d_details">
                            <h2>Contact Information</h2>
                            <p>Donec ullamcorper nulla non metus auctor fringilla. Nullam quis risus eget urna mollis ornare vel eu leo. Donec sed odio dui. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla vitae elit libero, a pharetra augue.</p>
                            <div class="contact_d_info">
                                <div class="media">
                                    <div class="media-left">
                                        <i class="fa fa-map-marker"></i>
                                    </div>
                                    <div class="media-body">
                                        <h4>450 Fifth Avenue, 31th floor New York NY 10118-3299 USA</h4>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="media-body">
                                        <a href="#"><h4>+(84) 989 159 081</h4></a>
                                        <a href="#"><h4>+(84) 989 159 081</h4></a>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left">
                                        <i class="fa fa-envelope"></i>
                                    </div>
                                    <div class="media-body">
                                        <a href="#"><h4>creativewithjoy@gmail.com</h4></a>
                                        <a href="#"><h4>info.contact@gmail.com</h4></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row m0 contact_d_form_inner">
                            <form class="office_contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                                <div class="form-group col-md-12">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                                </div>
                                <div class="form-group col-md-12">
                                    <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                                </div>
                                <div class="form-group col-md-12">
                                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
                                </div>
                                <div class="form-group col-md-12">
                                    <textarea class="form-control" name="message" id="message" rows="1" placeholder="Message"></textarea>
                                </div>
                                <div class="form-group col-md-12">
                                    <button type="submit" value="submit" class="btn submit_dark form-control">submit now</button>
                                 </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Contact Details Froms Area =================-->
        
        <x-footer/>
        
        
        
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
        
        
        
        
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery-2.2.4.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <!--gmaps Js-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
        <script src="js/gmaps.min.js"></script>
        <!-- contact js -->
        <script src="js/jquery.form.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/contact.js"></script>
        <!-- apear js -->
        <script type="text/javascript" src="js/apear.js"></script>
        <script src="vendors/scroll/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="vendors/scroll/jquery.nicescroll.min.js"></script>
        <script src="vendors/counterup/waypoints.min.js"></script>
        <script src="vendors/counterup/jquery.counterup.min.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope.pkgd.min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/magnify-popup/jquery.magnific-popup.min.js"></script>
        <script src="vendors/bootstrap-selector/bootstrap-select.js"></script>
        <script src="js/parallax.js"></script>
        
        <script src="js/theme.js"></script>
    </body>
</html>