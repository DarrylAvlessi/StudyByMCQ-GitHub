<?php

namespace App\Models;

use CodeIgniter\Model;

class QcmModel extends Model
{
    protected $table='qcm';
    protected $primaryKey = 'id_qcm';
    protected $allowedFields = ['id_qcm', 'designation','id_etude'];
    protected $useTimestamps = true;
    protected $createdField  = 'qcm_created_at';
    protected $updatedField  = 'qcm_updated_at';

}