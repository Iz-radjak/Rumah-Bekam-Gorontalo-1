<?php

class Pegawai extends Controller
{

    public function index()
    {
        $data['icon'] = 'fas fa-user-tie';
        $data['judul'] = 'Daftar Pegawai';
        $data['pegawai'] = $this->model('Pegawai_model')->getAllPegawai();
        $this->view('templates/header', $data);
        $this->view('pegawai/index', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('Pegawai_model')->tambahDataPegawai($_POST) > 0) {
            Flasher::setFlash('Data Pegawai', 'BERHASIL', 'Ditambahkan', 'success');
            header('location: ' . BASEURL . '/pegawai');
            exit;
        } else {
            Flasher::setFlash('Data Pegawai',  'GAGAL', 'Ditambahkan', 'danger');
            header('location: ' . BASEURL . '/pegawai');
            exit;
        }
    }

    public function hapus($id_pegawai)
    {
        if ($this->model('Pegawai_model')->hapusDataPegawai($id_pegawai) > 0) {
            Flasher::setFlash('Data Pegawai', 'BERHASIL', 'Dihapus', 'success');
            header('location: ' . BASEURL . '/pegawai');
            exit;
        } else {
            Flasher::setFlash('Data Pegawai',  'GAGAL', 'Dihapus', 'danger');
            header('location: ' . BASEURL . '/pegawai');
            exit;
        }
    }

    public function getUbah()
    {
        echo json_encode($this->model('Pegawai_model')->getPegawaiById($_POST['id_pegawai']));
    }

    public function ubah()
    {
        if ($this->model('Pegawai_model')->ubahDataPegawai($_POST) > 0) {
            Flasher::setFlash('Data Pegawai', 'berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/pegawai');
            exit;
        } else {
            Flasher::setFlash('Data Pegawai', 'gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/pegawai');
            exit;
        }
    }
}
