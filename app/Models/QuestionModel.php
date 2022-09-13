<?php

namespace App\Models;

use CodeIgniter\Model;

class QuestionModel extends Model
{
    protected $table='question';
    protected $primaryKey='id_question';
    protected $allowedFields = ['id_question','question','reponse1','reponse2','reponse3','bonne_reponse','id_qcm'];
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    public function add_question($data_question)
    {
        $builder = $this->db->table('question');
        $builder->insertBatch($data_question);
    }

}