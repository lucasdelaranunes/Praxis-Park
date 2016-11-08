<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User</title>

	<!-- CSS Files -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/sidebar.css">

	<!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <script src="js/script.js"></script>
</head>

<body>
	<?php
	require_once('templates/header.php')
	?>
	
	<div class="container">		
		<div class="text-center">
			<span class="glyphicon glyphicon-user" aria-hidden="true" id="usuicon"></span>
		</div>
		<h3 class="text-center" id="usunome">Usuário</h3>
		<h2 class="text-center" id="qrcode">GEH8H5</h2>
		<div class="text-center">
			<div class="text-left">
				<span class="glyphicon glyphicon-map-marker" id="navicon" aria-hidden="true"></span>
			</div>
			<p id="txlocal">BH Shopping</p>
			<p id="txtel">Telefone: (31) 3228-4213</p>
			<p id="txende">BR-356, Belo Horizonte - MG 30320-900</p>
			<h4 id="txdata">Data: 27/10/2016</h4>
			<h4 id="txentrada">Entrada: 15:30</h4>
			<h4 id="txsaida">Saida: 15:55</h4>
			<h1 id="preco">R$ 4,50</h1>
			<a href="payment.php" class="btn btn-primary btn-block" id="criar">Pagar</a>
			<a href="#">Não consigo efetuar o pagamento.</a>
		</div>
	</div>

</body>
</html>