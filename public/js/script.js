$(document).ready(function () {
    $(".hamburger").click(function () {
        $(".wrapper").toggleClass("slide");
    });
});

var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
    dropdown[i].addEventListener("click", function () {
        this.classList.toggle("active");
        var dropdownContent = this.nextElementSibling;
        if (dropdownContent.style.display === "block") {
            dropdownContent.style.display = "none";
        } else {
            dropdownContent.style.display = "block";
        }
    });
}

// $(function () {
//     $('[data-toggle="tooltip"]').tooltip()
// })

$(function () {
    $('.tombolTambahData').on('click', function () {
        $('#modalLabel').html('Tambah Data Pegawai');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('#nama').val('');
        $('#nip').val('');
        $('#jabatan').val('');
        $('#id_pegawai').val('');
    });

    $('.tampilModalUbah').on('click', function () {
        $('#modalLabel').html('Ubah Data Pegawai');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/Rumah-Bekam-Gorontalo/public/pegawai/ubah')

        const id_pegawai = $(this).data('id_pegawai');

        $.ajax({
            url: 'http://localhost/Rumah-Bekam-Gorontalo/public/pegawai/getUbah',
            data: {
                id_pegawai: id_pegawai
            },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                $('#nama').val(data.nama);
                $('#nip').val(data.nip);
                $('#jabatan').val(data.jabatan);
                $('#id_pegawai').val(data.id_pegawai);

            }
        });
    });
});