<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>TCP DUMP</title>
	<link href="style.css" rel="stylesheet" type="text/css">
    </head>

    <body>
	<?php
	$nb_captures = $_POST['nb_captures'];
	$carte = $_POST['carte'];
	$output = shell_exec('sudo tcpdump -i '.$carte.' -c '.$nb_captures);
	echo "<pre>$output</pre>";
	?>     


    </body>
</html>
