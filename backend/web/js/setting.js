/**
 * Created by vietv on 3/8/2018.
 */

$(function () {
    var content = $('#content');
    var describe = $('#describe');
    if (content.length != 0 || describe.length != 0) {
        CKEDITOR.config.filebrowserBrowseUrl = '/ckfinder/ckfinder.html';
        CKEDITOR.config.filebrowserImageBrowseUrl = '/ckfinder/ckfinder.html?type=Images';
        CKEDITOR.config.filebrowserFlashBrowseUrl = '/ckfinder/ckfinder.html?type=Flash';
        CKEDITOR.config.filebrowserUploadUrl = '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';
        CKEDITOR.config.filebrowserImageUploadUrl = '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';
        CKEDITOR.config.filebrowserFlashUploadUrl = '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash';
    }

    if (content.length != 0) {
        initContent();
    }

    if (describe.length != 0) {
        initDescribe();
    }

    var iCheck = $('input[type="checkbox"].minimal, input[type="radio"].minimal');

    iCheck.iCheck({
        checkboxClass: 'icheckbox_minimal-blue',
        radioClass: 'iradio_minimal-blue'
    });

    iCheck.on('ifChanged', function () {
        if (this.checked) {
            $(this).closest('tr').css('background-color', '#ffffd5');
        } else {
            $(this).closest('tr').css('background-color', '');
        }
    });

    var myCheckbox = $("[name='switch-checkbox']");

    myCheckbox.bootstrapSwitch();

    myCheckbox.on('switchChange.bootstrapSwitch', function () {
        $('#loader').css('display', 'block');

        $.ajax({
            url: base + $(this).data('api'),
            type: 'post',
            data: {
                id: $(this).data('id'),
                table: $(this).data('table'),
                api: $(this).data('api'),
                column: $(this).data('column')
            },
            success: function (response) {
                $('#loader').css('display', 'none');

                if (response) {
                    $.notify('Cập nhật thành công', 'success');
                }
                else {
                    $.notify('Đã có lỗi xảy ra', 'error');
                }
            }
        });

    });

    $('.editable').editable();

});

$(document).ready(function () {
    $('.js-example-basic-single').select2();
});

$('.kv-file-drop-zone').change(function () {
    var loader = $('#loader');
    loader.css('display', 'block');

    var fd = new FormData();

    var auto = $(this).data('auto');

    var id = $(this).data('id');

    var column_parent_id = $(this).data('column-parent-id');

    var files = event.target.files;

    for (var i = 0; i < files.length; i++) {
        fd.append('files[]', files[i]);
    }

    if (files) {
        $.ajax({
            url: '/uploads/core/upload.php',
            type: 'post',
            data: fd,
            contentType: false,
            processData: false,
            success: function (response) {
                if (response.length != 0) {
                    if (auto == 1) {
                        $.ajax({
                            url: base + 'ajax/upload-image',
                            type: 'post',
                            data: {
                                images: JSON.stringify(response),
                                id: id,
                                column_parent_id: column_parent_id
                            },
                            success: function (response) {
                                loader.css('display', 'none');

                                if (response) {
                                    $.notify('Cập nhật thành công', 'success');
                                }
                                else {
                                    $.notify('Đã có lỗi xảy ra', 'error');
                                }

                            }
                        });
                    }

                    for (i = 0; i < response.length; i++) {
                        var children = $('#list-img-temp');

                        children.children().children().find('img').attr('src', '/uploads/advertises/' + response[i]);
                        children.find('.caption').html(response[i]);
                        $('#list-img').append(children.html());
                    }
                }

                loader.css('display', 'none');
            }
        });
    }

    loader.css('display', 'none');

});

var deleteFile = function (event) {
    var loader = $('#loader');

    loader.css('display', 'block');

    var auto = 0;
    var id = 0;

    if ($(event.target).is('i')) {
        auto = $(event.target).parent().data('auto');
        id = $(event.target).parent().data('id');
    }
    else {
        auto = $(event.target).data('auto');
        id = $(event.target).data('id');
    }

    var url = $(event.target).closest(".file-preview-frame").find('img').attr('src');


    var r = confirm('Bạn có chắc chắn muốn xóa ' + url);

    if (r == true) {
        $.ajax({
            url: '/uploads/core/delete.php',
            type: 'post',
            data: {path: url},
            success: function () {
                $(event.target).closest(".file-preview-frame").remove();

                if (auto) {
                    $.ajax({
                        url: '/uploads/core/delete.php',
                        type: 'post',
                        data: {id: id},
                        success: function () {
                            $(event.target).closest(".file-preview-frame").remove();

                            if (auto) {
                                $.ajax({
                                    url: base + 'ajax/delete-image',
                                    type: 'post',
                                    data: {id: id},
                                    success: function (response) {
                                        if (response) {
                                            $.notify('Cập nhật thành công', 'success');
                                        }
                                        else {
                                            $.notify('Đã có lỗi xảy ra', 'error');
                                        }

                                        loader.css('display', 'none');
                                    }
                                });

                                loader.css('display', 'none');
                            }
                        }
                    });
                }

                loader.css('display', 'none');
            }
        });
    }
    else {
        loader.css('display', 'none');
    }
};

var getImages = function () {
    var images = [];

    $('#list-img').find('.kv-file-content img').each(function () {

        var url = $(this).attr('src');

        images.push(url);

    });

    $('#images').val(JSON.stringify(images));

};