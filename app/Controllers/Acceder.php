<?php

namespace App\Controllers;

use Config\Services;

use App\Models\AdminModel;

class Acceder extends BaseController
{
    public function index()
    {
        $titles=[
            'title'=>'Acceder à l\'espace administrateur'
        ];
        if(strtolower($this->request->getMethod())!=='post')
        {
            return view('templates/utilisateur/header',$titles)
            .view('statiques/espaceAdmin',['validation'=>Services::validation()])
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
            return redirect()->to('/admin/gererqcm');
        }
        return view('templates/utilisateur/header',$titles)
        .view('admin/invalide')
        .view('statiques/espaceAdmin')
        .view('templates/utilisateur/footer');
    }
}