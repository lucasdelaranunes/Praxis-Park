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
    <script src="js/lib/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/lib/bootstrap.min.js"></script>

    <!-- Font Awesome's CDN -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    
    <!-- App's JavaScript -->
    <script src="js/side-menu.js"></script>
    <script src="js/user.js"></script>

</head>

<body onload="userSession();">

	<?php
	require_once('templates/header.php');
	?>
	
	<div class="container">		
		<div class="row">
			<div class="col-xs-12 text-center">
				<i class="fa fa-user-circle-o fa-5x" aria-hidden="true"></i>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 text-center">
				<h2 class="text-center" id="usunome">Username</h3>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 text-center">
				<h3 class="text-center" id="qrcode">GEH8H5</h2>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-2">
				<i class="fa fa-map-marker fa-5x" aria-hidden="true"></i>
			</div>
			
			<div class="col-xs-10">	
				<address>
					<a id="txlocal"><strong>BH Shopping</strong></a><br>
					<a id="txende">BR-356, Belo Horizonte</a><br>
					<a id="txestado">MG - 30320-900</a><br>
					<a id="txtel">(31) 3228-4213</a><br>
				</address>
			</div>
		</div>
			
		<div class="row">
			<div class="col-xs-12 text-center">
				<h4 id="txdata">27/10/2016</h4>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-6 text-center">
				<h4 id="txentrada">Entrada: 15:30</h4>
			</div>

			<div class="col-xs-6 text-center">
				<h4 id="txsaida">Saida: 15:55</h4>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 text-center">
				<h1 id="preco">R$ 4,50</h1>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12">
				<a href="payment.php" class="btn btn-primary btn-block" id="criar">Pagar</a>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 text-center">
			 	<a href="#">Não consigo efetuar o pagamento.</a>
			</div>
		</div>

	</div>

</body>
</html>