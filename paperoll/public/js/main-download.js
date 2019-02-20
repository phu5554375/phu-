

$(document).ready(function () {
    resize();
    $('#wrapper').addClass('animated bounceInLeft');

    $('#btn_menu').click(function () {
        $('#menu').toggleClass('active')
    })

})
$(window).resize(function () {
    resize();
});


function resize() {
    var w = $(window).width();

    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
        if (w > 768) {

            $('#ovelay').addClass('active');
            $('#ovelay p').text('Hãy xoay màn hình để đạt được trải nghiệm tốt nhất');

        }else{
            $('#ovelay').removeClass('active');
        }
    }
    else {
        $('#ovelay').addClass('active');
        $('#ovelay p').text('Trang web hiện tại chỉ khả dụng trên mobile');

    }
}

