$(document).ready(function(){

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
});