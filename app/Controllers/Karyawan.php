<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\KaryawanModel;

class Karyawan extends Controller
{
    public function index()
    {
        $model = new KaryawanModel();
        $data['karyawan'] = $model->getKaryawan();
        echo view('karyawan_view', $data);
    }

    public function add_new()
    {
        echo view('add_karyawan');
    }

    public function save()
    {
        $model = new KaryawanModel();
        $data = array(
            'id_karyawan'  => $this->request->getPost('id_karyawan'),
            'Nama' => $this->request->getPost('Nama'),
            'RanahKerja' => $this->request->getPost('RanahKerja'),
            'NoTelefon' => $this->request->getPost('NoTelefon'),
            'Alamat' => $this->request->getPost('Alamat'),
            'JenisKelamin' => $this->request->getPost('JenisKelamin'),
            'id_admin1' => $this->request->getPost('id_admin1'),

        );  
        $model->saveKaryawan($data);
        return redirect()->to(base_url("karyawan"));
    }

    public function edit($id)
    {
        $model = new KaryawanModel();
        $data['karyawan'] = $model->getKaryawan($id)->getRow();
        echo view('edit_karyawan', $data);
    }

    public function update()
    {
        $model = new KaryawanModel();
        $id = $this->request->getPost('id_karyawan');
        $data = array(
            'id_karyawan'  => $this->request->getPost('id_karyawan'),
            'Nama' => $this->request->getPost('Nama'),
            'RanahKerja' => $this->request->getPost('RanahKerja'),
            'NoTelefon' => $this->request->getPost('NoTelefon'),
            'Alamat' => $this->request->getPost('Alamat'),
            'JenisKelamin' => $this->request->getPost('JenisKelamin'),
            'id_admin1' => $this->request->getPost('id_admin1'),

        );
        $model->updateKaryawan($data, $id);
        return redirect()->to(base_url("karyawan"));
    }

    public function delete($id)
    {
        $model = new KaryawanModel();
        $data['karyawan'] = $model->getKaryawan($id)->getRow();
        $model->deleteKaryawan($id);
        return redirect()->to(base_url("karyawan"));
    }
}
