<?php

namespace App\Controllers;
use App\Models\GuruModel;
use App\Models\PengurusModel;
use App\Models\SiswaModel;
use App\Models\KaryawanModel;

class Home extends BaseController
{
	public function index()
	{
		return view('sekolah');
	}

	public function admin()
	{
		return view('admin');
	}

    public function Guru()
    {
        $model = new GuruModel();
        $data['guru'] = $model->getGuru();
        echo view('view_guru', $data);
    }

    public function Pengurus()
    {
        $model = new PengurusModel();
        $data['pengurus'] = $model->getPengurus();
        echo view('view_pengurus', $data);
    }

    public function Karyawan()
    {
        $model = new KaryawanModel();
        $data['karyawan'] = $model->getKaryawan();
        echo view('view_karyawan', $data);
    }

    public function Siswa()
    {
        $model = new SiswaModel();
        $data['siswa'] = $model->getSiswa();
        echo view('view_siswa', $data);
    }


	public function Visi()
	{
		return view('view_visi');
	}

	//--------------------------------------------------------------------

}
