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
        $(this).find(".label").slideToggle(300);
        $(this).find("ul.sub-menu").show("slide", { direction: "left" } );
        setTimeout(function() {
          $(".main-panel").addClass("sub-menu-open");
        }, 500);
      }, function() {
        $(this).find("ul.sub-menu").hide("slide", { direction: "left" } );
        setTimeout(function() {
          $(".main-panel").removeClass("sub-menu-open");
        }, 500);
        $(this).find(".label").slideToggle(300);
      });
});
