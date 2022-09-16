<?php 
    if(isset($validation)):
?>
    <div class="text-danger">
        <?= $validation->listErrors()?>
    </div>
<?php endif; ?>
<div class="h-25"></div>
<div class="card container border border-secondary bg-success bg-opacity-25 bg-gradient rounded-3 p-2 col-12 mt-5">
    <!-- Card header -->
    <div class="card-header">
        <h5 class="card-title text-light">Ajouter un administrateur</h5>
    </div>
    <!-- Card body -->
    <div class="card-body">
        <form action="/acceder" method="post">
            <div class="mb-3">
                <label for="pseudoAdmin" class="col-form-label text-light">Pseudo : </label>
                <input type="text" name="pseudoAdmin" id="pseudoAdmin" class="form-control text-bg-dark fs-4">
            </div>
            <div class="mb-3">
                <label for="password" class="col-form-label text-light">Mot de passe : </label>
                <input type="password" name="password" id="password" class="form-control text-bg-dark fs-4">
            </div>
        
    </div>
    <!-- Card footer -->
    <div class="card-footer">
        <a href="/accueil" class="link-light text-decoration-none">
            <button type="button" class="btn btn-danger btn-lg"><i class="bi-arrow-left-circle"></i> Retour</button>
        </a>
        <button type="submit" class="btn btn-success btn-lg"><i class="bi-check-lg"></i> Valider</button>
    </div>
    </form>
</div>
<div class="h-25"></div>