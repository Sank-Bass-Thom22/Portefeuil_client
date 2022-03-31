<!doctype html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="bootstrap-5.1.3-dist/css/bootstrap.css" rel="stylesheet">

    <!-- Style CSS supplémentaire -->
    <link href="presentation.css" rel="stylesheet">

    <title>DASHBOARD</title>
</head>
<body>

    <div class="container">

        <div class="row">
        <div class="menuderoulant col-4 dropdown">
        <h1>Menu Principal</h1><br />
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">Compte</button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="#">Explorer</a></li>
            <li><a class="dropdown-item" href="../VIEWS/registration.php">Nommer un administrateur</a></li>
        </ul><br /><br />
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">Gestion</button>
        <ul class="dropdown-menu multi" aria-labelledby="dropdownMenuButton2">
            <li class="dropdown-submenu">
                <a class="dropdown-item dropdown-toggle" id="dropdownSousmenuButton2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Compte client</a>
                <ul class="dropdown-menu" aria-labelledby="dropdownSousmenuButton2">
                <li><a class="dropdown-item" href="#">Explorer</a></li>
                <li><a class="dropdown-item" href="#">Statistiques</a></li>
                </ul>
            </li>
            <li class="dropdown-submenu">
            <a class="dropdown-item dropdown-toggle" id="dropdownSousmenuButton2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Gestion interne</a>
                
</li>
        </ul><br /><br />
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false">Fonctions avancés</button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
            <li><a class="dropdown-item" href="#">Activités</a></li>
        </ul>
        </div>
        
        <div class="col-6 offset-2">
            <div class="">
                <?php if(isset($content)){echo $content ;} ?>
            </div>
        </div>
</div>
    </div>

<script src="bootstrap-5.1.3-dist/js/bootstrap.bundle.js" ></script>
<script src="bootstrap-5.1.3-dist/js/menu_deroulant.js"></script>
</body>
</html>