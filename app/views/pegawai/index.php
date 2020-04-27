<!-- Content -->
<div class="main_content">
    <div class="title-main">
        <span class="icon">
            <i class="fas fa-user-tie"></i>
        </span>
        <span class="list">
            <?= $data['judul']; ?>
        </span>
        <hr>
    </div>

    <button class="btn btn-primary" type="submit">+ Tambah Data</button>

    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Pegawai</th>
                <th scope="col">NIP</th>
                <th scope="col">Tanggal Terdaftar</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data['pegawai'] as $pegawai) : ?>
                <tr>
                    <th scope="row"><?= $pegawai['id_pegawai']; ?></th>
                    <td><?= $pegawai['nama']; ?></td>
                    <td><?= $pegawai['nip']; ?></td>
                    <td><?= $pegawai['jabatan']; ?></td>
                    <td>
                        <span><button class="btn btn-primary btn-sm" type="submit">Edit</button></span>
                        <span><button class="btn btn-primary btn-sm" type="submit">Hapus</button></span>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>

</div>
</div>