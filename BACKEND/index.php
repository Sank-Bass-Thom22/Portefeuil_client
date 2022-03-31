<!doctype html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="VIEWS/bootstrap-5.1.3-dist/css/bootstrap.css" rel="stylesheet">

    <title>AUTENTIFICATION</title>
</head>
<body>
<div class="container">
    <h1>Connexion</h1><br />

    <div class="">
    <form method="POST" role="form">
    <div class="alert alert-danger" role="alert">
    <?php  if(isset($_GET['erreur'])) { echo $_GET['erreur'] ; }  ?>
    </div><br />

    <div class="form-group">
    <label>Nom d'utilisateur :</label>
    <input class="form-control" type="text" name="Donnees[username]" id="UserName" placeholder="admin" minlength="2" maxlength="25" required />
    </div>
    <div class="form-group">
    <label>Adresse mail :</label>
    <input class="form-control" type="email" name="Donnees[email]" id="Email" placeholder="example@my-bank.com" maxlength="100" required />
    </div>
    <div class="form-group">
    <label>Mot de passe :</label>
    <input class="form-control" type="password" name="Donnees[password]" id="Password" minlength="8" maxlength="16" required />
    </div><br />

    <button type="submit" name="login" id="Login" class="btn btn-info">Valider</button>
    </form>
    </div>
</div>

    <script src="VIEWS/bootstrap-5.1.3-dist/js/bootstrap.bundle.js" ></script>
</body>
</html>