<?php

$patern = "/([^a-cA-C1-3\s])/";
$chaine = "Bacca31";
preg_match($patern, $chaine, $result);

if(empty($result)){
    echo "C'est bon!";
}else{
    echo "Ce n'est pas bon!<br />";
	var_dump($result);
}

exit;

$patern = "#([^a-z0-9@.\s])#";
$chaine = "ouedraogo.emanuel@gmail.com";
preg_match($patern, $chaine, $result);

if(empty($result)){
    echo "Adresse valide";
}else{
    echo "Adresse non valide";
}
exit;
$patern = "/([^a-zA-Z0-9\s])/";
$chaine = "admin1admin";
preg_match($patern, $chaine, $result);

if(empty($result)){
    echo "C'est bon!";
}else{
    echo "Ce n'est pas bon!";
}