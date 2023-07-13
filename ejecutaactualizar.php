<?php

    extract($_POST);	//extraer todos los valores del metodo post del formulario de actualizar
	require("connect_db.php");
	$sentencia="update login set comentario='$comentario'  where id_usuario='$id'";
	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	$resent=mysqli_query($mysqli,$sentencia);
	if ($resent==null) {
		
		echo '<script>alert("ERROR EN PROCESAMIENTO NO SE ACTUALIZARON LOS DATOS")</script> ';
		header("location:index-entrenador.php");
		
		echo "<script>location.href='index-entrenador.php'</script>";
	}else {
		echo '<script>alert("COMENTARIO ENVIADO")</script> ';
		
		echo "<script>location.href='vervideo.php'</script>";
	}

?>