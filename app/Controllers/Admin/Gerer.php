<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

use App\Models\ListModel;

use App\Models\QcmModel;

use App\Models\QuestionModel;

use App\Models\AdminModel;

use App\Models\DomEtuModel;

use Config\Services;

class Gerer extends BaseController
{
    protected $helpers = ['form'];
    public function index()
    {
        $titles=[
            'title' => 'Liste des QCM'
        ];
        $model=new ListModel();
        $qcm=$model->get_qcm();
        echo view('templates/admin/header',$titles)
        .view('admin/liste',['qcm'=>$qcm])
        .view('templates/admin/footer');
    }
    public function ajouterQCM()
    {
        $titles=[
            'title' => 'Ajouter'
        ];
        $model=new DomEtuModel();
        $etu=$model->findAll();

        if (strtolower($this->request->getMethod()) !== 'post') {
            return view('templates/admin/header',$titles)
            .view('admin/ajouter', ['validation' => Services::validation(),'etu'=>$etu])
            .view('templates/admin/footer');
        }

        $Nmb=10;

        $rules = [
            'nom_qcm' => 'required',
            'reference' => 'required',];
        for ($i=1; $i<=$Nmb ; $i++) { 
            $rules['question'.$i] = 'required';
            $rules['rep1Question'.$i] = 'required';
            $rules['rep2Question'.$i] = 'required';
            $rules['rep3Question'.$i] = 'required';
            $rules['bonne_repQuestion'.$i] = 'required';
        }

        if (! $this->validate($rules)) { 
            return view('templates/admin/header',$titles)
            .view('admin/ajouter', ['validation' => $this->validator,'etu'=>$etu])
            .view('templates/admin/footer');
    
        }else{
            $dataqcm = [
                'designation' => 'QCM '.$_POST['nom_qcm'],
                'id_etude' => $_POST['reference'],
            ];
    
            $model1=new QcmModel();
            $addqcm=$model1->insert($dataqcm);
            $qcmid=$model1->getInsertID();

            for ($i=1; $i<=$Nmb ; $i++) { 
                $data_question =
                    [
                        'question' => $_POST['question'.$i],
                        'reponse1' => $_POST['rep1Question'.$i],
                        'reponse2' => $_POST['rep2Question'.$i],
                        'reponse3' => $_POST['rep3Question'.$i],
                        'bonne_reponse' => $_POST['bonne_repQuestion'.$i],
                        'id_qcm' => $qcmid
                    ];
                    $model2=new QuestionModel();
                    $addquestion=$model2->save($data_question);
            }
    
            return redirect()->to('/admin/gerer/succes');
    
        }
    }
    public function succes()
    {
        $titles=[
            'title' => 'Succès'
        ];
        return view('templates/admin/header',$titles)
        .view('admin/succes')
        .view('templates/admin/footer');
    }
    public function confirmersuppression($id_qcm){
        $titles=[
            'title' => 'Supprimer'
        ];
        return view('templates/admin/header',$titles)
        .view('admin/supprimer',['id_qcm'=>$id_qcm])
        .view('templates/admin/footer');
    }
    public function supprimerqcm($id_qcm)
    {
        $model3=new QcmModel();
        $model3->delete($id_qcm);
        return redirect()->to('/admin/gerer');
    }
    public function modifierQCM($id_qcm)
    {
        $model4=new QuestionModel();
        $questions=$model4->where('id_qcm',$id_qcm)->findAll();
        $titles=[
            'title'=>'Modifier'
        ];
        //var_dump($this->request->getVar());
        if (strtolower($this->request->getMethod()) !== 'post') {
            return view('templates/admin/header',$titles)
            .view('admin/modifier', ['validation' => Services::validation(),'questions'=>$questions,'id_qcm'=>$id_qcm])
            .view('templates/admin/footer');
        }

        $Nmb=10;

        $rules =[];
        for ($i=1; $i<=$Nmb ; $i++) { 
            $rules['question'.$i] = 'required';
            $rules['rep1Question'.$i] = 'required';
            $rules['rep2Question'.$i] = 'required';
            $rules['rep3Question'.$i] = 'required';
            $rules['bonne_repQuestion'.$i] = 'required';
        }

        if (! $this->validate($rules)) { 
            return view('templates/admin/header',$titles)
            .view('admin/modifier', ['validation' => $this->validator,'questions'=>$questions,'id_qcm'=>$id_qcm])
            .view('templates/admin/footer');
    
        }else{
            for ($i=1; $i<=$Nmb ; $i++) { 
                $data_question =
                    [
                        'id_question' => $questions[$i-1]["id_question"],
                        'question' => $_POST['question'.$i],
                        'reponse1' => $_POST['rep1Question'.$i],
                        'reponse2' => $_POST['rep2Question'.$i],
                        'reponse3' => $_POST['rep3Question'.$i],
                        'bonne_reponse' => $_POST['bonne_repQuestion'.$i],
                    ];
                    $model4=new QuestionModel();
                    $editquestion1=$model4->save($data_question);
            }    
          
            $model=new ListModel();
            $qcm=$model->get_qcm();
            return view('templates/admin/header',$titles)
            .view('admin/modifSucces')
            .view('admin/liste',['qcm'=>$qcm])
            .view('templates/admin/footer');
        }    
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
            'password'=>'required'
        ];
        if (! $this->validate($rules)) {
            return view('templates/admin/header',$titles)
            .view('admin/ajouterAdmin', ['validation' => $this->validator])
            .view('templates/admin/footer');
        }else{
            $dataAdmin=[
            'pseudoAdmin'=>$_POST['pseudoAdmin'],
            'nom'=>$_POST['nomAdmin'],
            'prenom'=>$_POST['prenomAdmin'],
            'motDePasse'=>$_POST['password']
        ];
        $model->save($dataAdmin);
        }
        return view('templates/admin/header',$titles)
        .view('admin/adminSucces')
        .view('admin/ajouterAdmin')
        .view('templates/admin/footer');
    }
}
