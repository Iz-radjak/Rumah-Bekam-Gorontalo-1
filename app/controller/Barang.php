<?php

class Barang extends Controller
{

    public function index()
    {
        $data['icon'] = 'fas fa-cubes';
        $data['judul'] = 'Daftar Barang';
        $data['barang'] = $this->model('Barang_model')->getAllBarang();
        $this->view('templates/header', $data);
        $this->view('barang/index', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('Barang_model')->tambahDataBarang($_POST) > 0) {
            Flasher::setFlash('Data Barang', 'BERHASIL', 'Ditambahkan', 'success');
            header('location: ' . BASEURL . '/barang');
            exit;
        } else {
            Flasher::setFlash('Data Barang',  'GAGAL', 'Ditambahkan', 'danger');
            header('location: ' . BASEURL . '/barang');
            exit;
        }
    }

    // public function hapus($id_pegawai)
    // {
    //     if ($this->model('Barang_model')->hapusDataPegawai($id_pegawai) > 0) {
    //         Flasher::setFlash('Data Pegawai', 'BERHASIL', 'Dihapus', 'success');
    //         header('location: ' . BASEURL . '/pegawai');
    //         exit;
    //     } else {
    //         Flasher::setFlash('Data Pegawai',  'GAGAL', 'Dihapus', 'danger');
    //         header('location: ' . BASEURL . '/pegawai');
    //         exit;
    //     }
    // }

    // public function getUbah()
    // {
    //     echo json_encode($this->model('Barang_model')->getPegawaiById($_POST['id_pegawai']));
    // }

    // public function ubah()
    // {
    //     if ($this->model('Barang_model')->ubahDataPegawai($_POST) > 0) {
    //         Flasher::setFlash('Data Barang', 'Berhasil', 'Diubah', 'success');
    //         header('Location: ' . BASEURL . '/barang');
    //         exit;
    //     } else {
    //         Flasher::setFlash('Data Barang', 'Gagal', 'Diubah', 'danger');
    //         header('Location: ' . BASEURL . '/barang');
    //         exit;
    //     }
    // }
}
