<?php

namespace App\Controllers;

use Config\Services;

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
            .view('statiques/accederAdmin',['validation'=>Services::validation()])
            .view('templates/utilisateur/footer');
        }

        $model=new AdminModel();
        $dataAdmin=[
            'pseudoAdmin'=>$_POST['pseudoAdmin'],
            'motDePasse'=>$_POST['password']
        ];
        $dataAdmin=$model->where(['pseudoAdmin'=>$dataAdmin['pseudoAdmin'],'motDePasse'=>$dataAdmin['pseudoAdmin']])->findAll();

        if($dataAdmin)
        {
            return redirect()->to('accueil');
        }

        $rules=[
            'pseudoAdmin'=>'required',
            'password'=>'required'
        ];
    }
}