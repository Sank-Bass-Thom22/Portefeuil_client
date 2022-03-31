<!doctype html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="bootstrap-5.1.3-dist/css/bootstrap.css" rel="stylesheet">

    <!-- Style CSS supplémentaire -->
    <link href="bootstrap-5.1.3-dist/css/presentation.css" rel="stylesheet">

    <title>DASHBOARD</title>
</head>
<body>
    <div class="container">
        <h1>Menu Principal</h1><br />

        <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">Compte</button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="#">Explorer</a></li>
            <li><a class="dropdown-item" href="../VIEWS/compte_client.php">Ouvrir un compte client</a></li>
        </ul>
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">Gestion</button>
        <ul class="dropdown-menu multi" aria-labelledby="dropdownMenuButton2">
            <li class="dropdown-submenu">
                <a class="dropdown-item dropdown-toggle" id="dropdownSousmenuButton2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Transactions</a>
                <ul class="dropdown-menu" aria-labelledby="dropdownSousmenuButton2">
                    <li>
                <form method="POST" role="form">
                    <div class="form-group">
                <label>Zone de recherche</label>
                <input type="search" class="form-control" placeholder="Rechercher avec le numéro de compte : " name="numero_de_compte" id="NDC" />
</div>
                <button class="btn btn-outline-success" type="submit">Rechercher</button>
                </form>
</li>
</ul>
                </li>
            <li class="dropdown-submenu">
            <a class="dropdown-item dropdown-toggle" id="dropdownSousmenuButton2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Services</a>
            <ul class="dropdown-menu" aria-labelledby="dropdownSousmenuButton2">
                <li><a class="dropdown-item" href="#">Assurances</a></li>
                <li><a class="dropdown-item" href="#">Prêts banquaire</a></li>
                </ul>
</li>
        </ul>
        </div>

        <div class="">
            <div class="">
                <?php if(isset($content)){echo $content ;} ?>
            </div>
        </div>
    </div>

<script src="bootstrap-5.1.3-dist/js/bootstrap.bundle.js" ></script>
<script src="bootstrap-5.1.3-dist/js/menu_deroulant.js"></script>
</body>
</html>