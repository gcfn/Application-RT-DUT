<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Ports ouverts</title>
	<link href="style.css" rel="stylesheet" type="text/css">
    </head>

    <body>
	<h1>Liste des ports ouverts</h1>

	<?php
	$output = shell_exec('netstat -tunap');
	echo "<pre>$output</pre>";
	?> 
    
    </body>
</html>
