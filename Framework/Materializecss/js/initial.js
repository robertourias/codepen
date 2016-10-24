(function($){
    $(function(){
        /**
        *   Inicialização de elementos
        */
        // Menu
        $('.button-collapse').sideNav();

        // Carrossel
        $('.carousel.carousel-slider').carousel({full_width: true});

        // Parallax
        $('.parallax').parallax();


        /**
         * Chamadas no redimensionamento da página
         */
        $(window).resize(function () {});

        /**
         * Link Ancora
         */
        $('.js-anchor').on('click', function (e) {
            e.preventDefault();
            var secao = $(this).attr('href');
            if ($(secao).length) {
                $('html, body').animate({
                    scrollTop: $(secao).offset().top - 62
                }, 1200);
            }
        });


    }); // end of document ready
})(jQuery); // end of jQuery name space
