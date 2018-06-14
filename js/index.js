function Metrica(par) {
    var mainDivs = document.getElementsByClassName(par);
    var maxHeight = 0;
    for (var i = 0; i < mainDivs.length; ++i) {
        if (maxHeight < mainDivs[i].clientHeight) {
            maxHeight = mainDivs[i].clientHeight;
        }
    }
    for (var i = 0; i < mainDivs.length; ++i) {
        mainDivs[i].style.height = maxHeight + "px";
    }
}

Metrica("ForMetric1");
Metrica("ForMetric");


$('.nav-link, .navbar-brand, .test').click(function () {
    var element = $(this).attr('href');
    var dist = ($(element).offset().top) - 80;
    $('html, body').animate({'scrollTop': dist}, 1000);

    return false;
});

function scrollShapka() {
    var j = $('.navbar').height();

    var scrolled = window.pageYOffset || document.documentElement.scrollTop;

    $('#icon-hamburger').addClass('black');


    if (scrolled > j) {
        $(".navbar").addClass("navbarLight fixed-top");

        $(".navbar").removeClass("navbar-hidden");
        $('.navbarLight').fadeIn(600).delay(1000);

    }
    else {
        $('#icon-hamburger').removeClass('black');
        $(".navbar").removeClass("fixed-top navbarLight");
        $(".navbar").addClass("navbar-hidden");
    }
}

function testScrollColorA() {

    $('section[id]').each(function () {

        var id = $(this).attr('id');
        if ($(this).offset().top - 100 < $(window).scrollTop()) {
            $(`.navbar-nav a`).removeClass('active-link');
            $(`.navbar-nav a[href='#${id}']`).addClass('active-link');
        }

        if ($(window).scrollTop() < 600) {
            $('.navbar ul a').removeClass('active-link');
        }
        if ($(window).scrollTop() < 600) {
            $('.arrow').removeClass('active-arrow');
        }
        else {
            $('.arrow').addClass('active-arrow');
        }

        if ($(window).scrollTop() > 100) {
            $('.arrow_down').addClass('arrow_none_down');
        }


    });
}

/*----- валидация-------*/

function isNumeric(value) {
    return (/^[\d]+$/g).test(value);
}

function isLetter(value) {
    return (/^[a-яА-Яa-zA-Z]+\s*$/g).test(value);
}

function validate(self, text, number) {
    if (!isLetter(text) || !isNumeric(number)) {
        if (!isLetter(text)) $(self).find('input:eq(0)').addClass('is-invalid');
        if (!isNumeric(number)) $(self).find('input:eq(1)').addClass('is-invalid');
        return false;
    }

    return true;

}


function sendAjax(data) {

    $.ajax({
        type: "POST",
        url: "/php/handleForm.php",
        data: {'data': data},
        dataType: 'json',
        success: function (msg) {
            console.log(msg);
            if (msg) $('#thanks-window').fadeIn(350).delay(1510).fadeOut(1400);
            else $('#error-window').fadeIn(350).delay(2000).fadeOut(1500);
        },

    });
}

$('#consultation-form,#fast-form,#first-large-form,' +
    '#second-large-form,#buyfirst-form').submit(function (e) {
    e.preventDefault();
    let form_name = $(this).attr('id');
    let name = $(this).find('input:eq(0)');
    let phone = $(this).find('input:eq(1)');
    let name_val = name.val(), phone_val = phone.val();
    let  email_val=undefined;
    if (form_name !== 'fast-form') email_val = $(this).find('input:eq(2)').val();

    if (!validate(this, name_val, phone_val)) return;


    let dataArr = {'name': name_val, 'phone': phone_val};
    dataArr['form_name'] = form_name;

    if (email_val) dataArr['email'] = email_val;

    if (form_name === 'first-large-form' || form_name === 'buyfirst-form')
        dataArr['site_type'] = $(this).find('select').val();
    if (form_name === 'second-large-form') dataArr['comment'] = $(this).find('textarea').val();
    sendAjax(dataArr);

});

//for numbers
var number_show = true;

function num() {

    if ($('.numbers').offset().top - 550 < $(window).scrollTop() && number_show == true) {

        $('.numbers h6').each(function () {
            $(this).prop('Counter', 0).animate({
                    Counter: $(this).text()
                }, {
                    duration: 2000,
                    easing: 'swing',
                    step: function (now) {
                        $(this).text(Math.ceil(now));
                    }
                }
            );
        });
        number_show = false;
    }


}


