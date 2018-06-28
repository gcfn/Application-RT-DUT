<html>
	<head>
        <meta charset="utf-8" />
        <title>Dhclient</title>
	<link href="style.css" rel="stylesheet" type="text/css">
    </head>

<?php
$carte = $_POST['carte'];
shell_exec('sudo ip addr flush dev '.$carte);
shell_exec('sudo dhclient '.$carte);



	$bdd = new PDO('mysql:host=127.0.0.1;dbname=administration', 'root', 'vitrygtr');
	$request = 'UPDATE network SET ip = "'."dhcp".'" WHERE id="192.168.1.25"';
	$bdd->exec($request);
	$request = 'UPDATE network SET netmask = "'."dhcp".'" WHERE id="192.168.1.25"';
	$bdd->exec($request);
	$request = 'UPDATE network SET gateway = "'."dhcp".'" WHERE id="192.168.1.25"';
	$bdd->exec($request);
?>
<div class="center">
	Dhclient réussi !
</div>


</html>
