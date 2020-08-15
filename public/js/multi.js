;(function($) {
    "use strict";
    $(window).on('load', function() {
        var onMobile = false;

        if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) { onMobile = true; }

        if( ( onMobile === false ) ) {

            $('#multiscroll').multiscroll({
                    anchors: ['first', 'second', 'third', 'four'],
                    menu: '#menu',
                    loopTop: true,
                    loopBottom: true,
                });

        } else {

            $('#multiscroll').multiscroll({
                    anchors: ['first', 'second', 'third', 'four'],
                    menu: '#menu',
                    loopTop: true,
                    loopBottom: true,
                });
            $('#multiscroll').multiscroll.destroy();
        }

        $('.pp-nav-up').on('click', function(){
            $.fn.multiscroll.moveSectionUp();
        });

        $('.pp-nav-down').on('click', function(){
            $.fn.multiscroll.moveSectionDown();
        });
    });
})(jQuery)