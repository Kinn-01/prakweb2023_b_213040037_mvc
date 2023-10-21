<?php 

class mahasiswa_model
{
    private $dbh; // database handler
    private $stmt;


    public function __construct()
    {
        // data source name
        $dsn = 'mysql:host=localhost;dbname=phpmvc';

        try {
            $this->dbh = new PDO($dsn, 'root', '');
        } catch(PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getAllMahasiswa()
    {
        $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
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