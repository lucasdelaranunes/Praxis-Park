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

	<!-- Libs -->
    <script src="js/lib/jquery.js"></script>
	<script src="js/lib/bootstrap.min.js"></script>

	<!-- App's JavaScript -->
	<script src="js/header.js"></script>
    <script src="js/side-menu.js"></script>
</head>
<body>
	<?php
	require_once('templates/header.php')
	?>

	<div class="container">		
		<div class="row text-center">
			<p id="label-data"><h4>Dados de pagamento</h4></p>
				
			<div class="payment-data">
				<div class="col-xs-6">
					<p class="label-title">Total</p>
					<p class="label-simple">Data: 27/10/2016</p>
					<p class="label-simple">Horário 00:25</p>
				</div>
				<div class="col-xs-6">
					<p id="payment-value">R$ 4,50</p>
				</div>
			</div>
		</div>

		<div class="payment-result text-center">
			<img src="img/payment-succes.png" id="succes-logo">
			<p>Pagamento realizado com sucesso</p>
		</div>

		<div class="payment-buttons">
			<button class="btn btn btn-primary btn-block">Enviar comprovante por e-mail</button>
		<!-- 	<button class="btn btn btn-primary btn-block">
				Sair
			</button> -->
			<a href="login.html" class="btn btn-primary btn-block">Sair</a>
		</div>
	</div>
</body>
</html>