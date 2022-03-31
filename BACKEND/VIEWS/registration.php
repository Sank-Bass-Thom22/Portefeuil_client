<?php ob_start() ; ?>

<div class="container">
    <h1>CRÉATION D'UN COMPTE ADMINISTRATEUR</h1><br />

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

        <div class="boutton row">
            <div class="col-3">
        <button type="submit" name="register" id="Register" class="btn btn-info">Valider</button>
</div>
<div class="col-3 offset-3">
        <button type="submit" name="closeSignUp" id="closeSignUp" class="btn btn-secondary"><a href="../CONTROLLERS/rout.php?close=super">Fermer</a></button>
</div>
        </div>
    </form>
    </div>
</div>

<?php $content = ob_get_clean() ; ?>

<?php require_once('../VIEWS/super_admin.php') ; ?>