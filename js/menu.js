$(function() {
    var contador = 1;
    var pull = $('.op-menu');
    body = $('body');
    menu = $('nav');

    $(pull).click(function(){
        menu.slideDown(1000);
        return false;
    });


     $(body).click(function(){
            menu.slideUp(1000); 
    });



    // $(pull).on('click', function(e) {
    //     e.preventDefault();
    //     menu.slideDown(1000);
    //     contador = 0;
        // if (contador == 1) {
        //    menu.slideToggle();
        //    $("#icon-abierto").hide(100);
        //    $("#icon-cerrado").show(100);
        //     contador = 0;
        // } else {
        //     menu.slideToggle();
        //     contador = 1;
        //    $("#icon-abierto").show(100);
        //    $("#icon-cerrado").hide(100);
        // }
        
    // });

    // $(body).on('click', function(e) {
    //     e.preventDefault();
    //     menu.slideUp(1000);  
    //     contador = 1;      
    // });


});