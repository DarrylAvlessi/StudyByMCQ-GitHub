<br><br><br>
<div class="row">
    <div class="col">
        <h1 class="text-light">Liste des Administrateurs</h1>
    </div>
    <div class="col text-end">
        <a href="/admin/gereradministrateur/ajouterAdmin">
            <button class="btn btn-success rounded-pill bg-gradient" name="ajout">
                <i class="bi bi-plus"></i> Ajouter
            </button>
        </a>
        <a href="/admin/gererqcm">
            <button class="btn btn-secondary rounded-pill bg-gradient" name="ajout">
                <i class="bi bi-gear"></i> Gerer les QCM
            </button>
        </a>
    </div>
</div>
            
        <table class="table table-striped table-dark table-bordered table-responsive">
            <thead class="thead-inverse">
                <tr>
                    <th>Pseudo</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th class="text-end text-center">Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($admin as $adm){?>
                    <tr>
                        <td scope="row"><?php echo $adm['pseudoAdmin'] ?></td>
                        <td><?php echo $adm['nom'] ?></td>
                        <td><?php echo $adm['prenom'] ?></td>
                        <td class="text-end text-center">
                            <a href="<?php echo base_url().'/admin/gereradministrateur/confirmersuppression/'.$adm['idAdmin']?>">
                                <button class="btn btn-danger rounded-pill bg-gradient">
                                    <i class="bi bi-trash"></i> Supprimer
                                </button>
                            </a>
                        </td>
                    </tr>
                    <?php }?>
                    
                </tbody>
        </table>