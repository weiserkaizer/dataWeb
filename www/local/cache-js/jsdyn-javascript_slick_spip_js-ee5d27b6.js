/* #PRODUIRE{fond=javascript/slick.spip.js}
   md5:770e8f926ff6b0a3576725a595123bae */
$(function () {
    $("#slick").slick(
        {"slide":"div","slidesToShow":1,"slidesToScroll":1,"autoplay":true,"autoplaySpeed":3000,"fade":false,"speed":300,"vertical":false,"lazyload":"ondemand","centerMode":false,"centerPadding":"50px","cssEase":"ease","dots":false,"pauseOnHover":true,"pauseOnDotsHover":false,"rtl":false}
    );
});
