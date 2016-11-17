
<div id="wrapper">
	<!-- Header -->
	<div class="header">
		<!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    Menu
                </li>
                <li>
                    <a href="user.php">
                    	<span class="glyphicon glyphicon-user"></span>
                    	Dados do Usuário
                    </a>
                </li>
                <li>
                    <a href="payment.php">
                    	<span class="glyphicon glyphicon-credit-card"></span>
                    	Efetuar Pagamento
                    </a>
                </li>
                <li>
                    <a href="user-edit.php">
                    	<span class="glyphicon glyphicon-pencil"></span>
                    	Editar dados
                    </a>
                </li>
                <li>
                    <a onclick="endUserSession()">
                        <span class="glyphicon glyphicon-off" onclick="endUserSession()"></span>
                        Sair
                    </a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->
		<div class="row">
			<div class="col-xs-3">
				<div class="label-menu">
					<span class="glyphicon glyphicon-menu-hamburger" id="menu-toggle">
					</span>
				</div>
			</div>
			<div class="col-xs-9">
				<div id ="userName" class="label-user">
					Olá, Usuário
				</div>
			</div>
		</div>
	</div>
</div>