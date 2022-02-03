<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\GuruModel;

class Guru extends Controller
{
    public function index()
    {
        $model = new GuruModel();
        $data['guru'] = $model->getGuru();
        echo view('guru_view', $data);
    }

    public function add_new()
    {
        echo view('add_guru');
    }

    public function save()
    {
        $model = new GuruModel();
        $data = array(
            'NUPTK'  => $this->request->getPost('NUPTK'),
            'Nama' => $this->request->getPost('Nama'),
            'MataPelajaran' => $this->request->getPost('MataPelajaran'),
            'NoTelefon' => $this->request->getPost('NoTelefon'),
            'Alamat' => $this->request->getPost('Alamat'),
            'JenisKelamin' => $this->request->getPost('JenisKelamin'),
            'id_admin' => $this->request->getPost('id_admin'),

        );  
        $model->saveGuru($data);
        return redirect()->to(base_url("guru"));
    }

    public function edit($id)
    {
        $model = new GuruModel();
        $data['guru'] = $model->getGuru($id)->getRow();
        echo view('edit_guru', $data);
    }

    public function update()
    {
        $model = new GuruModel();
        $id = $this->request->getPost('NUPTK');
        $data = array(
            'NUPTK'  => $this->request->getPost('NUPTK'),
            'Nama' => $this->request->getPost('Nama'),
            'MataPelajaran' => $this->request->getPost('MataPelajaran'),
            'NoTelefon' => $this->request->getPost('NoTelefon'),
            'Alamat' => $this->request->getPost('Alamat'),
            'JenisKelamin' => $this->request->getPost('JenisKelamin'),
            'id_admin' => $this->request->getPost('id_admin'),

        );
        $model->updateGuru($data, $id);
        return redirect()->to(base_url("guru"));
    }

    public function delete($id)
    {
        $model = new GuruModel();
        $data['guru'] = $model->getGuru($id)->getRow();
        $model->deleteGuru($id);
        return redirect()->to(base_url("guru"));
    }
}
