//CKEDITOR.replace( 'editor1' );
$('#editor1').ckeditor();
$('.delete').click(function () {
    let res = confirm('Подтвердите действие');
    if (!res) return false;
});

//удаление картинок
$('.del-item').on('click', function () {

    let res = confirm('Подтвердите действие');
    if (!res) return false;
    let $this = $(this),
        id = $this.data('id'),
        src = $this.data('src');
    $.ajax({
        url: adminpath + '/product/delete-gallery',
        data: {id: id, src: src},
        type: 'POST',
        beforeSend: function () {
            $this.closest('.file-upload').find('.overlay').css({'display': 'block'});
        },
        success: function (res) {
            setTimeout(function () {
                $this.closest('.file-upload').find('.overlay').css({'display': 'none'});
                if (res == 1) {
                    $this.fadeOut();
                }
            }, 1000);
        },
        error: function () {
            setTimeout(function () {
                $this.closest('.file-upload').find('.overlay').css({'display': 'none'});
                alert('ERROR');
            }, 1000);
        }
    });
});

$('.nav-pills a').each(function () {
    let location = window.location.protocol + '//' + window.location.host + window.location.pathname;
    let link = this.href;
    if (link == location) {
        $(this).parent().addClass('active');
        $(this).closest('.has-treeview').addClass('active');
    }
});
$('#reset-filter').click(function () {
    $('.filter').prop('checked', false);
    return false;
});
$('.select2').select2({
    //minimumInputLength: 2,
    placeholder: "Начните вводить наименование товара",
    cache: true,
    ajax: {
        url: adminpath + "/product/related-product",
        delay: 250,
        dataType: 'json',
        data: function (params) {
            return {
                q: params.term,
                page: params.page
            };
        },
        processResults: function (data, params) {
            return {
                results: data.items
            };
        }
    }
});
if ($('div').is('#single')) {
    var buttonSingle = $("#single"),
        buttonMulti = $("#multi"),
        file;
}
if (buttonSingle) {
    new AjaxUpload(buttonSingle, {
        action: adminpath + buttonSingle.data('url') + "?upload=1",
        data: {name: buttonSingle.data('name')},
        name: buttonSingle.data('name'),
        onSubmit: function (file, ext) {
            if (!(ext && /^(jpg|png|jpeg|gif)$/i.test(ext))) {
                alert('Ошибка! Разрешены только картинки');
                return false;
            }
            buttonSingle.closest('.file-upload').find('.overlay').css({'display': 'block'});

        },
        onComplete: function (file, response) {
            setTimeout(function () {
                buttonSingle.closest('.file-upload').find('.overlay').css({'display': 'none'});

                response = JSON.parse(response);
                $('.' + buttonSingle.data('name')).html('<img src="/img/' + response.file + '" style="max-height: 150px;">');
            }, 1000);
        }
    });
}

if (buttonMulti) {
    new AjaxUpload(buttonMulti, {
        action: adminpath + buttonMulti.data('url') + "?upload=1",
        data: {name: buttonMulti.data('name')},
        name: buttonMulti.data('name'),
        onSubmit: function (file, ext) {
            if (!(ext && /^(jpg|png|jpeg|gif)$/i.test(ext))) {
                alert('Ошибка! Разрешены только картинки');
                return false;
            }
            buttonMulti.closest('.file-upload').find('.overlay').css({'display': 'block'});

        },
        onComplete: function (file, response) {
            setTimeout(function () {
                buttonMulti.closest('.file-upload').find('.overlay').css({'display': 'none'});

                response = JSON.parse(response);
                $('.' + buttonMulti.data('name')).append('<img src="/img/' + response.file + '" style="max-height: 150px;">');
            }, 1000);
        }
    });
}
$('#add').on('submit', function () {
if (!isNumeric($('#category_id').val())){
    alert('Выберите категорию');
    return false;
}
});

function isNumeric(n) {
    return !isNaN(parseFloat(n)) && isFinite(n);
}