<?php

namespace App\Models;

use CodeIgniter\Model;

class NoteCommentaireModel extends Model
{
    protected $table='note_commentaire';
    protected $primaryKey = 'id_qcm,idUtilisateur';
    protected $allowedFields = ['id_qcm','idUtilisateur','note','commentaire'];
    protected $useTimestamps = true;
    protected $createdField  = 'nc_created_at';
    protected $updatedField  = 'nc_updated_at';
}