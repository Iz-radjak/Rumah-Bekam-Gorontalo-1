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
        $('#nama_pegawai').val('');
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
                $('#nama_pegawai').val(data.nama_pegawai);
                $('#nip').val(data.nip);
                $('#jabatan').val(data.jabatan);
                $('#id_pegawai').val(data.id_pegawai);

            }
        });
    });
});

$(function () {
    // tampil Pasien
    $('.tombolTambahPasien').on('click', function () {
        $('#modalLabel').html('Tambah Data Pasien');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('#tgl_regis_pasien').val('');
        $('#nama_pasien').val('');
        $('#nik').val('');
        $('#jk').val('');
        $('#umur').val('');
        $('#no_hp').val('');
        $('#pekerjaan').val('');
        $('#alamat').val('');
        $('#id_pasien').val('');
    });

    $('.tombolUbahPasien').on('click', function () {
        $('#modalLabel').html('Ubah Data Pasien');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/Rumah-Bekam-Gorontalo/public/pasien/ubah')

        const id_pasien = $(this).data('id_pasien');

        $.ajax({
            url: 'http://localhost/Rumah-Bekam-Gorontalo/public/pasien/getUbah',
            data: {
                id_pasien: id_pasien
            },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                $('#tgl_regis_pasien').val(data.tgl_regis_pasien);
                $('#nama_pasien').val(data.nama_pasien);
                $('#nik').val(data.nik);
                $('#jk').val(data.jk);
                $('#umur').val(data.umur);
                $('#no_hp').val(data.no_hp);
                $('#pekerjaan').val(data.pekerjaan);
                $('#alamat').val(data.alamat);
                $('#id_pasien').val(data.id_pasien);

            }
        });
    });
});