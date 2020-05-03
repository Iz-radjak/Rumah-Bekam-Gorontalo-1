<?php

class Pegawai_model
{

    private $table = 'tb_pegawai';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getPegawaiById($id_pegawai)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_pegawai = :id_pegawai');
        $this->db->bind('id_pegawai', $id_pegawai);
        return $this->db->single();
    }

    public function getAllPegawai()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function tambahDataPegawai($data)
    {
        $query = "INSERT INTO tb_pegawai
        VALUES ('', :nama_pegawai, :nip, :jabatan)";

        $this->db->query($query);
        $this->db->bind('nama_pegawai', $data['nama_pegawai']);
        $this->db->bind('nip', $data['nip']);
        $this->db->bind('jabatan', $data['jabatan']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataPegawai($id_pegawai)
    {
        $query = "DELETE FROM tb_pegawai WHERE id_pegawai = :id_pegawai";
        $this->db->query($query);
        $this->db->bind('id_pegawai', $id_pegawai);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataPegawai($data)
    {
        $query = "UPDATE tb_pegawai SET
                    nama_pegawai = :nama_pegawai,
                    nip = :nip,
                    jabatan = :jabatan
                WHERE id_pegawai = :id_pegawai ";

        $this->db->query($query);
        $this->db->bind('nama_pegawai', $data['nama_pegawai']);
        $this->db->bind('nip', $data['nip']);
        $this->db->bind('jabatan', $data['jabatan']);
        $this->db->bind('id_pegawai', $data['id_pegawai']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
