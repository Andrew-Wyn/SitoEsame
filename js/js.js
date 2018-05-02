$(document).ready(function(){
        
    var targ = 1;
    
    $('.lefto').sideNav({
        menuWidth: 300, // Default is 300
        edge: 'left', // Choose the horizontal origin
        closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
        draggable: true, // Choose whether you can drag to open on touch screens,
        onOpen: function(el) { /* Do Stuff*/ }, // A function to be called when sideNav is opened
        onClose: function(el) { 
            close_wrapper();
        }, // A function to be called when sideNav is closed
      }
    );

    $("#menu-wrapper").click(function(event) {
        $("#hamburger-menu").addClass("open");
        
        taghett(targ);
    });
    
    $(".click").click(function(){
       var href = $(this).attr('href');
       var targhetto = href.charAt(href.length-1);
       targ = targhetto;
       $("html,body").animate({scrollTop: 0}, 1000, function(){});
    });


});
        
function close_wrapper(){
    $("#hamburger-menu").removeClass("open");
}

function taghett(ind){
    $("#" + ind).trigger("click");
}
    
/* -------------------------- SCROLL GIUSTO PER I LINK dell'Indice --------------------------- */
function rightScroll(anID) {
var x = $("#"+anID).offset();
$("html,body").animate({scrollTop: x.top - 120}, 1000, function(){});
};