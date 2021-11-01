<?php 


$conex = mysqli_connect ( "localhost" , "root" , "root" , "registro" );

if (isset($_POST['register'])) {
    if (strlen (isset($_POST['Name'])) >= 1 && strlen($_POST['Email']) >= 1) {
	    $name = trim($_POST['Name']);
	    $email = trim($_POST['Email']);
	    $fechareg = date("d/m/y");
	    $consulta = "INSERT INTO datos(Name,  Email,  fecha_reg) VALUES ('$name', '$email', '$fechareg')"; 
	    $resultado = mysqli_query($conex, $consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has registrado correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>