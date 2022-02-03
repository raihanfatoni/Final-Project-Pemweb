<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\PengurusModel;

class Pengurus extends Controller
{
    public function index()
    {
        $model = new PengurusModel();
        $data['pengurus'] = $model->getPengurus();
        echo view('pengurus_view', $data);
    }

    public function add_new()
    {
        echo view('add_pengurus');
    }

    public function save()
    {
        $model = new PengurusModel();
        $data = array(
            'id_pengurus'  => $this->request->getPost('id_pengurus'),
            'Nama' => $this->request->getPost('Nama'),
            'Jabatan' => $this->request->getPost('Jabatan'),
            'NoTelefon' => $this->request->getPost('NoTelefon'),
            'Alamat' => $this->request->getPost('Alamat'),
            'JenisKelamin' => $this->request->getPost('JenisKelamin'),
            'id_admin2' => $this->request->getPost('id_admin2'),

        );  
        $model->savePengurus($data);
        return redirect()->to(base_url("pengurus"));
    }

    public function edit($id)
    {
        $model = new PengurusModel();
        $data['pengurus'] = $model->getPengurus($id)->getRow();
        echo view('edit_pengurus', $data);
    }

    public function update()
    {
        $model = new PengurusModel();
        $id = $this->request->getPost('id_pengurus');
        $data = array(
            'id_pengurus'  => $this->request->getPost('id_pengurus'),
            'Nama' => $this->request->getPost('Nama'),
            'Jabatan' => $this->request->getPost('Jabatan'),
            'NoTelefon' => $this->request->getPost('NoTelefon'),
            'Alamat' => $this->request->getPost('Alamat'),
            'JenisKelamin' => $this->request->getPost('JenisKelamin'),
            'id_admin2' => $this->request->getPost('id_admin2'),

        );
        $model->updatePengurus($data, $id);
        return redirect()->to(base_url("pengurus"));
    }

    public function delete($id)
    {
        $model = new PengurusModel();
        $data['pengurus'] = $model->getPengurus($id)->getRow();
        $model->deletePengurus($id);
        return redirect()->to(base_url("pengurus"));
    }
}
