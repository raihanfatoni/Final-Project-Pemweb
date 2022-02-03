<?php

namespace App\Models;

use CodeIgniter\Model;

class KaryawanModel extends Model
{
    protected $table = 'karyawan';

    public function getKaryawan($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id_karyawan' => $id]);
        }
    }

    public function saveKaryawan($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    public function updateKaryawan($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, array('id_karyawan' => $id));
        return $query;
    }

    public function deleteKaryawan($id)
    {
        $query = $this->db->table($this->table)->delete(array('id_karyawan' => $id));
        return $query;
    }
}
