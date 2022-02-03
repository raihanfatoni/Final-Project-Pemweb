<?php

namespace App\Models;

use CodeIgniter\Model;

class GuruModel extends Model
{
    protected $table = 'guru';

    public function getGuru($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['NUPTK' => $id]);
        }
    }

    public function saveGuru($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    public function updateGuru($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, array('NUPTK' => $id));
        return $query;
    }

    public function deleteGuru($id)
    {
        $query = $this->db->table($this->table)->delete(array('NUPTK' => $id));
        return $query;
    }
}
