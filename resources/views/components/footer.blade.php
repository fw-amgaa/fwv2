<div>
    <!-- People find pleasure in different ways. I find it in keeping my mind clear. - Marcus Aurelius -->
    <!--================Footer Area =================-->
    <footer class="wh_footer_area">
            <div class="container">
                <div class="footer_main_area">
                    <div class="main_title">
                        <h2>{{__('customlang.contact')}}</h2>
                    </div>
                    <form class="mailchimp" method="post">
                        <div class="subscribe_form">
                            <input type="email" class="form-control memail" placeholder="{{__('customlang.email')}}">
                            <button class="btn btn-default" type="submit"><i class="ti-email"></i></button>
                        </div> 
                        <p class="mchimp-errmessage"></p>
                        <p class="mchimp-sucmessage"></p>
                    </form>
                    <ul class="f_social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="footer_copyright h_pad">
                <div class="pull-left">
                    <h5 class="footer_copy">© <script>document.write(new Date().getFullYear());</script> <a href="#">Writers</a> . {{__('customlang.rights')}} .</h5>
                </div>
                <div class="pull-right">
                    <h5 class="footer_ask">{{__('customlang.ques')}}: <a href="#">+(976) 9554-1132 / +(976) 9908-6244</a></h5>
                </div>
            </div>
        </footer>
        
        <!--================Contact Success and Error message Area =================-->
        <div id="success" class="modal modal-message fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <span class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></span>
                        <h2 class="modal-title">{{__('customlang.thank')}}</h2>
                        <p class="modal-subtitle">{{__('customlang.succ')}}...</p>
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
                        <h2 class="modal-title">{{__('customlang.sorry')}}</h2>
                        <p class="modal-subtitle"> {{__('customlang.smth')}} </p>
                    </div>
                </div>
            </div>
        </div>
        <!--================End Contact Success and Error message Area =================-->
</div>