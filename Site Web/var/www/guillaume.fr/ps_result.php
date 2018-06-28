<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Processus</title>
	<link href="style.css" rel="stylesheet" type="text/css">
    </head>

    <body>
	<!-- <p>PID <form action="kill.php"><input type="text" name="pid"><input type="submit" name="send_pid" value="kill"></form></p>-->

	<table>
		<?php 
		//entete
		$output = shell_exec('ps aux | head -1 | tail -1');
		echo "<tr><td><pre>$output</pre></td>";
		
		//affichage de tous les résultats ligne par ligne
		$nb_resultats = shell_exec('ps aux | wc -l');
		for($i=2;$i<$nb_resultats-1;$i++){
			if(isset($_POST['filtre'])){ //s'il y a un filtre, grep $filtre
				$filtre = $_POST['filtre'];
				$output = shell_exec('ps aux | grep '.$filtre.' | head -'.$i.' | tail -1');
			}
			else{ //si le champ filtre est vide, on affiche ps aux sans filtre
				$output = shell_exec('ps aux | head -'.$i.' | tail -1');
			}
			
			echo "<tr><td><pre>$output</pre></td>"; //affichage du résultat
		}
		?>



		<!--<?php $output = shell_exec('ps aux | head -1 | tail -1');
		echo "<tr><td><pre>$output</pre></td>";
		echo "<td><form action='kill.php'> <input type='submit' name='kill' value='kill'></td></tr>"
		?>
		<?php $output = shell_exec('ps aux | head -2 | tail -1'); echo "<tr><td><pre>$output</pre></td></tr>"?>-->
	</table>



    <?php
	/*if($_GET['filtre'] -eq 'null'){
	    $filtre = '';
	}
	else{
	    $filtre = $_GET['filtre'];
	}
        $output = shell_exec('ps aux | grep '.$filtre);
        echo "<pre>$output</pre>";*/

	/*$output = shell_exec('ps aux | head -5 | tail -1');
        echo "<pre>$output</pre>";*/



?>
    </body>
</html>
