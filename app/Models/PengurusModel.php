<?php

namespace App\Models;

use CodeIgniter\Model;

class PengurusModel extends Model
{
    protected $table = 'pengurus';

    public function getPengurus($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id_pengurus' => $id]);
        }
    }

    public function savePengurus($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    public function updatePengurus($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, array('id_pengurus' => $id));
        return $query;
    }

    public function deletePengurus($id)
    {
        $query = $this->db->table($this->table)->delete(array('id_pengurus' => $id));
        return $query;
    }
}
