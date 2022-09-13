<div class="bg-gradient rounded-5 mx-5 text-secondary px-4 py-5 my-5 text-center">
    <div class="py-5">
      <h1 class="display-4 fw-bold text-white">StudyByMCQ</h1>
      <div class="col-lg-5 mx-auto">
        <p class="fs-4 mb-4 text-white">Une plateforme d’autoévaluation en ligne qui permet à un individu à travers des QCM de consolider ses connaissances acquises, de les réviser en vue d’un test, d’un entretien, d’un examen…. La plateforme propose actuellement cinq domaines d’études notamment : informatique, anglais, mathématiques, économie, gestion. L’individu peut accéder à des QCM en rapport avec ses différents domaines d’étude. *MCQ : Multiple Choice Questionary (Question à choix multiples)</p>
      </div>
    </div>
  </div>
      
<div class="container-fluid">
<div class="row">
<?php
            foreach($qcm as $q){
        ?>
        <div class="col-sm-6 col-lg-5 mx-auto mb-5" >
                <div class="card border border-5">
                 <img src="/assets/img/qcm<?=$q['id_qcm']?>.jpg " alt="" class="bd-placeholder-img card-img-top p-2">
                      

                    <div class="card-body">
                          <h5 class="btn btn-secondary text-light fw-bolder fs-5"><?=$q['designation']?></h5>
                        <p class="logo-ft fw-bold fs-4"><?=$q['designation']?> avec des réponses pour consolider vos connaissances, réviser pour un test, un entretien d'embauche, préparer un examen...</p>
                        <div class="text-end">
                        <a href="acceder" class="btn btn-success btn-lg" role="button" type = "button" data-bs-toggle="tooltip" data-bs-placement="top" title="Cliquer pour acceder"><i class="bi bi-arrow-right"></i> Accéder</a>
                        </div>
                    </div>
                </div>
        </div>
        <?php }?>
</div>
    <div class="row">
        <?php
            foreach($dom_etu as $de){
        ?>
        <div class="col-sm-6 col-lg-2 mx-auto mb-5" >
                <div class="card border border-5">
                 <img src="/assets/img/de<?=$de['id_etude']?>.jpg " alt="" class="bd-placeholder-img card-img-top p-2">
                      

                    <div class="card-body">
                          <h5 class="logo-ft fw-bolder fs-3"><?=$de['designation_etu']?></h5>
                        <p class="logo-ft fw-bold">Retrouvez ici votre liste de QCM <br> dans différents branches en <em><?=$de['designation_etu']?></em></p>
                        <div class="text-end">
                        <a href="acceder" class="btn btn-success btn-lg" role="button" type = "button" data-bs-toggle="tooltip" data-bs-placement="top" title="Cliquer pour acceder"><i class="bi bi-arrow-right"></i> Accéder</a>
                        </div>
                    </div>
                </div>
        </div>
        <?php }?>
    </div>
</div>
    
