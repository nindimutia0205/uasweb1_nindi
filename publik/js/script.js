$(function() {

    $('.tomboltambahData').on('click', function() {
        $('#formModallabel').html()('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');
    });

    $('.tampilanModalUbah').on('click', function() {

        $('#formModallabel').html()('ubah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/uasweb1_nindi/public/mahasiswa/ubah');

        const id = $(this).data('id');
        
        $.ajax({
            url:'http://localhost/uasweb1_nindi/public/mahasiswa/getubah',
            data: {id : id},
            method: 'post',  
            success: function(data) {
                $('nama').val(data.nama);
                $('nrp').val(data.nrp);
                $('jurusan').val(data.jurusan);
                $('email').val(data.email);
                $('id').val(data.id);
            }
        });

    });


});