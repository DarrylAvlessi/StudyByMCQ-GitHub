<?php

namespace App\Controllers;

use App\Models\DomEtuModel;

use App\Models\QcmModel;

class Accueil extends BaseController
{
    public function index()
    {
        $titles=[
            'title'=> 'Accueil'
        ];
        $model=new DomEtuModel;
        $dom_etu=$model->findAll();
        $model1=new QcmModel;
        $qcm=$model1->findAll();
        return view('templates/utilisateur/header',$titles)
        .view('statiques/accueil',['dom_etu' => $dom_etu,'qcm' => $qcm])
        .view('templates/utilisateur/footer');
    }

}
