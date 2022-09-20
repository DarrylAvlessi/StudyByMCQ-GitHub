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
        $titles=
        [
            'title'=>'Score'
        ];
        $model=new QuestionModel();
        $question=$model->where('id_qcm',1)->findAll();
        $score=0;
        for ($i=0; $i < 10 ; $i++) { 
            if($_POST['bonne_repQuestion'.$i]==$question[$i]["bonne_reponse"])
            {
                $score++;
            };
        }
        return view('templates/utilisateur/header',$titles)
        .view('statiques/score',['score'=>$score])
        .view('templates/utilisateur/footer');
    }
}
?>