$(document).ready(function(){
    
    window.sr = ScrollReveal({reset: true});
    
    sr.reveal('.cont', {
        distance: '-100px',
        duration: 2000,
        origin: 'right'
    });  //le varie proprieta grafiche vanno a sovrascrivere il css, e quindi vanno in conflitto
    
});