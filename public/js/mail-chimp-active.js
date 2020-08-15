;(function($) {
    "use strict";

// MAILCHIMP
    if ($(".mailchimp").length > 0)
    {
        $(".mailchimp").ajaxChimp({
            callback: mailchimpCallback,
            url: "http://wethemez.us16.list-manage.com/subscribe/post?u=b6b3217322f92c77abf7e8601&id=8cdded5ddb" //Replace this with your own mailchimp post URL. Don't remove the "". Just paste the url inside "".  
        });
    }
    $(".memail").on("focus", function ()
    {
        $(".mchimp-errmessage").fadeOut();
        $(".mchimp-sucmessage").fadeOut();
    });
    $(".memail").on("keydown", function ()
    {
        $(".mchimp-errmessage").fadeOut();
        $(".mchimp-sucmessage").fadeOut();
    });
    $(".memail").on("click", function ()
    {
        $(".memail").val("");
    });
    function mailchimpCallback(resp)
    {
        if (resp.result === "success") {
            $(".mchimp-errmessage").html(resp.msg).fadeIn(1000);
            $(".mchimp-sucmessage").fadeOut(500);
        } else if (resp.result === "error") {
            $(".mchimp-errmessage").html(resp.msg).fadeIn(1000);
        }
    }
    
    
    })(jQuery)