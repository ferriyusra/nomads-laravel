$('.menu .menu-tampil').each(function (i) {
    setTimeout(function () {
        $('.menu .menu-tampil').eq(i).addClass('menuMuncul');
    }, 300 * (i + 1));
});

$('.iklan .iklan-tampil').each(function (i) {
    setTimeout(function () {
        $('.iklan .iklan-tampil').eq(i).addClass('iklanMuncul');
    }, 300 * (i + 1));
});

$(window).scroll(function () {
    var wScroll = $(this).scrollTop();
    $('.gambarDiskon .gambarDiskon-tampil').each(function (i) {
        setTimeout(function () {
            $('.gambarDiskon .gambarDiskon-tampil').eq(i).addClass('gambarDiskonMuncul');
        }, 300 * (i + 1));
    });

    if (wScroll > $('.produkTerbaru').offset().top - 300) {
        $('.produkTerbaru .produkTerbaru-tampil').each(function (i) {
            setTimeout(function () {
                $('.produkTerbaru .produkTerbaru-tampil').eq(i).addClass('produkTerbaruMuncul');
            }, 300 * (i + 1));
        });
    }

    if (wScroll > $('.produkTerlaris').offset().top - 600) {
        $('.produkTerlaris .produkTerlaris-tampil').each(function (i) {
            setTimeout(function () {
                $('.produkTerlaris .produkTerlaris-tampil').eq(i).addClass('produkTerlarisMuncul');
            }, 300 * (i + 1));
        });
    }

});