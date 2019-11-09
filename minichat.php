<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
    <head><meta charset="utf-8">
        <title>Mini-chat</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <link rel="stylesheet" href="css/style_chat.css"/>
    </head>
    <style type="text/css">
    form
    {
        text-align:center;
    }
    </style>
    <body><header><center><h1>Bienvenue sur le site de Yassine</h1></center>

        <nav>

            <ul>
                
                <li class="musique"><a href="musique.html">musique</a></li>
                <li class="chat"><a href="minichat.php">chat</a></li>
                <li class="telechargement"><a href="download.html">téléchargement</a></li>
            </ul>
    
        </nav>  

    </header>
    <form action="minichat_post.php" method="post">
        <p>
        <label for="pseudo">Pseudo</label> : <input type="text" name="pseudo" id="pseudo" /><br />
        <label for="message">Message</label> :  <input type="textarea" name="message" id="message" rows="8" cols="45" /><br />

        <input type="submit" value="Envoyer" />
	</p>
    </form>

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

// Récupération des 10 derniers messages
$reponse = $bdd->query('SELECT pseudo, message FROM minichat ORDER BY ID DESC LIMIT 0, 10');

// Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
while ($donnees = $reponse->fetch())
{
	echo '<p><strong>' . htmlspecialchars($donnees['pseudo']) . '</strong> : ' . htmlspecialchars($donnees['message']) . '</p>';
}

$reponse->closeCursor();

?>
    </body>
</html>