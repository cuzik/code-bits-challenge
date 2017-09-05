<!DOCTYPE html>
<html lang="pr-br">
<head>
	<meta charset="UTF-8">
	
	<title>Home</title>
	<link type="text/css" rel="stylesheet" href="_assets/_css/materialize.min.css"  media="screen,projection"/>
	<link type="text/css" rel="stylesheet" href="_assets/_css/style.css"  media="screen,projection"/>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
	<?php require_once "_includes/connection.php"; ?>
	<?php
		$data = [];
		$result = mysqli_query($connection,'SELECT * FROM archive WHERE user_cod = 1');
		while ($row = mysqli_fetch_array($result,2)){
			$data[] = array("cod" => $row[0], "name" => $row[1]);
		}
	?>
	<headar>
		<nav class="grey darken-4">
			<div class="nav-wrapper">
				<a href="_files/../" class="brand-logo center">Code Bits</a>
				<ul id="nav-mobile" class="right hide-on-med-and-down"">
					<li>
						<a href="#">Arquivos</a>
					</li>
				</ul>
			</div>
		</nav>
	</headar>
	<main class="grey lighten-3">
		<div class="row">
			<div class="col s12">
				<ul class="collection with-header">
					<li class="collection-header center-align"><h4>Arquivos Salvos</h4></li>
				<?php foreach($data as $item) { ?>
					<li class="collection-item">
						<div>
							<?php echo $item["name"]; ?>
							<a <?php echo "href=index.php?cod_arc=".$item["cod"]; ?> class="secondary-content modal-trigger">
								<i class="material-icons">open_in_new</i>
							</a>
						</div>
					</li>
				<?php } ?>
				</ul>
			</div>
		</div>
	</main>
	<footer class="page-footer grey darken-4">
		<div class="container">
		</div>
		<div class="footer-copyright">
			<div class="container">
				© CarlosCuzik
			</div>
		</div>
	</footer>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="_assets/_js/materialize.min.js"></script>
</body>
</html>