<form action="/qcm/score" method="post">
    <?php
        for($i=0;$i<10;$i++)
        {
    ?>
        <div class="ms-5">
            <div class="ms-5 fs-1 fw-bolder text-light">
                Question <?=$i+1?>
                <div class="me-5">
                    <hr>
                </div>
            </div>
            <div class="ms-5 fs-3 fw-bold text-light">
                <div><?=$question[$i]["question"]?></div>
            </div>
            <div class="ms-5 fs-3 text-light my-4">
                <div>
                    <label for="rep1<?=$i?>" class="btn btn-lg btn-success bg-gradient">
                        <input type="radio" name="bonne_repQuestion<?=$i?>" id="rep1<?=$i?>" value="reponse1" class="mx-2" required>
                        <?=htmlspecialchars($question[$i]["reponse1"])?>
                    </label>
                </div><br>
                <div>
                    <label for="rep2<?=$i?>" class="btn btn-warning text-white btn-lg bg-gradient">
                        <input type="radio" name="bonne_repQuestion<?=$i?>" id="rep2<?=$i?>" value="reponse2" class="mx-2" required>
                        <?=htmlspecialchars($question[$i]["reponse2"])?>
                    </label>
                </div><br>
                <div>
                    <label for="rep3<?=$i?>" class="btn btn-danger btn-lg bg-gradient"><input type="radio" name="bonne_repQuestion<?=$i?>" id="rep3<?=$i?>" value="reponse3" class="mx-2" required><?=htmlspecialchars($question[$i]["reponse3"])?></label>
                </div><br>
                
                <div class="me-5">
                    <hr>
                </div>
            </div>
        </div>
    <?php }?>
    <div class="text-center">
        <button type="reset" class="btn btn-lg btn-warning fs-2 rounded-3 text-white">Réinitialiser</button>
        <button class="rounded-3 btn btn-lg btn-success fs-2">Valider</button>
    </div>
</form>