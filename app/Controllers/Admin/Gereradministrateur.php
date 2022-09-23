<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

use Config\Services;

use App\Models\AdminModel;

class Gereradministrateur extends BaseController
{
    public function index()
    {
        session_start();
        if(!array_key_exists('id',$_SESSION))
        {
            return redirect()->to('/connexion/expert');
        }
        $titles=[
            'title'=>'Liste des administrateurs'
        ];
        $model=new AdminModel();
        $admin=$model->where('idAdmin>',1)->findAll();
        return view('templates/admin/header',$titles)
        .view('admin/listeAdmin',['admin'=>$admin])
        .view('templates/admin/footer');
    }
    public function ajouterAdmin()
    {
        $titles=[
            'title'=>'Nouvel administrateur'
        ];
        $model=new AdminModel();
        if (strtolower($this->request->getMethod()) !== 'post') {
            return view('templates/admin/header',$titles)
            .view('admin/ajouterAdmin', ['validation' => Services::validation()])
            .view('templates/admin/footer');
        }
        $rules=[
            'pseudoAdmin'=>'required',
            'nomAdmin'=>'required',
            'prenomAdmin'=>'required',
            'password'=>'required|min_length[8]|max_length[32]'
        ];
        if (! $this->validate($rules)) {
            return view('templates/admin/header',$titles)
            .view('admin/ajouterAdmin', ['validation' => $this->validator])
            .view('templates/admin/footer');
        }else{
            $dataAdmin=[
            'pseudoAdmin'=>trim($_POST['pseudoAdmin']),
            'nom'=>trim($_POST['nomAdmin']),
            'prenom'=>trim($_POST['prenomAdmin']),
            'motDePasse'=>md5(trim($_POST['password']))
        ];
        $model->save($dataAdmin);
        }
        return view('templates/admin/header',$titles)
        .view('admin/adminSucces')
        .view('admin/ajouterAdmin')
        .view('templates/admin/footer');
    }
    public function confirmersuppression($idAdmin){
        $titles=[
            'title' => 'Supprimer Admin'
        ];
        return view('templates/admin/header',$titles)
        .view('admin/supprimeradmin',['idAdmin'=>$idAdmin])
        .view('templates/admin/footer');
    }
    public function supprimerAdmin($idAdmin)
    {
        $model=new AdminModel();
        $model->delete($idAdmin);
        return redirect()->to('/admin/gereradministrateur');
    }
    public function succes()
    {
        $titles=[
            'title' => 'Succès'
        ];
        return view('templates/admin/header',$titles)
        .view('admin/adminSucces')
        .view('templates/admin/footer');
    }
    public function modifierAdmin($idAdmin)
    {
        $model=new AdminModel();
        $admins=$model->where('idAdmin',$idAdmin)->findAll();
        $titles=[
            'title'=>'Modifier l\'administrateur '.$idAdmin
        ];
        var_dump($admins);
        //var_dump($this->request->getVar());
        if (strtolower($this->request->getMethod()) !== 'post') {
            return view('templates/admin/header',$titles)
            .view('admin/modifAdmin', ['validation' => Services::validation(),'admins'=>$admins,'idAdmin'=>$idAdmin])
            .view('templates/admin/footer');
        }

        $Nmb=10;

        $rules=[
            'pseudoAdmin'=>'required',
            'nomAdmin'=>'required',
            'prenomAdmin'=>'required',
            'password'=>'required|min_length[8]|max_length[32]'
        ];

        if (! $this->validate($rules)) { 
            return view('templates/admin/header',$titles)
            .view('admin/modifAdmin', ['validation' => $this->validator,'admins'=>$admins,'idAdmin'=>$idAdmin])
            .view('templates/admin/footer');
    
        }else{
            
        $dataAdmin =
            [
                'idAdmin'=>$idAdmin,
                'pseudoAdmin' => trim($_POST['pseudoAdmin']),
                'nom' => trim($_POST['nomAdmin']),
                'prenom' => trim($_POST['prenomAdmin']),
                'motDePasse' => md5(trim($_POST['password'])),
            ];
        $modAdmin=$model->save($dataAdmin);
          
        $admin=$model->where('idAdmin>',1)->findAll();
        return view('templates/admin/header',['title'=>'Liste des administrateurs'])
        .view('admin/modifSucces')
        .view('admin/listeAdmin',['admin'=>$admin])
        .view('templates/admin/footer');
        }    
    }
}