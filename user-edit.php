<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pagamento</title>

	<!-- CSS Files -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/sidebar.css">

	<!-- jQuery -->
    <script src="js/lib/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/lib/bootstrap.min.js"></script>
    <script src="js/user.js"></script>
    <script src="js/side-menu.js"></script>
</head>
<body onload="userSession();">
	<?php
	require_once('templates/header.php')
	?>
	<div class="container">		
		<!-- Aqui fica o conteudo -->
		<div class="col-xs-4">
			<a href="user.html" class="glyphicon glyphicon-chevron-left" aria-hidden="true" id="voltar"></a>
		</div>
		<div class="col-xs-4">
			<h4 class="text-center">Editar Dados</h4>
		</div>
		<div class="col-xs-4">
			<img src="img/logo.png" id="image-logocad">
		</div>
		<div class="form-group">
			<label for="card-number">Nova senha</label>
			<input type="password" class="form-control" id="password" placeholder="6-10 Caracteres">
		</div>
		<div class="form-group">
			<label for="card-number">Confirmação de nova senha</label>
			<input type="password" class="form-control" id="passwordconfirm" placeholder="6-10 Caracteres">
		</div>
		<div class="form-group">
			<label for="card-number">Trocar email</label>
			<input type="email" class="form-control" id="Email" placeholder="exemplo@exemplo.com">
		</div>
		<div class="form-group">
			<label for="card-number">Trocar número de Celular</label>
			<input type="tel" class="form-control" id="celnumber" placeholder="(00) 00000-0000">
		</div>

		<a href="user.html" class="btn btn-primary btn-block" id="criar">Modificar</a>
	</div>
</body>
</html>