<?php

class Mahasiswa extend Controller {
    public function index()
    {
    $data['judul'] = 'Daftar mahasiswa';
    $data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
    $this->('templates/header', $data);
    $this->('templates/index');
    $this->('templates/footer');
    }
}