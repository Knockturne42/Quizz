<?php

include_once 'requete.php';
include_once 'session.php';

$columnArray = array('pseudoUtilisateur', 'idUtilisateur');
$valueArray = array('pseudoUtilisateur LIKE "'.$_POST['pseudoUtilisateur'].'"', 'AND passwordUtilisateur LIKE "'.$_POST['passwordUtilisateur'].'"');
$condition = ' pseudoUtilisateur LIKE "'.$_POST['pseudoUtilisateur'].'"'.' AND passwordUtilisateur LIKE "'.$_POST['passwordUtilisateur'].'" ';

$test = new requete($columnArray, $valueArray, 'utilisateur', '', $condition);

$test->selectDb();
$_SESSION['utilisateur'] = $test->queryDb->fetch();
if ($_SESSION['utilisateur']) {
	header('location: ../index.php');
}

?>