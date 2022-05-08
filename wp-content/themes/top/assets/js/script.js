jQuery(document).ready(function($) {
    
$('.header-menu__icon').click(function () {    

    if(!$(this).hasClass('active')) {        
        $('.header__list').show();
        $(this).toggleClass('active');
        
    } else {
        $('.header__list').hide();
        $(this).toggleClass('active');
    }              
});

});