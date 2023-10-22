<?php 

class mahasiswa_model
{
    // private $dbh; // database handler
    // private $stmt;

    private $table = 'mahasiswa';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllMahasiswa()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    } 

    public function getMahasiswaById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
    // private $mhs = [
    //     [
    //         "nama" => "Gilman Arief",
    //         "nrp" => "213040037",
    //         "email" => "gilmanarief23@gmail.com",
    //         "jurusan" => "Teknik Informatika"
    //     ],
    //     [
    //         "nama" => "Muhammad Lutfi",
    //         "nrp" => "213040014",
    //         "email" => "ghifarullah@gmail.com",
    //         "jurusan" => "Teknik Informatika"
    //     ],
    // ];

}