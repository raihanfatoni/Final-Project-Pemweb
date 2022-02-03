<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\SiswaModel;

class Siswa extends Controller
{
    public function index()
    {
        $model = new SiswaModel();
        $data['siswa'] = $model->getSiswa();
        echo view('siswa_view', $data);
    }

    public function add_new()
    {
        echo view('add_siswa');
    }

    public function save()
    {
        $model = new SiswaModel();
        $data = array(
            'NIS'  => $this->request->getPost('NIS'),
            'Nama' => $this->request->getPost('Nama'),
            'TahunMasuk' => $this->request->getPost('TahunMasuk'),
            'NoTelefon' => $this->request->getPost('NoTelefon'),
            'Alamat' => $this->request->getPost('Alamat'),
            'JenisKelamin' => $this->request->getPost('JenisKelamin'),
            'id_admin3' => $this->request->getPost('id_admin3'),

        );  
        $model->saveSiswa($data);
        return redirect()->to(base_url("siswa"));
    }

    public function edit($id)
    {
        $model = new SiswaModel();
        $data['siswa'] = $model->getSiswa($id)->getRow();
        echo view('edit_siswa', $data);
    }

    public function update()
    {
        $model = new SiswaModel();
        $id = $this->request->getPost('NIS');
        $data = array(
            'NIS'  => $this->request->getPost('NIS'),
            'Nama' => $this->request->getPost('Nama'),
            'TahunMasuk' => $this->request->getPost('TahunMasuk'),
            'NoTelefon' => $this->request->getPost('NoTelefon'),
            'Alamat' => $this->request->getPost('Alamat'),
            'JenisKelamin' => $this->request->getPost('JenisKelamin'),
            'id_admin3' => $this->request->getPost('id_admin3'),

        );
        $model->updateSiswa($data, $id);
        return redirect()->to(base_url("siswa"));
    }

    public function delete($id)
    {
        $model = new SiswaModel();
        $data['siswa'] = $model->getSiswa($id)->getRow();
        $model->deleteSiswa($id);
        return redirect()->to(base_url("siswa"));
    }
}