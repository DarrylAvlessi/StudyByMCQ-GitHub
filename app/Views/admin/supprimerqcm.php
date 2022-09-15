<div class="container text-center">
    <img src="/assets/img/delete.gif" class="rounded mx-auto mt-3 mb-4 d-block w-25">
    <div class="display-6 font-monospace text-light">Êtes-vous sûr de vouloir supprimer ce QCM?</div>
</div><br>
<form action="/admin/gererqcm/supprimerqcm/<?=$id_qcm?>" class="form" method="post">
    <div class="text-end mx-5 my-5">
        <a href="/admin/gererqcm/"><button type="button" class="btn btn-danger bg-gradient btn-lg rounded-pill"><i class="bi-x-lg"></i> Non</button></a>
        <button type="submit" class="btn btn-success bg-gradient btn-lg rounded-pill" name="delete"><i class="bi bi-check-lg"></i> Oui</button>
    </div>
</form>