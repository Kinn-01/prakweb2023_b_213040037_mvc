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

    public function tambahDataMahasiswa($data)
    {
        $query = "INSERT INTO mahasiswa
                    VALUES
                    ('0', :nama, :nrp, :email, :jurusan)";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nrp', $data['nrp']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jurusan', $data['jurusan']);

        $this->db->execute();

        return $this->db->rowCount();
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