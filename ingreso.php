<?php
//include("connect_db.php");

//$miconexion = new connect_db;


    session_start();
	require("connect_db.php");

	$username=$_POST['mail'];
	$pass=$_POST['pass'];


	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	$sql2=mysqli_query($mysqli,"SELECT * FROM login WHERE email='$username'");
	if($f2=mysqli_fetch_assoc($sql2)){
		if($pass==$f2['pasadmin']){
			$_SESSION['id_usuario']=$f2['id_usuario'];
			$_SESSION['user']=$f2['user'];
			$_SESSION['rol']=$f2['rol'];

			echo '<script>alert("HOLA ENTRENADOR")</script> ';
			echo "<script>location.href='index-entrenador.php'</script>";
		
		}
	}


	$sql=mysqli_query($mysqli,"SELECT * FROM login WHERE email='$username'");
	if($f=mysqli_fetch_assoc($sql)){
		if($pass==$f['password']){
			$_SESSION['id_usuario']=$f['id_usuario'];
			$_SESSION['user']=$f['user'];
			$_SESSION['rol']=$f['rol'];


			echo '<script>alert("HOLA DEPORTISTA")</script> ';
			
			echo "<script>location.href='index-deportista.php'</script>";
		}else{
			echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
		
			echo "<script>location.href='index.php'</script>";
		}
	}else{
		
		echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';
		
		echo "<script>location.href='ingresodeusuario.php'</script>";	

	}

?>