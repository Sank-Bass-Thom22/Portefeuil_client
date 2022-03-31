<?php
session_start() ;

if(isset($_POST['login'])){
    require_once('../MODELS/administrateurC.php') ;
    require_once('../MODELS/administrateurM.php') ;

    $Donnees = $_POST['Donnees'] ;

    foreach($Donnees as $key => $value){
        $Donnees[$key] = htmlspecialchars(strip_tags(trim($value))) ;
    }

    $adminC = new AdminC($Donnees) ;
    $erreur = $adminC->getErreur() ;
    if($erreur != ""){
        header('LOCATION: ../index.php?erreur=' . $erreur) ;
        exit ;
    }

    $adminM = new AdminM() ;
    $resultat = $adminM->Sign_in($adminC) ;
        }
    }
}
