<!-- Navigation -->
<nav class="navbar navbar-fixed-top navbar-light" role="navigation">
		<!-- Brand and toggle get grouped for better mobile display -->
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="main.php"><img class="nav-logo" src="../img/logo1.png"></a>
	</div>
	<!-- Collect the nav links, forms, and other content for toggling -->
	<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
		<ul class="nav navbar-nav">
			<li class="navigate-top">
				<a href="main.php" class="navbar-nav-item link-navigate">Главная</a>
			</li>
			<li class="navigate-top">
				<a href="main.php#about" class="navbar-nav-item link-navigate">Про сервис</a>
			</li>
			<li class="dropdown navigate-top">
				<a href="#" id="dLabel" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="navbar-nav-item link-navigate">Сервисы<span class="caret"></span></a>
					<ul class="dropdown-menu" aria-labelledby="dLabel">
						<li class="dropdown-navigate"><a class="dropdown-link-menu" href="evaq.php">Список эвакуаторов</a></li>
						<li class="dropdown-navigate"><a class="dropdown-link-menu" href="taxi.php">Список такси</a></li>
					</ul>
			</li>
			<li class="navigate-top">
				<a href="main.php#contacts" class="navbar-nav-item link-navigate">Контакты</a>
			</li>
		</ul>
	</div>
		<!-- /.navbar-collapse -->
	<!-- /.container -->
</nav>