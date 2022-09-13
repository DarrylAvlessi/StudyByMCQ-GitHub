<?php

namespace App\Models;

use CodeIgniter\Model;

class ListModel extends Model
{
    public function get_qcm()
    {
        $query = $this->db->query("SELECT id_qcm,designation,domaine_etude.designation_etu AS detu FROM qcm LEFT JOIN domaine_etude ON qcm.id_etude=domaine_etude.id_etude ORDER BY id_qcm");
        $result= $query->getResultArray();
        return $result;
    }
    public function get_etu()
    {
        /*$query = $this->db->query("SELECT * FROM domaine_etude");
        $result = $query->getResultArray();
        return $result;*/
        $builder = $this->db->table('domaine_etude');
        $query = $builder->get(); // Produces: SELECT * FROM domaine_etude
        $result = $query->getResultArray();
        return $result;
    }
}