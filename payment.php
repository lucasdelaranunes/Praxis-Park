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
    <script src="js/lib/bootstrap.min.js"></script>

	<!-- App's JavaScript -->
    <script src="js/header.js"></script>
    <script src="js/user.js"></script>
    <script src="js/side-menu.js"></script>
</head>
<body onload="userSession();">
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

		<div class="row text-center">
			<br />
			<p class="label-title">Efetuar Pagamento</p>
			<p class="label-subtitle">Complete as informações abaixo para realizar o pagamento</p>

			<div class="container">
				<form>
					<div class="form-group">
						<label for="card-number">Número do cartão:</label>
						<input type="text" class="form-control" id="card-number">
					</div>

					<div class="form-group">
						<label for="card-date">Data de Validade:</label>

						<input type="text" class="form-control text-center col-xs-6" id="card-date-month" placeholder="Mês">
						<input type="text" class="form-control text-center col-xs-6" id="card-date-year" placeholder="Ano">
					</div>

					<div class="form-group">
						<label for="card-number">Código verificador:</label>
						<input type="text" class="form-control" id="card-number">
					</div>

					<!-- <input type="submit" name="confirm-payment" value="Confirmar Pagamento" class="btn btn-primary btn-block"> -->
					<a href="payment-success.php" class="btn btn-primary btn-block">Confirmar Pagamento</a>
				</form>
			</div>
		</div>
	</div>
</body>
</html>