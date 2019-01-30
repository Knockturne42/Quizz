<?php
	include '../controller/formulaire.php';
	?>
	<div id="signIn" class="card w-25">
		<h3 class="card-header">Inscription</h3>
	<?php
	$arrayInpName = array('pseudoUtilisateur', 'passwordUtilisateur', 'adresseEmailUtilisateur', 'submitSignUp');
	$arrayInptype = array('text', 'password', 'text', 'submit');
	$arrayValueInput = array('Pseudo', 'Mot de passe', 'email', 'S\'inscrire');
	$arrayClassesInput = array('card-item', 'card-item', 'card-item', 'card-item');
	$tryForm = new formulaire('signUp.php', 'post', 'signUpForm', $arrayInpName, $arrayInptype, $arrayValueInput, $arrayClassesInput);
	$tryForm->displayForm();
	?>
	</div>
	<div id="signUp" class="card w-25">
		<h3 class="card-header">Connexion</h3>
	<?php
	$arrayInpName = array('pseudoUtilisateur', 'passwordUtilisateur', 'submitSignIn');
	$arrayInptype = array('text', 'password','submit');
	$arrayValueInput = array('Pseudo', 'Mot de passe', 'Se connecter');
	$arrayClassesInput = array('card-item', 'card-item', 'card-item');
	$tryForm = new formulaire('signIn.php', 'post', 'signInForm', $arrayInpName, $arrayInptype, $arrayValueInput, $arrayClassesInput);
	$tryForm->displayForm();
	?>
	</div>