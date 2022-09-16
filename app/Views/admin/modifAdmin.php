<?php 
    if(isset($validation)):
?>
    <div class="text-danger">
        <?= $validation->listErrors()?>
    </div>
<?php endif; ?>
<div class="card container-fluid border border-secondary bg-success bg-opacity-25 bg-gradient rounded-3 p-2 col-12 mt-5">
    <!-- Card header -->
    <div class="card-header">
        <h5 class="card-title text-light">Modifier l'administrateur <?=$idAdmin?></h5>
    </div>
    <!-- Card body -->
    <div class="card-body">
        <form action="/admin/gereradministrateur/modifierAdmin/<?=$idAdmin?>" method="post">
            <div class="mb-3">
                <label for="pseudoAdmin" class="col-form-label text-light">Pseudo : </label>
                <input type="text" name="pseudoAdmin" id="pseudoAdmin" class="form-control text-bg-dark fs-4" value="<?=$admins[0]["pseudoAdmin"]?>" required>
            </div>
            <div class="mb-3">
                <label for="nomAdmin" class="col-form-label text-light">Nom : </label>
                <input type="text" name="nomAdmin" id="nomAdmin" class="form-control text-bg-dark fs-4" value="<?=$admins[0]["nom"]?>" required>
            </div>
            <div class="mb-3">
                <label for="prenomAdmin" class="col-form-label text-light">Prenom : </label>
                <input type="text" name="prenomAdmin" id="prenomAdmin" class="form-control text-bg-dark fs-4" value="<?=$admins[0]["prenom"]?>" required>
            </div>
            <div class="mb-3">
                <label for="password" class="col-form-label text-light">Nouveau mot de passe : </label>
                <input type="password" name="password" id="password" class="form-control text-bg-dark fs-4" required>
            </div>
        
    </div>
    <!-- Card footer -->
    <div class="card-footer">
        <a href="/admin/gereradministrateur" class="link-light text-decoration-none">
            <button type="button" class="btn btn-danger btn-lg"><i class="bi-arrow-left-circle"></i> Retour</button>
        </a>
        <button type="submit" class="btn btn-success btn-lg"><i class="bi-check-lg"></i> Valider</button>
    </div>
    </form>
</div>