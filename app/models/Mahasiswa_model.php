<?php

class Mahasiswa_model {

    // private $mhs = [
    //     [
    //         "nama" => "Zaskha Sasmita",
    //         "nrp" => "193040134",
    //         "email" => "zaskha@email.com",
    //         "jurusan" => "Teknik Informatika"
    //     ], 
    //     [
    //         "nama" => "Rika Apriliyani",
    //         "nrp" => "193040145",
    //         "email" => "rika@email.com",
    //         "jurusan" => "Olahraga" 
    //     ],
    //     [
    //         "nama" => "Asep Muhajirin",
    //         "nrp" => "193040155",
    //         "email" => "asep@email.com",
    //         "jurusan" => "Teknik Industri" 
    //     ]
    // ];


    // cara konek ke databse
    //database handler
    private $dbh;
    private $stmt;

    public function __construct()
    {
        //data source name
        $dsn = 'mysql:host=localhost;dbname=prakweb2021_phpmvc_193040134';

        try {
            $this->dbh = new PDO($dsn, 'root', '');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getAllMahasiswa() 
    {    
        $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }


}