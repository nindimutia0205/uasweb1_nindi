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

    public function tambah()
    {
        if( $this->model('Mahasiswa_model')->tambahDataMahasiswa($_POST)> 0 ) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location:'. BASEURL . '/mahasiswa');
            exit;
        } else {
            Flasher::setFlash('berhasil', 'ditambahkan', 'danger');
            header('Location:'. BASEURL . '/mahasiswa');
            exit;
        }
}
    public function hapus($id)
    {
        if( $this->model('Mahasiswa_model')->tambahDataMahasiswa($id) > 0 ) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location:'. BASEURL . '/mahasiswa');
            exit;
        } else {
            Flasher::setFlash('berhasil', 'ditambahkan', 'danger');
            header('Location:'. BASEURL . '/mahasiswa');
            exit;
        }
}


public function getubah()
{
    echo json_encode($this->model('Mahasiswa_model')->
    getMahasiswaById($_POST['id']));
}

public function ubah()
{
        if( $this->model('Mahasiswa_model')->ubahDataMahasiswa($_POST)> 0 ) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location:'. BASEURL . '/mahasiswa');
            exit;
        } else {
            Flasher::setFlash('berhasil', 'diubah', 'danger');
            header('Location:'. BASEURL . '/mahasiswa');
            exit;
        }
}