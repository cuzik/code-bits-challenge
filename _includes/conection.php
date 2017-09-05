<?php
	//Fazendo a conexão com o banco de dados
	$conection = mysqli_connect('localhost','root','');
	if (!$conection) {
	    die('<p style="color: red;">Não foi possível conectar com o banco: '.mysqli_error().'</p>');
	}
	// echo '<p style="color: green;">Conexão bem sucedida</p>';
	if(mysqli_select_db($conection,"TCC_SYSTEM")!=1){
	    echo "deu ruim<br>";
	}

	# Informa qual o conjunto de caracteres será usado.
	header('Content-Type: text/html; charset=utf-8');
	# Aqui está o segredo
	mysqli_character_set_name($conection);
	if (!mysqli_set_charset($conection, "utf8")) {
	    printf("Error loading character set utf8: %s\n", mysqli_error($conection));
	}
?>