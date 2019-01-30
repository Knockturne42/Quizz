<?php

include_once '../modele/requete.php';


var_dump($_POST);
$columnArray = array('pseudoUtilisateur', 'adresseEmailUtilisateur', 'numeroUtilisateur', 'passwordUtilisateur', 'dateInscriptionUtilisateur', 'roleUtilisateur');
$valueArray = array($_POST['pseudoUtilisateur'], $_POST['adresseEmailUtilisateur'], $_POST['numeroUtilisateur'], $_POST['passwordUtilisateur'], date("Y-m-d H:i:s"), 1);
var_dump($valueArray);
$conditionArray = '';

$test = new requete($dbConnectionArray, $columnArray, $valueArray, 'utilisateur', '');

$test->insertDb();

?>