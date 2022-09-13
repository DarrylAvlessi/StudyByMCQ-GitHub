<?php 
    if(isset($validation)):
?>
    <div class="text-danger">
        <?= $validation->listErrors()?>
    </div>
<?php endif; ?>

<div class="container-fluid border border-secondary bg-secondary bg-opacity-25 bg-gradient rounded-3 p-2 col-12" >
    <div class="text-center">
        <h3 class="fs-1 text-light">Modifier les questions</h3>
    </div><br>
    <div class="container">
        <form action="/admin/gerer/modifierQCM/<?=$id_qcm?>" method="post" class="form">
            <?php
                $i=1;
                while ($i<=10){?>
                    <div class="form-group">
                        <div>
                            <label for="question<?=$i?>" class="form-label text-light">Question <?=$i?>:</label>
                        </div>
                        <input type="text" name="question<?=$i?>" class="form-control text-bg-dark" value="<?=$questions[$i-1]["question"]?>">
                    </div><br>
                    <div class="row">
                        <div class="col">
                            <label for="rep1Question<?=$i?>" class="form-label text-light">Réponse 1 : </label>
                            <div class="input-group">
                                <div class="input-group-text bg-dark bg-gradient">
                                    <input type="radio" name="bonne_repQuestion<?=$i?>" value="reponse1">
                                </div>
                                <input type="text" class="text-bg-dark bg-gradient" name="rep1Question<?=$i?>" value="<?=$questions[$i-1]["reponse1"]?>">
                            </div>
                        </div>
                        <div class="col">
                            <label for="rep2Question<?=$i?>" class="form-label text-light">Réponse 2 : </label>
                            <div class="input-group">
                                <div class="input-group-text bg-dark bg-gradient">
                                    <input type="radio" name="bonne_repQuestion<?=$i?>" value="reponse2">
                                </div>
                                <input type="text" class="text-bg-dark bg-gradient" name="rep2Question<?=$i?>" value="<?=$questions[$i-1]["reponse2"]?>">
                            </div>
                        </div><br>
                        <div class="col">
                            <label for="rep3Question<?=$i?>" class="form-label text-light">Réponse 3 : </label>
                            <div class="input-group">
                                <div class="input-group-text bg-dark bg-gradient">
                                    <input type="radio" name="bonne_repQuestion<?=$i?>" value="reponse3">
                                </div>
                                <input type="text" class="text-bg-dark bg-gradient" name="rep3Question<?=$i?>" value="<?=$questions[$i-1]["reponse3"]?>">
                            </div>
                        </div><br>
                    </div><br>
                    <?php $i++;
                }?>
            <br>
            <div class="text-center">
                <a href="/admin/gerer" class="text-decoration-none">
                    <button type="button" class="btn btn-danger bg-gradient px-5 rounded-pill"><i class="bi bi-arrow-return-left"></i> Retour</button>
                </a>
                
                <button type="submit" class="btn btn-dark bg-gradient rounded-pill"><i class='bi bi-pencil'></i> Enregistrer les modifications</button>
                
            </div><br>
        </form>
    </div>
    
</div><br><br><br><br>
