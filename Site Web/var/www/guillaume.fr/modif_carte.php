<?php
	
//initialise les variables
$carte = $_POST['carte'];
$ip = $_POST['ip'];
$netmask = $_POST['netmask'];
$gateway = $_POST['gateway'];

//sauvegarde les paramètres dans la base
try{
		$bdd = new PDO('mysql:host=127.0.0.1;dbname=administration', 'root', 'vitrygtr');
		if(!$bdd){
			echo "Connexion à la base impossible" . nl2br("\n \n");
		}
		else{
			echo "Connexion à la base réussie" . nl2br("\n \n");
		}
		$request = 'UPDATE network SET carte = "'.$carte.'" WHERE id="192.168.1.25"';
		$bdd->exec($request);
		$request = 'UPDATE network SET ip = "'.$ip.'" WHERE id="192.168.1.25"';
		$bdd->exec($request);
		$request = 'UPDATE network SET netmask = "'.$netmask.'" WHERE id="192.168.1.25"';
		$bdd->exec($request);
		$request = 'UPDATE network SET gateway = "'.$gateway.'" WHERE id="192.168.1.25"';
		$bdd->exec($request);
}
catch(PDOException $e)
    {
    echo $request . "<br>" . $e->getMessage();
    }
$bdd=null;

//réinitialise la conf
shell_exec('sudo ip addr flush dev '.$carte);

//execute le script qui écrit les paramètres dans le fichier interfaces
shell_exec('sudo /home/etudiant/script.sh '.$carte.' '.$ip.' '.$netmask.' '.$gateway);
//shell_exec('sudo ifdown '.$carte);
//shell_exec('sudo ifup '.$carte);

?>

<div class="center">Modification enregistrée !</div>
