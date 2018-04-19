var clone = function () {
    $('.dnnGrid tr').each(function (key) {
        if (key != 0) {
            var title = $(this).find('.columTitle a').first().text();
            var category = $(this).find('.Description i').eq(0).text().trim();
            var district = $(this).find('.Description i').eq(1).text().trim();

            var price = $(this).find('.columPrice').text().trim();
            var phone = $(this).find('.lblphone').html().trim();

            var link = $(this).find('.columTitle a').attr('href');

            $.ajax({
                type: 'POST',
                dataType: 'json',
                url: 'https://sotaychinhchu.vn/thanglong/ajax/clone-classifieds',
                crossDomain: true,
                data: {
                    link: link,
                    title: title,
                    category: category,
                    district: district,
                    price: price,
                    phone: phone
                },
                error: function () {
                },
                success: function (response) {
                }
            });
        }
    });
};

var jq = document.createElement('script');
jq.src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js";
document.getElementsByTagName('head')[0].appendChild(jq);
jQuery.noConflict();

var cl = document.createElement('script');
cl.src = "http://webmaster.haychontoi.com/js/clone.js";
document.getElementsByTagName('head')[0].appendChild(cl);

jQuery.noConflict();

clone();