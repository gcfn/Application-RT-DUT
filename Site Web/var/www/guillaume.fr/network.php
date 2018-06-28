<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Network</title>
	<link href="style.css" rel="stylesheet" type="text/css">
    </head>

    <body>
	<h1>Etat des cartes réseaux</h1>
	<p>
        <?php
	$output = shell_exec('ip addr show');
	echo "<pre>$output</pre>";
	?>  
	
	<!--<h2>Ajout d'une adresse IP</h2>
		<form name="add_ip" action="add_ip.php">
			Nom de la carte <input type="text" name="nom_carte"><br/>
			Nouvelle adresse IP <input type="text" name="new_ip"><br/>
			Préfixe <input type="text" name="prefixe"><br/>
			<input type="submit" name="send_add">
		</form>
	

	<h2>Suppression d'une adresse IP</h2>
		<form name="rm_card" action="rm_ip.php">
		Nom de la carte <input type="text" name="nom_carte"><br/>
		Adresse IP à supprimer <input type="text" name="rm_ip"><br/>
			<input type="submit">
		</form>
-->
	<h2>Modification d'une carte réseau</h2>
		<form method="post" name="modify_card" action="modif_carte.php">
			Nom de la carte à modifier <input class="modif_carte" type="text" name="carte"><br/><br/>
			Adresse IP <input class="modif_carte" type="text" name="ip"><br/><br/>
			Masque de sous-réseau <input class="modif_carte" type="text" name="netmask"><br/><br/>
			Gateway <input class="modif_carte" type="text" name="gateway"><br/><br/>
			<input type="submit" name="send_modify">

		</form>

	<h2>Lancer un DHCLIENT</h2>
		<form method="post" action="dhclient.php">
			Nom de la carte <input type="text" name="carte"> 
			<input type="submit" value = "dhclient">
		</form>

<p>
<?php
$bdd = new PDO('mysql:host=127.0.0.1;dbname=administration', 'root', 'vitrygtr');
		/*if(!$bdd){
			echo "Connexion à la base impossible" . nl2br("\n \n");
		}
		else{
			echo "Connexion à la base réussie" . nl2br("\n \n");
		}*/
		$request = 'SELECT * FROM network';
		$resultat = $bdd->query($request);
		//récupère les donnees dans un tableau
		$compteur=0;
		while($donnees[$compteur] = $resultat->fetch()){
			//echo $donnees[$compteur]['name'] . nl2br("\n");
			$compteur++;
		}

		//calcule le nombre de resultats
		//$nb_resultats= $bdd->query('SELECT COUNT(application) FROM applications')->fetch();
		//$nb_resultats = intval($nb_resultats[0]);
		//$nb_resultats = (int) $nb_resultats;
		?>

		<h2>Configuration stockée dans la base</h2>

		<?php
		
		//echo $donnees[0][2];
		//affiche les applications contenues dans la table
		echo "Carte : ".$donnees[0][1]."<br/><br/>";
		echo "Adresse IP : ".$donnees[0][2]."<br/><br/>";
		echo "Masque de sous-réseau : ".$donnees[0][3]."<br/><br/>";
		echo "Passerelle : ".$donnees[0][4];
		
?>
</p>

	
    </body>
</html>
