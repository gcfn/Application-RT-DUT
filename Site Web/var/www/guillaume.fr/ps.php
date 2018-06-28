<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Processus</title>
	<link href="style.css" rel="stylesheet" type="text/css">
    </head>

    <body>
        <h1>Processus du système</h1>

<div class="filtre">
<p><h2>Filtre</h2>
<form method="post" action="ps_result.php">
<input type="text" name="filtre">
<input type="submit" value="Envoyer">
</p>
</form>
</div>

<div id="bdd">
	<?php
		$bdd = new PDO('mysql:host=127.0.0.1;dbname=administration', 'root', 'vitrygtr');
		/*if(!$bdd){
			echo "Connexion à la base impossible" . nl2br("\n \n");
		}
		else{
			echo "Connexion à la base réussie" . nl2br("\n \n");
		}*/
		$request = 'SELECT application FROM applications';
		$resultat = $bdd->query($request);
		//récupère les donnees dans un tableau
		$compteur=0;
		while($donnees[$compteur] = $resultat->fetch()){
			//echo $donnees[$compteur]['name'] . nl2br("\n");
			$compteur++;
		}

		//calcule le nombre de resultats
		$nb_resultats= $bdd->query('SELECT COUNT(application) FROM applications')->fetch();
		$nb_resultats = intval($nb_resultats[0]);
		$nb_resultats = (int) $nb_resultats;
		?>

		<h2>Liste des applications de la machine</h2>

		<?php
		
		//affiche les applications contenues dans la table
		for($i=0;$i<$nb_resultats;$i++){
		echo "- ".$donnees[$i][0];
		echo "<br/>";
		$bdd=null;
		}

?>
</div>

    </body>
</html>
