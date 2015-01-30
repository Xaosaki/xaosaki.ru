$(document).ready(function(){

    window.i = 0;

    $(".add").click(function(){
        $(".w_blue").css("display", "block").animate({
            opacity: "0.75"
        }, 500);
        $(".w_add").css("display", "block").animate({
            opacity: "1"
        }, 1000);
    });

    $(".close").click(function(){
        $(".w_blue").animate({
            opacity: "0"
        }, 800, function(){
            $(".w_blue").css("display", "none");
        });
        $(".w_add").animate({
            opacity: "0"
        }, 1000, function(){
            $(".w_add").css("display", "none");
        });
    });
    $('form').bind('submit', function(event) {
        $(".mailForm input[type='text'],.mailForm textarea").each(function() {
            if(!$(this).val().length) {
                event.preventDefault();
                $(this).css('border', '1px solid red');
                $(this).closest('label').children('.tooltip').css('display', 'block');
                window.i++;
            }
        });
        if(window.i === 0) {
            event.preventDefault();
            $.ajax({
                type: "POST",
                url: "mail.php",
                data: {
                    name: $("input[name='name']").val(),
                    email: $("input[name='email']").val(),
                    message: $('#message').val(),
                    captcha: $("input[name='captcha']").val()
                }
            })
                .done(function (mes) {
                    alert(mes);
                    return 0;
                });
        }
    });
    $('form').bind('submit', function(event) {
        $(".mailForm input[type='text'],.mailForm textarea").each(function() {
            if(!$(this).val().length) {
                event.preventDefault();
                $(this).css('border', '1px solid red');
                $(this).closest('label').children('.tooltip').css('display', 'block');
                window.i--;
            }
        });
    });
    $(".mailForm input[type='text'],.mailForm textarea").click(function(event) {
            if(!$(this).val().length) {
                event.preventDefault();
                $(this).css('border', '1px solid #48cbe8');
                $(this).closest('label').children('.tooltip').css('display', 'none');
            }
    });
});