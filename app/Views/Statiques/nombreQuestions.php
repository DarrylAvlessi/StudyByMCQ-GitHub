<div class="card container col-lg-5 col-md-6 col-sm-6 col-xs-6 border border-secondary bg-success bg-opacity-25 bg-gradient rounded-3 p-2 mt-5">
    <!-- Card header -->
    <div class="card-header">
        <h5 class="card-title text-light fs-2">Nombre de questions</h5>
    </div>
    <!-- Card body -->
    <div class="card-body display-1">
        <form action="/admin/gererqcm/ajouterQCM" method="post">
            <div class="mb-3 fs-4">
                <label for="nombreQuestion" class="col-form-label text-light">Le nombre de question (10-50) : </label>
                <input type="number" name="nombreQuestion" id="nombreQuestion" min="10" max="50" class="form-control">
            </div>
        
    </div>
    <!-- Card footer -->
    <div class="card-footer">
        <a href="/admin/gererqcm" class="link-light text-decoration-none">
            <button type="button" class="btn btn-danger btn-lg"><i class="bi-arrow-left-circle"></i> Retour</button>
        </a>
        <button type="submit" class="btn btn-success btn-lg"><i class="bi-check-lg"></i> Valider</button>
    </div>
    </form>
</div>
<div class="h-25"></div>