<?php

namespace App\Models;

use CodeIgniter\Model;

class UtilisateurModel extends Model
{
    protected $table='utilisateur';
    protected $primaryKey = 'idAdmin';
    protected $allowedFields = ['idUtilisateur','pseudo','nom','prenom','motDePasse'];
    protected $useTimestamps = true;
    protected $createdField  = 'utilisateur_created_at';
    protected $updatedField  = 'utilisateur_updated_at';
}