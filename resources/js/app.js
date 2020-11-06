window.$ = require('jquery');


toggleMenu = function()  {
    if($('.drop-menu').hasClass('drop-active')) {
        toggleDrop();
    }
    $('.nav-items').toggleClass('menu-active');
    $('.toggler > .fa').toggleClass('fa-bars fa-times');

}


toggleDrop = function()  {
    if($('.nav-items').hasClass('menu-active')) {
        toggleMenu();
    }
    $('.drop-menu').toggleClass('drop-active');

}



$('main').on('click' , ()=>{
    $('.nav-items').removeClass('menu-active');
    $('.drop-menu').removeClass('drop-active');

});



var prevScrollpos = window.pageYOffset ;


window.onscroll = ()=>{
    var currentScrollPos = window.pageYOffset;
    if (prevScrollpos > currentScrollPos) {
        $(".header").removeClass('hide');

    } else {
        $(".header").addClass('hide');
    }
    prevScrollpos = currentScrollPos;
}
