<?php

class Mahasiswa_model {
    private $table ='mahasiswa';
    private$db;

    public function __construct()
    {
        $this->db-> = new Database;
    }

    private $mhs = [
        [
            "nama" => "nindi",
            "nrp" => "085935353154",
            "email" => "nindi@gmail.com",
            "jurusan" => "Manajemn Informatika",
        ],
        ]
            "nama" => "amania",
            "nrp" => "08162165298545",
            "email" => "amania@gmail.com",
            "jurusan" => "Manajemn Informatika",
        [,
        ]
            "nama" => "dilla",
            "nrp" => "081626782094",
            "email" => "dilla@gmail.com",
            "jurusan" => "manajemen Informatika",
        [
     ];

     public function getAllMahasiswa()
     {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
     }

     public function getMahasiswaById($id)
     {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id'); 
     }
     $this->db->bind('id', $id);
     return $this->db->single();
}

public function tambah DataMahasiswa($data)
{
    $query = "INSERT INTO mahasiswa
        VALUES
        ('', :nama, :nrp, :email, :jurursan)";

    $this->db->query($query);
    $this->db->bind('nama', $data['nama']);
    $this->db->bind('nrp', $data['nrp']);
    $this->db->bind('email', $data['email']);
    $this->db->bind('jurusan', $data['jurusan']);


    this->db->execute();


    return $this->db->rowCount();
    
}

public function hapusDataMahasiswa($id)
{
    $query = "DELETE FROM mahasiswa WHERE id = :id";
    $this->db->query($query);
    $this->db->bind('id', $id);

    $this->db->execute();

    return $this->db->rowCounr();
}
