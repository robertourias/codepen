$(function(){
    var refreshIntervalId;

    $(document)
    .on("click", ".js-tab", function (e) {
        e.preventDefault();
        var target = $(this).attr("href");

        $(".js-tab").removeClass("active");
        $(this).addClass("active");

        $(".content-tab").removeClass("active");
        $(target).addClass("active");

        clearInterval(refreshIntervalId);
        alternateImg($(target).find(".content-imgs .img"));
    });

    function alternateImg( target ) {
        refreshIntervalId = setInterval(function(){
            console.log("teste");
            $(target).each(function(){
                var pos = $(this).attr("position");
                if(pos == $(target).length) {
                    $(this).attr("position", "1");
                }
                else {
                    $(this).attr("position", (parseInt(pos)+1));
                }
            });
        }, 5000);
    }

    // Inicializa as imagens alternadas
    (function(){
        var target = $(".content-tab.active .content-imgs .img");
        alternateImg(target);
    })();


    // var elementos = $('.content-imgs');
    // elementos = elementos.map(function () {
    //     return {
    //         el: this,
    //         pos: $(this).position().top
    //     };
    // });
    //
    // $(document).scroll(function () {
    //     var posicaoScroll = $(document).scrollTop();
    //     elementos.each(function () {
    //         if (this.pos < posicaoScroll) $(this.el).animate({'opacity': 1}, 500);
    //     })
    // })
});
