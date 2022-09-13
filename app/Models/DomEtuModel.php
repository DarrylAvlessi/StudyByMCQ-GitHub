<?php

namespace App\Models;

use CodeIgniter\Model;

class DomEtuModel extends Model
{
    protected $table='domaine_etude';
    protected $primaryKey = 'id_etude';
    protected $allowedFields = ['id_etude', 'designation_etu'];
    protected $useTimestamps = true;
    
}