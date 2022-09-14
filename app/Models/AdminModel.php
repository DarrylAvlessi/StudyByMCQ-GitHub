<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table='admin';
    protected $primaryKey = 'idAdmin';
    protected $allowedFields = ['idAdmin','pseudoAdmin','nom','prenom','motDePasse'];
    protected $useTimestamps = true;
    protected $createdField  = 'admin_created_at';
    protected $updatedField  = 'admin_updated_at';
}