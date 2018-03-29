$(function(){
    $(document)
    .on("click", ".js-tab", function (e) {
        console.log("eerer");
        e.preventDefault();
        var target = $(this).attr("href");

        $(".js-tab").removeClass("active");
        $(this).addClass("active");

        $(".content-tab").removeClass("active");
        $(target).addClass("active");

        $(".content-imgs .img").each(function(){
            var pos = $(this).attr("position");
            if(pos == $(".content-imgs .img").length) {
                $(this).attr("position", "1");
            }
            else {
                $(this).attr("position", (parseInt(pos)+1));
            }
        });


    });

    var elementos = $('.content-imgs');
    elementos = elementos.map(function () {
        return {
            el: this,
            pos: $(this).position().top
        };
    });

    $(document).scroll(function () {
        var posicaoScroll = $(document).scrollTop();
        elementos.each(function () {
            if (this.pos < posicaoScroll) $(this.el).animate({'opacity': 1}, 500);
        })
    })
});
