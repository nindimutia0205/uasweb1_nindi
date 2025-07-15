<?php

class Mahasiswa_model {
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
        return $this->mhs; 
     }


}