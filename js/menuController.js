$(document).ready(function(){
    $(".has-children").click(function(){
        $(this).toggleClass("open");
        $(this).find(".sub-menu").slideToggle();
    });
});
