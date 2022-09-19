<?php

namespace App\Controllers;

use App\Models\QuestionModel;

class Qcm extends BaseController
{
    public function index($idqcm)
    {
        $titles=
        [
            'title'=>'Accéder QCM'
        ];
        $model=new QuestionModel();
        $question=$model->where('id_qcm',$idqcm)->findAll();
        return view('templates/utilisateur/header',$titles)
        .view('statiques/questions',['question'=>$question])
        .view('templates/utilisateur/footer');
    }
    public function score()
    {
        
    }
}
?>