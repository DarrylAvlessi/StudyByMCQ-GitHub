<?php 
    if(isset($validation)):
?>
    <div class="text-danger">
        <?= $validation->listErrors()?>
    </div>
<?php endif; ?>
<br><br><br>
<div class="container-fluid border border-secondary bg-success bg-opacity-25 bg-gradient rounded-3 p-2 col-12" >
    <div class="text-center">
        <h3 class="fs-1 text-light">Créer un nouveau QCM</h3>
    </div><br>
    <div class="container">
        <form action="/admin/gererqcm/ajouterQCM" method="post" class="form">
            <div class="form-group text-center">
                <div class="row">
                    <div class="col text-start ">
                        <div>
                            <label for="nom_qcm" class="form-label text-light fs-4">Nom du QCM</label>
                        </div>
                        <div class="input-group">
                            <span class="input-group-text text-bg-dark bg-gradient">QCM</span>
                            <input type="text" name="nom_qcm" class="form-control-sm text-bg-dark fs-4" value="<?=set_value('nom_qcm')?>">
                        </div>
                    </div>
                    
                    <div class="col">
                        <div>
                            <label for="reference" class="form-label text-light fs-4">Domaine d'étude</label>
                        </div>
                        <div>
                            <div class="mb-3">
                                <select class="form-select text-bg-dark fs-4" name="reference" >
                                    <option value="">Selectionner un domaine d'étude</option>
                                <?php foreach($etu as $etu) {?>
                                    <option value="<?php echo $etu['id_etude'] ?>">
                                        <?php echo $etu['designation_etu'] ?>
                                    </option>
                                    <?php }?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div><br>
            <?php
                $i=1;
                while ($i<=10){?>
                    <div class="form-group">
                        <div>
                            <label for="question<?=$i?>" class="form-label text-light fs-4">Question <?=$i?>:</label>
                        </div>
                        <input type="text" name="question<?=$i?>" class="form-control text-bg-dark fs-4" value="<?=set_value('question'.$i)?>">
                    </div><br>
                    <div class="row">
                        <div class="col">
                            <label for="rep1Question<?=$i?>" class="form-label text-light fs-4">Réponse 1 : </label>
                            <div class="input-group">
                                <div class="input-group-text bg-dark bg-gradient">
                                    <input type="radio" name="bonne_repQuestion<?=$i?>" value="reponse1">
                                </div>
                                <input type="text" name="rep1Question<?=$i?>" value="<?=set_value('rep1Question'.$i)?>" class="text-bg-dark bg-gradient fs-4">
                            </div>
                        </div>
                        <div class="col">
                            <label for="rep2Question<?=$i?>" class="form-label text-light fs-4">Réponse 2 : </label>
                            <div class="input-group">
                                <div class="input-group-text bg-dark bg-gradient">
                                    <input type="radio" name="bonne_repQuestion<?=$i?>" value="reponse2">
                                </div>
                                <input type="text" name="rep2Question<?=$i?>" value="<?=set_value('rep2Question'.$i)?>" class="text-bg-dark bg-gradient fs-4">
                            </div>
                        </div><br>
                        <div class="col">
                            <label for="rep3Question<?=$i?>" class="form-label text-light fs-4">Réponse 3 : </label>
                            <div class="input-group">
                                <div class="input-group-text bg-dark bg-gradient">
                                    <input type="radio" name="bonne_repQuestion<?=$i?>" value="reponse3">
                                </div>
                                <input type="text" name="rep3Question<?=$i?>" value="<?=set_value('rep3Question'.$i)?>" class="text-bg-dark bg-gradient fs-4">
                            </div>
                        </div><br>
                    </div><br>
                    <?php $i++;
                }?>
            <br>
            <div class="text-center">
                <a href="/admin/gererqcm" class="text-decoration-none">
                    <button type="button" class="btn btn-danger btn-lg bg-gradient rounded-pill"><i class="bi bi-arrow-return-left"></i> Retour</button>
                </a>
                
                <button type="submit" class="btn btn-dark bg-gradient btn-lg rounded-pill"><i class='bi bi-download'></i> Enregistrer</button>
                
            </div><br>
        </form>
    </div>
    
</div>
