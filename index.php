<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<div class="background">
    <form method="post">
    	<h1>¡Sign Up!</h1>
    	<input type="text" name="Name" placeholder="Name">
    	<input type="email" name="Email" placeholder="Email">
    	<input type="submit" name="register">
    </form>
	</div>
	<?php 
        include("registrar.php");
        ?>
</body>
</html>