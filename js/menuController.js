$(document).ready(function(){
    //$(".has-children").click(function(){
        //$(this).toggleClass("open");
        //$(this).find(".sub-menu").slideToggle();
    //});
    $("#menu").find("li").hoverIntent(function(){
        $(this).find(".label").slideToggle(300);
    });
    $("li.has-children").hoverIntent(
      function() {
        $(".main-panel").addClass("sub-menu-open");
        var $sub = $(this).find("ul.sub-menu");
        setTimeout(function() {
          $sub.show("slide", { direction: "left" } );
        }, 200);
      }, function() {
        $(this).find("ul.sub-menu").hide("slide", { direction: "left" } );
        setTimeout(function() {
          $(".main-panel").removeClass("sub-menu-open");
        }, 200);
      });
});
