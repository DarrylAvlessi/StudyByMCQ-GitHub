<div class="card container-fluid border border-secondary bg-success bg-opacity-25 bg-gradient rounded-3 p-2 col-12 mt-5">
    <!-- Card header -->
    <div class="card-header">
        <h5 class="card-title text-light">Ajouter un administrateur</h5>
    </div>
    <!-- Card body -->
    <div class="card-body">
        <form action="/admin/gerer/ajouterAdmin" method="post">
            <div class="mb-3">
                <label for="pseudoAdmin" class="col-form-label text-light">Pseudo : </label>
                <input type="text" name="pseudoAdmin" id="pseudoAdmin" class="form-control text-bg-dark fs-4">
            </div>
            <div class="mb-3">
                <label for="nomAdmin" class="col-form-label text-light">Nom : </label>
                <input type="text" name="nomAdmin" id="nomAdmin" class="form-control text-bg-dark fs-4">
            </div>
            <div class="mb-3">
                <label for="prenomAdmin" class="col-form-label text-light">Prenom : </label>
                <input type="text" name="prenomAdmin" id="prenomAdmin" class="form-control text-bg-dark fs-4">
            </div>
            <div class="mb-3">
                <label for="mdp" class="col-form-label text-light">Mot de passe : </label>
                <input type="password" name="mdp" id="mdp" class="form-control text-bg-dark fs-4">
            </div>
        
    </div>
    <!-- Card footer -->
    <div class="card-footer">
        <a href="/admin/gerer" class="link-light text-decoration-none">
            <button type="button" class="btn btn-danger"><i class="bi-arrow-left-circle"></i> Retour</button>
        </a>
        <button type="submit" class="btn btn-success">Valider</button>
    </div>
    </form>
</div>