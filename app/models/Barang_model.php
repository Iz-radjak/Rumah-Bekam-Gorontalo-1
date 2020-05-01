<?php

class Barang_model
{

    private $table = 'tb_barang';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    // public function getPegawaiById($id_pegawai)
    // {
    //     $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_pegawai = :id_pegawai');
    //     $this->db->bind('id_pegawai', $id_pegawai);
    //     return $this->db->single();
    // }

    public function getAllBarang()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function tambahDataBarang($data)
    {
        $query = "INSERT INTO tb_barang
        VALUES ('','', :nama_brg, :hrg_pokok, :hrg_jual, :tgl_exp, :stok, :ket, :kategori)";

        $this->db->query($query);
        $this->db->bind('nama_brg', $data['nama_brg']);
        $this->db->bind('hrg_pokok', $data['hrg_pokok']);
        $this->db->bind('hrg_jual', $data['hrg_jual']);
        $this->db->bind('tgl_exp', $data['tgl_exp']);
        $this->db->bind('stok', $data['stok']);
        $this->db->bind('ket', $data['ket']);
        $this->db->bind('kategori', $data['kategori']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    // public function hapusDataPegawai($id_pegawai)
    // {
    //     $query = "DELETE FROM tb_pegawai WHERE id_pegawai = :id_pegawai";
    //     $this->db->query($query);
    //     $this->db->bind('id_pegawai', $id_pegawai);

    //     $this->db->execute();

    //     return $this->db->rowCount();
    // }

    // public function ubahDataPegawai($data)
    // {
    //     $query = "UPDATE tb_pegawai SET
    //                 nama = :nama,
    //                 nip = :nip,
    //                 jabatan = :jabatan
    //             WHERE id_pegawai = :id_pegawai ";

    //     $this->db->query($query);
    //     $this->db->bind('nama', $data['nama']);
    //     $this->db->bind('nip', $data['nip']);
    //     $this->db->bind('jabatan', $data['jabatan']);
    //     $this->db->bind('id_pegawai', $data['id_pegawai']);

    //     $this->db->execute();

    //     return $this->db->rowCount();
    // }
}
