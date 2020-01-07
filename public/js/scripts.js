jQuery(document).ready(function ($) {
    $('.carousel').carousel({
        interval: false
    });

    $('.search').on('click', function () {
        $('.main-menu .navbar-form').slideToggle();
    });

    $('#elastislide').elastislide();
});

$(window).load(function () {
    var carouselCaptionWidth = $('#carousel-sidebar .active img').width();
    $('#carousel-sidebar img').each(function () {
        $(this).attr('width', carouselCaptionWidth);
    });
    $('#carousel-sidebar .sidebar-carousel-caption').css('max-width', carouselCaptionWidth + 'px');
    $('#carousel-sidebar .carousel-indicators').css('max-width', carouselCaptionWidth + 'px');
    $('.sidebar .banner').css('max-width', carouselCaptionWidth + 'px');
});

$('#currency').change(function () {
    window.location = 'currency/change?curr=' + $(this).val();

});
$('.available select').on('change', function () {
    var modId = $(this).val(),
        size = $(this).find('option').filter(':selected').data('title'),
        price = $(this).find('option').filter(':selected').data('price');
    basePrice = $('#base-price').data('base');
    if (price) {
        $('#base-price').text('Price: ' + symbolLeft + ' ' + price + ' ' + symbolRight);
    } else {
        $('#base-price').text('Price: ' + symbolLeft + ' ' + basePrice + ' ' + symbolRight);
    }
});

/*===========CART==============*/
$('body').on('click', '.add-to-cart-link', function (e) {
    e.preventDefault();
    let id = $(this).data('id'),
        qty = $('.quantity input').val() ? $('.quantity input').val() : 1,
        mod = $('.available select').val();
    $.ajax({
        url: '/cart/add',
        data: {id: id, qty: qty, mod: mod},
        type: 'GET',
        success: function (res) {
            showCart(res);
        },
        error: function () {
            alert('Ошибка, попробуйте позже');
        }
    });

});

function showCart(cart) {
    if ($.trim(cart) == '<h3>Корзина пуста</h3>') {
        $('#cart .modal-footer a, #cart .modal-footer .btn-danger ').css('display', 'none');
    } else {
        $('#cart .modal-footer a, #cart .modal-footer .btn-danger ').css('display', 'inline-block');
    }
    $('#cart .modal-body').html(cart);
    $('#cart').modal();
    if ($('.cart-sum').text()) {
        $('.simpleCart_total').html($('#cart .cart-sum').text());
    } else {
        $('.simpleCart_total').text('Empty Cart');
    }
}

$('#cart .modal-body').on('click', '.del-item', function () {
    let id = $(this).data('id');
    $.ajax({
        url: '/cart/delete',
        data: {id: id},
        type: 'GET',
        success: function (res) {
            showCart(res);
        },
        error: function () {
            alert('Error!');
        }
    })
});

function clearCart() {
    $.ajax({
        url: '/cart/clear',
        type: 'GET',
        success: function (res) {
            showCart(res);
        },
        error: function () {
            alert('Ошибка, попробуйте позже');
        }
    });

}

function getCart() {
    $.ajax({
        url: '/cart/show',
        type: 'GET',
        success: function (res) {
            showCart(res);
        },
        error: function () {
            alert('Ошибка, попробуйте позже');
        }
    });
}


/*===========END CART============*/
/*===========SEARCH============*/
let products = new Bloodhound({
    datumTokenizer: Bloodhound.tokenizers.whitespace,
    queryTokenizer: Bloodhound.tokenizers.whitespace,
    remote: {
        wildcard: '%QUERY',
        url: path + '/search/typeahead?query=%QUERY'
    }
});
products.initialize();
$('#typeahead').typeahead({
    highlight: true
}, {
    name: 'products',
    display: 'title',
    limit: 9,
    source: products
});
$('#typeahead').bind('typeahead: select', function (ev, suggesion) {
    window.location = path + '/search/?s=' + encodeURIComponent(suggesion.title);
});
/*===========END SEARCH============*/
/*===========END FILTERS============*/
$('body').on('change', '.w_sidebar input', function () {
    let checked = $('.w_sidebar input:checked'),
        data = '';
    checked.each(function () {
        data += this.value + ',';
    });
    if (data) {
        $.ajax({
            url: location.href,
            data: {filter: data},
            type: 'GET',
            beforeSend: function () {
                $('.preloader').fadeIn(300, function () {
                    $('.products-row').hide();
                })
            },
            success: function (res) {
                $('.preloader').delay(500).fadeOut('slow', function () {
                    $('.products-row').html(res).fadeIn();
                    let url = location.search.replace(/filter(.+?)(&|$)/g, '');
                    let newURL = location.pathname + url + (location.search ? "&" : "?") + "filter=" + data;
                    newURL=newURL.replace('&&', '&');
                    newURL=newURL.replace('?&', '?');
                    history.pushState({}, '', newURL);
                });
            },
            error: function () {
                alert('Ошибка!');
            }
        })
    } else {
        window.location = location.pathname;
    }

});


/*===========END FILTERS============*/
