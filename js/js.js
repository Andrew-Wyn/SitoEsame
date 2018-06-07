$(document).ready(function(){

    var root = document.documentElement;
    root.className = root.className.replace(/\bno-js\b/g, '') + ' js';
    /*funzione in vanila javascript per la realizzazione dell'imagine viewer sez. TPSI*/
    root.className = root.className.replace(/\bdombuilding\b/g, '') + ' domready';

    var thumbs = document.querySelectorAll( '.gallery_thumb' );
    var selectedImage =  document.querySelector('#selectedImage');

    for ( var i = 0, len = thumbs.length; i < len; i++ ) {

        thumbs[i].addEventListener( 'click', function( event ) {

            var firstChild = this.firstChild;
            var dataOsrc = firstChild.getAttribute('src');
            var ceprovo = $(selectedImage).children()[0];
            var chcepro = $(ceprovo).children()[0];
            chcepro.setAttribute('src', dataOsrc);
        }, false);
    }
        
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

     $(document).scroll(function(){
         var heightGall =  $(".gallery").offset().top + $(".gallery").height() - 100;
       if($(".gallery").offset().top - 100 < $(window).scrollTop() && heightGall > $(window).scrollTop()){
           $("#selectedImage").addClass("fixedImage");
       } else {
           $("#selectedImage").removeClass("fixedImage");
       }
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