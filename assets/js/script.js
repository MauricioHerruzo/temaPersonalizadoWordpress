 jQuery(document).ready(function($) {
    // Toggle del menú móvil
    $('.menu-toggle').on('click', function() {
        $(this).toggleClass('active');
        $('.main-navigation').toggleClass('active');
        
        // Bloquear scroll cuando el menú está abierto
        if ($(this).hasClass('active')) {
            $('body').css('overflow', 'hidden');
        } else {
            $('body').css('overflow', 'auto');
        }
    });
    
    // Cerrar menú al hacer clic en un enlace (mobile)
    $('.main-navigation a').on('click', function() {
        if ($(window).width() <= 768) {
            $('.menu-toggle').removeClass('active');
            $('.main-navigation').removeClass('active');
            $('body').css('overflow', 'auto');
        }
    });
    
    // Submenús (opcional)
    $('.menu-item-has-children > a').after('<span class="submenu-toggle"></span>');
    
    $('.submenu-toggle').on('click', function() {
        $(this).toggleClass('active').siblings('.sub-menu').slideToggle();
    });
});