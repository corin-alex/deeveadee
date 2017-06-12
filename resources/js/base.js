$().ready(function(){
    $("#main-menu").click(function() {
       $("#sidebar").toggleClass("sidebar-visible");
    });

    $("#sidebar-close").click(function() {
        $("#sidebar").removeClass("sidebar-visible");
    });
});