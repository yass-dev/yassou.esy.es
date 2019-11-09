<form method="post" action="inscription.php">

	<label for="nom">Nom</label>
	<input type="text" name="nom" id="nom" value=""/>

	<label for="prenom">Prénom</label>
	<input type="text" name="prenom" id="prenom" value=""/>

	<label for="email">Adresse email</label>
	<input type="text" name="email" id="email" value=""/>

	<label for="passe">Mot de passe</label>
	<input type="text" name="passe" id="passe" value=""/>

	<label for="sexe">Sexe
	<select name="sexe">
		<option value="1">Homme</option>
		<option value="2">Femme</option>
	</select>

	<input type="submit" name="envoi" value="Envoyer"/>

</form>

include_once 'configuration/configuration.php';

if(isset($_POST) && isset($_POST['nom']) && isset($_POST['prenom']) 
&& isset($_POST['email']) && isset($_POST['passe']) && isset($_POST['sexe'])){

	if(get_magic_quotes_gpc()){
		$_POST['nom'] = stripslashes(trim($_POST['nom']));
		$_POST['prenom'] = stripslashes(trim($_POST['prenom']));
		$_POST['email'] = stripslashes(trim($_POST['email']));
		$_POST['passe'] = stripslashes(trim($_POST['passe']));
		$_POST['sexe'] = stripslashes(trim($_POST['sexe']));
	}


}