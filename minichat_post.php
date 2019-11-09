<?php
// Connexion à la base de données
try
{
	$bdd = new PDO('mysql:host=mysql.hostinger.fr;dbname=u303503124_chat', 'u303503124_chat', 'yassou');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

// Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare('INSERT INTO minichat (pseudo, message) VALUES(?, ?)');
$req->execute(array($_POST['pseudo'], $_POST['message']));

// Redirection du visiteur vers la page du minichat
header('Location: minichat.php');
?>