/*----- timer ------*/
function updateTimer(deadline) {
    var time = deadline - new Date();
    return {
        'days': '0' + Math.floor(time / (1000 * 60 * 60 * 24)),
        'hours': Math.floor((time / (1000 * 60 * 60)) % 24) < 10 ? "0" + Math.floor((time / (1000 * 60 * 60)) % 24) : Math.floor((time / (1000 * 60 * 60)) % 24),
        'minutes': Math.floor((time / 1000 / 60) % 60) < 10 ? "0" + Math.floor((time / 1000 / 60) % 60) : Math.floor((time / 1000 / 60) % 60),
        'seconds': Math.floor((time / 1000) % 60) < 10 ? "0" + Math.floor((time / 1000) % 60) : Math.floor((time / 1000) % 60),
        'total': time
    };
}

function startTimer(id, deadline) {
    var timerInterval = setInterval(function () {
        var clock = document.getElementById(id);
        var timer = updateTimer(deadline);


        clock.innerHTML = '<span class="display-4 pr-3">' + timer.days + '</span>'
            + '<span class="display-4 pr-3">' + timer.hours + '</span>'
            + '<span class="display-4 pr-3">' + timer.minutes + '</span>'
            + '<span class="display-4">' + timer.seconds + '</span>';

        //check for end of timer
        if (timer.total < 1) {
            clearInterval(timerInterval);
            /*alert('Скидка закончилась');*/
            clock.innerHTML = '<span>0</span><span>0</span><span>0</span><span>0</span>';
        }


    }, 1000);
}


$(document).ready(function () {
    var deadline = new Date(document.getElementById('from').innerHTML);
    startTimer("clock", deadline);
});

/*------timer-------*/

window.onscroll = function () {

    scrollShapka();
    testScrollColorA();
    num();
};


/*--------preloader-------*/
$(window).on('load', function () {

    var $preloader = $('#p_prldr'),
        $svg_anm = $preloader.find('.svg_anm');
    $svg_anm.fadeOut(1000);
    $preloader.delay(600).fadeOut('slow');
});


/*----- portfolio-------*/
$('.btn-portfolio-back').click(function () {
    $(`.main-active-tmp`).removeClass('main-active');
    $(`.main-active-tmp`).addClass('main-none');

    $(`.main-content-tmp`).removeClass('main-content-none');

});
$('.portfolio_card_1').click(function () {
    $(window).scrollTop(0);
    $(`.main-active-tmp`).removeClass('main-none');
    $(`.main-active-tmp`).addClass('main-active');
    $(`.main-content-tmp`).addClass('main-content-none');
    $(".main-active-tmp img").attr("src", "images/1.jpg");
});
$('.portfolio_card_2').click(function () {
    $(window).scrollTop(0);
    $(`.main-active-tmp`).removeClass('main-none');
    $(`.main-active-tmp`).addClass('main-active');
    $(`.main-content-tmp`).addClass('main-content-none');
    $(".main-active-tmp img").attr("src", "images/2.jpg");

});
$('.portfolio_card_3').click(function () {
    $(window).scrollTop(0);
    $(`.main-active-tmp`).removeClass('main-none');
    $(`.main-active-tmp`).addClass('main-active');
    $(`.main-content-tmp`).addClass('main-content-none');
    $(".main-active-tmp img").attr("src", "images/3.jpg");

});
$('.portfolio_card_4').click(function () {
    $(window).scrollTop(0);
    $(`.main-active-tmp`).removeClass('main-none');
    $(`.main-active-tmp`).addClass('main-active');
    $(`.main-content-tmp`).addClass('main-content-none');
    $(".main-active-tmp img").attr("src", "images/4.jpg");

});
$('.portfolio_card_5').click(function () {
    $(window).scrollTop(0);
    $(`.main-active-tmp`).removeClass('main-none');
    $(`.main-active-tmp`).addClass('main-active');
    $(`.main-content-tmp`).addClass('main-content-none');
    $(".main-active-tmp img").attr("src", "images/5.jpg");

});
$('.portfolio_card_6').click(function () {
    $(window).scrollTop(0);
    $(`.main-active-tmp`).removeClass('main-none');
    $(`.main-active-tmp`).addClass('main-active');
    $(`.main-content-tmp`).addClass('main-content-none');
    $(".main-active-tmp img").attr("src", "images/6.jpg");

});

if (window.matchMedia('(max-width: 1000px)').matches) {
    $('.wow').removeClass('slideInRight');
}





