<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/assets/bootstrap-5.2.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/img/bootstrap-icons-1.9.1/bootstrap-icons.css">
</head>
<body class="header">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    
        <header class="bg-light">
            <div class="ms-5">
                <h1 class="ms-5 ms-lg-5">
                    <span class="logo-color">S</span>tudy<span class="logo-color">B</span><span class="logo-ft">y</span><span class="logo-color">M</span><span class="logo-ft">CQ</span>
                </h1>
            </div>
            <nav class="text-bg-dark">
                <div class="container">
                    <ul class="nav navbar d-flex justify-content-between">
                        <a href="accueil" class="link-light text-decoration-none">
                            <li>
                                <button class="btn btn-outline-light border-0">
                                    <i class="bi-house-door fs-3"></i><span class="fs-3"> Accueil</span> 
                                </button>
                            </li>
                        </a>
                        <a href="#" class="link-light text-decoration-none">
                            <li>
                                <button class="btn btn-outline-light border-0">
                                    <i class="bi-justify fs-3"></i><span class="fs-3"> Menu</span>
                                </button>
                            </li>
                        </a>
                        
                        <li>
                            <button class="btn btn-outline-light border-0" data-bs-toggle="modal" data-bs-target="#admin">
                                <i class="bi-person-circle fs-3"></i><span class="fs-3"> Admin</span>
                            </button>
                        </li>
                        <div class="modal fade" id="admin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <!-- Modal header -->
                                    <div class="modal-header">
                                        <h5 class="modal-title text-dark" id="exampleModalLabel">Accéder à l'espace administrateur</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <form>
                                            <div class="mb-3">
                                                <label for="recipient-name" class="col-form-label text-dark">Identifiant : </label>
                                                <input type="text" class="form-control" id="recipient-name" name="idAdmin">
                                            </div>
                                            <div class="mb-3">
                                                <label for="mdp" class="col-form-label text-dark">Mot de passe : </label>
                                                <input type="text" class="form-control" id="mdp" name="mdp">
                                            </div>
                                        </form>
                                    </div>
                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="bi-x-lg"></i> Fermer</button>
                                        <a href="admin/gerer" class="link-light text-decoration-none">
                                            <button type="button" class="btn btn-primary">Soumettre</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </ul>
                </div>
            </nav>
        </header>
    <div class="container-fluid h-100">
        