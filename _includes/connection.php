<?php
	//Fazendo a conexão com o banco de dados
	$connection = mysqli_connect('localhost','root','');
	if (!$connection) {
	    die('<p style="color: red;">Não foi possível conectar com o banco: '.mysqli_error().'</p>');
	}
	// echo '<p style="color: green;">Conexão bem sucedida</p>';
	if(mysqli_select_db($connection,"CodeBits")!=1){
	    echo "deu ruim<br>";
	}

	# Informa qual o conjunto de caracteres será usado.
	header('Content-Type: text/html; charset=utf-8');
	# Aqui está o segredo
	mysqli_character_set_name($connection);
	if (!mysqli_set_charset($connection, "utf8")) {
	    printf("Error loading character set utf8: %s\n", mysqli_error($connection));
	}
?>