<?php

namespace App\Controllers;

use Config\Services;

use App\Models\AdminModel;

use App\Models\UtilisateurModel;

class Connexion extends BaseController
{
    public function expert()
    {
        $titles=[
            'title'=>'Acceder à l\'espace administrateur'
        ];
        if(strtolower($this->request->getMethod())!=='post')
        {
            return view('templates/utilisateur/header',$titles)
            .view('statiques/espaceAdmin')
            .view('templates/utilisateur/footer');
        }

        $model=new AdminModel();
        $dataAdmin=[
            'pseudoAdmin'=>$_POST['pseudoAdmin'],
            'motDePasse'=>md5(trim($_POST['password']))
        ];
        $dataAdmin=$model->where(['pseudoAdmin'=>$dataAdmin['pseudoAdmin'],'motDePasse'=>$dataAdmin['motDePasse']])->findAll();

        if($dataAdmin)
        {
            session_start();
            $_SESSION['id']=$dataAdmin[0]['idAdmin']; 
            return redirect()->to('/admin/gererqcm');
        }
        return view('templates/utilisateur/header',$titles)
        .view('admin/invalide')
        .view('statiques/espaceAdmin')
        .view('templates/utilisateur/footer');
    }
    public function utilisateur()
    {
        $titles=[
            'title'=>'Acceder aux QCM'
        ];
        if(strtolower($this->request->getMethod())!=='post')
        {
            return view('templates/utilisateur/header',$titles)
            .view('statiques/connexionutilisateur')
            .view('templates/utilisateur/footer');
        }

        $model=new UtilisateurModel();
        $dataUser=[
            'pseudo'=>$_POST['pseudoAdmin'],
            'motDePasse'=>md5(trim($_POST['password']))
        ];
        $dataUser=$model->where(['pseudo'=>$dataUser['pseudo'],'motDePasse'=>$dataUser['motDePasse']])->findAll();

        if($dataUser)
        {
            session_start();
            $_SESSION['id']=$dataUser[0]['idUtilisateur']; 
            return redirect()->to('/accueil');
        }
        return view('templates/utilisateur/header',$titles)
        .view('admin/invalide')
        .view('statiques/connexionutilisateur')
        .view('templates/utilisateur/footer');
    }
    public function choixConnexion()
    {
        $titles=[
            'title'=>'Choix de connexion'
        ];
        return view('templates/utilisateur/header',$titles)
        .view('statiques/choixConnexion')
        .view('templates/utilisateur/footer');
    }
    public function nouvelexpert()
    {
        $titles=[
            'title'=>'Inscription - Expert'
        ];
        $model=new AdminModel();
        if (strtolower($this->request->getMethod()) !== 'post') {
            return view('templates/utilisateur/header',$titles)
            .view('admin/ajouterAdmin', ['validation' => Services::validation()])
            .view('templates/utilisateur/footer');
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
    public function nouvelutilisateur()
    {
        $titles=[
            'title'=>'Inscription - Utilisateur'
        ];
        $model=new UtilisateurModel();
        if (strtolower($this->request->getMethod()) !== 'post') {
            return view('templates/utilisateur/header',$titles)
            .view('admin/ajouterUtilisateur', ['validation' => Services::validation()])
            .view('templates/utilisateur/footer');
        }
        $rules=[
            'pseudo'=>'required',
            'nom'=>'required',
            'prenom'=>'required',
            'password'=>'required|min_length[8]|max_length[32]'
        ];
        if (! $this->validate($rules)) {
            return view('templates/admin/header',$titles)
            .view('admin/ajouterUtilisateur', ['validation' => $this->validator])
            .view('templates/admin/footer');
        }else{
            $dataUser=[
            'pseudo'=>trim($_POST['pseudo']),
            'nom'=>trim($_POST['nom']),
            'prenom'=>trim($_POST['prenom']),
            'motDePasse'=>md5(trim($_POST['password']))
        ];
        $model->save($dataUser);
        }
        return view('templates/admin/header',$titles)
        .view('admin/adminSucces')
        .view('admin/ajouterUtilisateur')
        .view('templates/admin/footer');
    }
}