<!-- Content -->

<?php Flasher::flash() ?>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary tombolTambahBarang" data-toggle="modal" data-target="#formModal">
    + Tambah Data
</button>

<table class="table">
    <thead class="thead-light">
        <tr style="text-align: center">
            <th scope="col">No</th>
            <th scope="col">Nama Barang</th>
            <th scope="col">Harga Pokok</th>
            <th scope="col">Harga Jual</th>
            <th scope="col">Tanggal Expired</th>
            <th scope="col">Stok</th>
            <th scope="col">Keterangan</th>
            <th scope="col">Kategori</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1;
        foreach ($data['barang'] as $barang) : ?>
            <tr style="text-align: center">
                <th scope="row"><?= $i; ?></th>
                <td><?= $barang['nama_brg']; ?></td>
                <td><?= $barang['hrg_pokok']; ?></td>
                <td><?= $barang['hrg_jual']; ?></td>
                <td><?= $barang['tgl_exp']; ?></td>
                <td><?= $barang['stok']; ?></td>
                <td><?= $barang['ket']; ?></td>
                <td><?= $barang['kategori']; ?></td>
                <td>

                    <!-- data-(nama bebas) -->
                    <span>
                        <a href=" <?= BASEURL; ?>/barang/ubah/<?= $barang['id_brg']; ?>" class="btn-sm btn-warning btn-sm ml-2 tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id_brg="<?= $barang['id_brg']; ?>">Ubah</a>
                    </span>
                    <span>
                        <a href=" <?= BASEURL; ?>/barang/hapus/<?= $barang['id_brg']; ?>" class="btn-sm btn-danger btn-sm ml-2" onclick="return confirm('Apakah Anda Akan Menghapus Data?');">Hapus</a>
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
                <h5 class="modal-title" id="modalLabel">Tambah Barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="<?= BASEURL; ?>/barang/tambah" method="POST">
                    <input type="hidden" name="id_brg" id="id_brg">
                    <div class="form-group">
                        <label for="nama_brg">Nama Barang</label>
                        <input type="text" class="form-control" id="nama_brg" name="nama_brg">
                    </div>

                    <div class="form-group">
                        <label for="harga1">Harga Pokok</label>
                        <input type="number" class="form-control" id="harga1" name="harga1">
                    </div>

                    <div class="form-group">
                        <label for="harga2">Harga Jual</label>
                        <input type="number" class="form-control" id="harga2" name="harga2">
                    </div>
                    <div class="form-group">
                        <label for="tgl_exp">Tanggal Expired</label>
                        <input type="date" class="form-control" id="tgl_exp" name="tgl_exp">
                    </div>
                    <div class="form-group">
                        <label for="stok">Stok</label>
                        <input type="number" class="form-control" id="stok" name="stok">
                    </div>
                    <div class="form-group">
                        <label for="ket">Keterangan</label>
                        <input type="text" class="form-control" id="ket" name="ket">
                    </div>

                    <div class="form-group">
                        <label for="kategori">Kategori Barang</label>
                        <select class="form-control" id="kategori" name="kategori">
                            <option value=""></option>
                            <option value="Barang Reseller">Barang Reseller</option>
                            <option value="Barang Khitan">Barang Khitan</option>
                        </select>
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