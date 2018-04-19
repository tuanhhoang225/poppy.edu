var save_content_image = function () {
    var id = $('#id-image').val();
    var content = CKEDITOR.instances['describe'].getData();

    var loader = $('#loader');
    loader.css('display', 'block');

    $.ajax({
        url: base + 'ajax/edit-content-image',
        type: 'post',
        data: {
            id: id,
            content: content
        },
        success: function (response) {
            if (response) {
                $.notify('Cập nhật thành công', 'success');
            }
            else {
                $.notify('Đã xảy ra lỗi', 'error');
            }

            loader.css('display', 'none');
        }
    });

};

var load_content_image = function (id) {
    $('#id-image').val(id);

    var loader = $('#loader');
    loader.css('display', 'block');

    $.ajax({
        url: base + 'ajax/get-content-image',
        type: 'post',
        data: {
            id: id,
        },
        success: function (response) {

            console.log(response);
            CKEDITOR.instances['describe'].setData(response['content']);

            loader.css('display', 'none');
        }
    });
};