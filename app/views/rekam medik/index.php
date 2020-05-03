<!-- Content -->

<?php Flasher::flash() ?>

<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary tombolTambahPasien" data-toggle="modal" data-target="#formModal">
    + Tambah Data
</button> -->

<table class="table">
    <thead class="thead-light">
        <tr style="text-align: center">
            <th scope="col">No</th>
            <th scope="col">Tanggal rekam Medik</th>
            <th scope="col">Nama Pasien</th>
            <th scope="col">Keluhan</th>
            <th scope="col">Tekanan Darah</th>
            <th scope="col">Nama terapis</th>
            <th scope="col">Jenis Layanan</th>
            <th scope="col">Qty</th>
            <th scope="col">Diskon</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1;
        foreach ($data['rekam medik'] as $redik) : ?>
            <tr style="text-align: center">
                <th scope="row"><?= $i; ?></th>
                <td><?= $redik['tgl_redik']; ?></td>
                <td><?= $redik['nama_pasien']; ?></td>
                <td><?= $redik['keluhan']; ?></td>
                <td><?= $redik['tekanan_darah']; ?></td>
                <td><?= $redik['nama_pegawai']; ?></td>
                <td><?= $redik['nama_layanan']; ?></td>
                <td><?= $redik['qty']; ?></td>
                <td><?= $redik['disc']; ?></td>
                <td>

                    <!-- data-(nama bebas) -->
                    <span>
                        <a href=" <?= BASEURL; ?>/rekamMedik/ubah/<?= $redik['id_redik']; ?>" class="btn-sm btn-warning btn-sm ml-2 tombolUbahPasien" data-toggle="modal" data-target="#formModal" data-id_pasien="<?= $redik['id_redik']; ?>">Ubah</a>
                    </span>
                    <span>
                        <a href=" <?= BASEURL; ?>/rekamMedik/hapus/<?= $redik['id_redik']; ?>" class="btn-sm btn-danger btn-sm ml-2" onclick="return confirm('Apakah Anda Akan Menghapus Data?');">Hapus</a>
                    </span>
                </td>
            </tr>
        <?php $i++;
        endforeach ?>
    </tbody>
</table>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel">Tambah Data Pasien</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="<?= BASEURL; ?>/pasien/tambah" method="POST" autocomplete="off">
                    <input type="hidden" name="id_pasien" id="id_pasien">
                    <div class="form-group">
                        <label for="tgl">Tanggal Regis</label>
                        <input type="date" class="form-control" id="tgl_rehis_pasien" name="tgl_regis_pasien" required>
                    </div>

                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>

                    <div class="form-group">
                        <label for="nik">NIK</label>
                        <input type="text" class="form-control" id="nik" name="nik">
                    </div>

                    <div class="form-group">
                        <label for="jk">Jenis Kelamin</label>
                        <input type="text" class="form-control" id="jk" name="jk">

                    </div>

                    <div class="form-group">
                        <label for="umur">Umur</label>
                        <input type="text" class="form-control" id="umur" name="umur">
                    </div>

                    <div class="form-group">
                        <label for="no_hp">No. Telepon/Hp</label>
                        <input type="text" class="form-control" id="no_hp" name="no_hp">
                    </div>

                    <div class="form-group">
                        <label for="pekerjaan">Pekerjaan</label>
                        <input type="text" class="form-control" id="pekerjaan" name="pekerjaan">
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat">
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
                </form>
            </div>
        </div>
    </div>
</div>