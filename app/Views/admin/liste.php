<br><br><br>        
        <div class="row">
            <div class="col">
                <h1 class="text-light">Liste des QCM</h1>
            </div>
            <div class="col text-end">
                <a href="/admin/gererqcm/ajouterQCM">
                    <button class="btn btn-success rounded-pill bg-gradient" name="ajout">
                        <i class="bi bi-plus"></i> Ajouter
                    </button>
                </a>
                <a href="/admin/gereradministrateur">
                    <button class="btn btn-secondary rounded-pill bg-gradient" name="ajout">
                        <i class="bi bi-gear"></i> Gerer les administrateurs
                    </button>
                </a>
            </div>
        </div>
            
        <table class="table table-striped table-dark table-bordered table-responsive">
            <thead class="thead-inverse">
                <tr>
                    <th>id</th>
                    <th>Nom du QCM</th>
                    <th>Domaine d'étude</th>
                    <th class="text-end text-center">Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($qcm as $q){?>
                    <tr>
                        <td scope="row"><?php echo $q['id_qcm'] ?></td>
                        <td><?php echo $q['designation'] ?></td>
                        <td><?php echo $q['detu'] ?></td>
                        <td class="text-end text-center">
                            <a href="<?php echo base_url().'/admin/gererqcm/modifierQCM/'.$q['id_qcm']?>" class="text-decoration-none">
                                <button class="btn btn-primary rounded-pill bg-gradient col-3">
                                    <i class="bi bi-pencil"></i> Modifier
                                </button><?php echo '  ';?>
                            </a>
                            <a href="<?php echo base_url().'/admin/gererqcm/confirmersuppression/'.$q['id_qcm']?>">
                                <button class="btn btn-danger rounded-pill bg-gradient col-3">
                                    <i class="bi bi-trash"></i> Supprimer
                                </button>
                            </a>
                        </td>
                    </tr>
                    <?php }?>
                    
                </tbody>
        </table>
        