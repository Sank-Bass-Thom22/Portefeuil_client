<?php ob_start() ; ?>

    <div class="container">
        <h1>CRÉATION D'UN COMPTE CLIENT</h1><br />

        <div class="">
            <form method="POST" role="form">
                <div class="alert alert-danger" role="alert">
                    <?php  if(isset($_GET['erreur'])) { echo $_GET['erreur'] ; }  ?>
                </div><br />

                <div class="form-group">
                    <label>Prénom(s) :</label>
                    <input class="form-control" type="text" name="Donnees[prenom]" id="Prenom" minlength="2" maxlength="50" required />
                </div>
                <div class="form-group">
                    <label>Nom de famille :</label>
                    <input class="form-control" type="text" name="Donnees[nom]" id="Nom" minlength="2" maxlength="25" required />
                </div>
                <div class="form-group">
                    <label>Date de naissance :</label>
                    <input class="form-control" type="date" name="Donnees[datenaissance]" id="Datenaissance" required />
                </div>
                <div class="form-group">
                    <label>Adresse mail :</label>
                    <input class="form-control" type="email" name="Donnees[email]" id="Email" maxlength="100" required />
                </div>
                <div class="form-group">
                    <label>Numéro de téléphone :</label>
                    <input class="form-control" type="tel" name="Donnees[telephone]" id="Telephone"
                    pattern="[0-9]{3} [0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}" required />
                    <small>Format : 226 70-70-70-70</small>
                </div>
                <div class="form-group">
                    <label>Personne à contacter :</label>
                    <input class="form-control" type="tel" name="Donnees[autretelephone]" id="Autretelephone"
                    pattern="[0-9]{3} [0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}" required />
                    <small>Format : 226 70-70-70-70</small>
                </div>
                <div class="form-group">
                    <label>Type de compte</label>
                    <select name="Donnees[typecompte]" id="Typecompte" class="" required>
                        <option value="Bloquer">Compte bloqué
                        <option value="Courant">Compte courant
                        <option value="Épargne>Compte d'épargne</option>
                    </select>
                </div><br />

                <div class="boutton row">
            <div class="col-3">
        <button type="submit" name="compteclient" id="Compteclient" class="btn btn-info">Valider</button>
</div>
<div class="col-3 offset-3">
        <button type="submit" name="closeSignUp" id="closeSignUp" class="btn btn-secondary"><a href="../CONTROLLERS/rout.php?close="simple">Fermer</a></button>
</div>
        </div>
            </form>
        </div>
    </div>

<?php $content = ob_get_clean() ; ?>

<?php require_once('../VIEWS/simple_admin.php') ; ?>