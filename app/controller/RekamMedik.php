<?php

class RekamMedik extends Controller
{

    public function index()
    {
        $data['icon'] = 'fas fa-clipboard-list';
        $data['judul'] = 'Rekam Medik';
        $data['rekam medik'] = $this->model('RekamMedik_model')->getAllRedik();
        $this->view('templates/header', $data);
        $this->view('rekam medik/index', $data);
        $this->view('templates/footer');
    }

    // public function tambah()
    // {
    //     if ($this->model('Pasien_model')->tambahDataPasien($_POST) > 0) {
    //         Flasher::setFlash('Data Pasien', 'BERHASIL', 'Ditambahkan', 'success');
    //         header('location: ' . BASEURL . '/pasien');
    //         exit;
    //     } else {
    //         Flasher::setFlash('Data Pasien',  'GAGAL', 'Ditambahkan', 'danger');
    //         header('location: ' . BASEURL . '/pasien');
    //         exit;
    //     }
    // }

    // public function hapus($id_pasien)
    // {
    //     if ($this->model('Pasien_model')->hapusDataPasien($id_pasien) > 0) {
    //         Flasher::setFlash('Data Pasien', 'BERHASIL', 'Dihapus', 'success');
    //         header('location: ' . BASEURL . '/pasien');
    //         exit;
    //     } else {
    //         Flasher::setFlash('Data Pasien',  'GAGAL', 'Dihapus', 'danger');
    //         header('location: ' . BASEURL . '/pasien');
    //         exit;
    //     }
    // }

    // public function getUbah()
    // {
    //     echo json_encode($this->model('Pasien_model')->getPasienById($_POST['id_pasien']));
    // }

    // public function ubah()
    // {
    //     if ($this->model('Pasien_model')->ubahDataPasien($_POST) > 0) {
    //         Flasher::setFlash('Data Pasien', 'Berhasil', 'Diubah', 'success');
    //         header('Location: ' . BASEURL . '/pasien');
    //         exit;
    //     } else {
    //         Flasher::setFlash('Data Pasien', 'Gagal', 'Diubah', 'danger');
    //         header('Location: ' . BASEURL . '/pasien');
    //         exit;
    //     }
    // }
}
