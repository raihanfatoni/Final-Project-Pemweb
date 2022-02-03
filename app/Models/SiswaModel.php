<?php

namespace App\Models;

use CodeIgniter\Model;

class SiswaModel extends Model
{
    protected $table = 'siswa';

    public function getSiswa($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['NIS' => $id]);
        }
    }

    public function saveSiswa($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    public function updateSiswa($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, array('NIS' => $id));
        return $query;
    }

    public function deleteSiswa($id)
    {
        $query = $this->db->table($this->table)->delete(array('NIS' => $id));
        return $query;
    }
}
