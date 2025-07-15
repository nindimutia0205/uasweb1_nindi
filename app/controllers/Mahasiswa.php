<?php

class Mahasiswa extend Controller {
    public function index()
    {
    $data['judul'] = 'Daftar mahasiswa';
    $data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
    $this->('templates/header', $data);
    $this->('templates/index', $data);
    $this->('templates/footer');
    }

    public function detail($id)
    {
    $data['judul'] = 'detail mahasiswa';
    $data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswaById($id);
    $this->('templates/header', $data);
    $this->('templates/detail', $data);
    $this->('templates/footer');
    }
}