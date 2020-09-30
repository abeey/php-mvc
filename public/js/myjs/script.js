$(function () {

    $('#tambahModalTambah').on('click', function () {
        $('#tambahModalLabel').html("Tambah Data User");
        $('.modal-footer button[type=submit]').html("Simpan");
    })

    $('.tampilModalUbah').on('click', function () {
        $('#tambahModalLabel').html("Ubah Data User");
        $('.modal-footer button[type=submit]').html("Update");
        $('.modal-body form').attr('action', 'http://localhost/_latihan/php-mvc/public/User/editUser');


        var id_user = $(this).data("id");

        $.ajax({
            url: 'http://localhost/_latihan/php-mvc/public/User/getUser',
            data: { id_user: id_user },
            dataType: 'JSON',
            type: 'POST',
            success: function (data) {
                $('#id_user').val(data.id_user);
                $('#passw').val(data.password);
            }
        });
    })
})