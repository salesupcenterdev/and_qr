<!DOCTYPE html>
<html lang="ru">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Полезные сервисы от AND | AutoNovaD - запчасти для семьи автомобилей Volkswagen</title>

	<!-- Normalize.css сброс стилей -->
	<link rel="stylesheet" type="text/css" href="css/normalize.css" />

	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<!-- Bootstrap Core CSS -->
	<link href="css/font-awesome.min.css" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="css/style.css" rel="stylesheet">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body>

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
				<a class="navbar-brand" href="#"><img class="nav-logo" src="img/logo.png"></a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li class="navigate-top">
						<a href="index.php" class="navbar-nav-item link-navigate">Главная</a>
					</li>
					<li class="navigate-top">
						<a href="#about" class="navbar-nav-item link-navigate">Про сервис</a>
					</li>
					<li class="dropdown navigate-top">
						<a href="#" id="dLabel" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="navbar-nav-item link-navigate">Сервисы<span class="caret"></span></a>
							<ul class="dropdown-menu" aria-labelledby="dLabel">
								<li class="dropdown-navigate"><a class="dropdown-link-menu" href="pages/evaq.php">Список эвакуаторов</a></li>
								<li class="dropdown-navigate"><a class="dropdown-link-menu" href="pages/taxi.php">Список такси</a></li>
							</ul>
					</li>
					<li class="navigate-top">
						<a href="#contacts" class="navbar-nav-item link-navigate">Контакты</a>
					</li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		<!-- /.container -->
	</nav>

			
		<!-- Full Page Image Background Carousel Header -->
			<header id="myCarousel" class="carousel slide hidden-xs hidden-sm">
				<!-- Indicators -->
				<ol class="carousel-indicators">					
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
				</ol>

				<!-- Wrapper for Slides -->
				<div class="carousel-inner">					
					<div class="item active">
						<!-- Set the third background image using inline CSS below. -->
						<a href="#"><div class="fill" style="background-image:url(img/header-evaq.jpg);"></div></a>
						<div class="carousel-caption">
							<span class="title">Полный список эвакуаторов Киева</span><br>
							<span class="caption">возможность сразу вызвать эвакуатор</span>
						</div>
					</div>
					<div class="item">
						<!-- Set the fourth background image using inline CSS below. -->
						<a href="#"><div class="fill" style="background-image:url(img/header-taxi.jpg);"></div></a>
						<div class="carousel-caption">
							<span class="title">Полный список такси Киева</span><br>
							<span class="caption">возможность сразу вызвать такси</span>
						</div>
					</div>
				</div>

				<!-- Controls -->
				<a class="left carousel-control" href="#myCarousel" data-slide="prev">
					<span class="icon-prev"></span>
				</a>
				<a class="right carousel-control" href="#myCarousel" data-slide="next">
					<span class="icon-next"></span>
				</a>

			</header>

	<div id="wrap">
		<div id="main">

			<!-- Page Content -->
			
			<section id="services" class="visible-xs visible-sm first-section section-content">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-6 text-center">
							<a href="taxi.html" class="btn btn-xs-visible">Выбрать и вызвать <br>такси</a>
						</div>
						<div class="col-xs-12 col-sm-6 text-center">
							<a href="#" class="btn btn-xs-visible">Выбрать и вызвать <br>эвакуатор</a>
						</div>
					</div>					
				</div>
				<hr class="visible-xs visible-sm">
			</section>

			<!-- ABOUT SECTION -->
			<section id="about" class="section-content">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<h1 class="title-start">Про сервис</h1>
							<p class="text-justify text-content">
								Мы в АНД всегда хотим быть рядом с вами в трудную минуту. Поэтому представляем новый сервис.
								Вы можете вызвать такси или эвакуатор в соответствующем разделе.
							</p>
						</div>
					</div>
					<!-- /.row -->
				</div>
				<!-- /.container -->
				<hr class="visible-xs visible-sm">
			</section>
			<!-- /.section -->
			
			<hr class="hidden-xs hidden-sm">
			
			<!-- SERVICE SECTION -->
			<section id="services" class="hidden-xs hidden-sm section-content">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<h1 class="title-start">Сервисы</h1>
							<p class="text-content">Описание что можно сделать с разделами сервисов</p>
						</div>
						<div class="text-center">							
							<div class="col-xs-12 col-sm-6 col-lg-6">
								<img src="img/svg/evaq.svg" alt="" class="icon">
								<h3>Выбрать и вызвать эвакуатор</h3>
								<button href="#" class="btn btn-default">Перейти к списку</button>
							</div>
							<div class="col-xs-12 col-sm-6 col-lg-6">
								<img src="img/svg/taxi.svg" alt="" class="icon">
								<h3 class="corect_padding">Выбрать и заказать такси</h3>
								<button href="#" class="btn btn-default">Перейти к списку</button>
							</div>
						</div>
					</div>
					<!-- /.row -->
				</div>
				<!-- /.container -->
			</section>
			<!-- /.section -->

				<hr class="hidden-xs hidden-sm">
			

			<!-- NEWS SECTION -->
			<section id="news" class="hidden-xs hidden-sm section-content">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<h1 class="title-start">Новости</h1><br>
							<p class="text-content">Здесь транслируются новости с основного сайта. Сначала идут три новости, потом блок перехода в раздел всех новостей </p>
						</div>
					</div>
					<div class="row">
						<div class="text-center">
							<div class="col-xs-12 col-sm-6 col-lg-3 img_news">
								<img src="img/svg/news-1.png" alt="" class="icon">
								<h4>Победители пятого розыгрыша отправляются в Запорожье</h4>
								<button href="#" class="btn btn-default">Перейти к новости</button>
							</div>
							<div class="col-xs-12 col-sm-6 col-lg-3 img_news">
								<img src="img/svg/news-3.png" alt="" class="icon">
								<h4>OSSCA в Украине- это AutoNova-D</h4>
								<button href="#" class="btn btn-default">Перейти к новости</button>
							</div>
							<div class="col-xs-12 col-sm-6 col-lg-3 img_news">
								<img src="img/svg/news-2.png" alt="" class="icon">
								<h4>Расшифровка новой структуры артикула запчастей тм “DELLO Automega”</h4>
								<button href="#" class="btn btn-default">Перейти к новости</button>
							</div>
							<div class="col-xs-12 col-sm-6 col-lg-3 img_news">
								<img src="img/svg/news-all.png" alt="" class="icon">
								<h4>ВСЕ НОВОСТИ</h4>
								<button href="#" class="btn btn-default">Перейти к новости</button>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section id="contacts" class="section-content">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<h1 class="title-start">Контакты</h1>
							<p class="text-content">
								<ul class="contact-list">
									<li class="contact-list-item">Позвоните нам: <a class="link-text" href="tel:+380441234455">(044) 123 44 55</a></li>
									<li class="contact-list-item">Напишите нам: <a class="link-text" href="mailto:info@autonovad.com.ua">info@autonovad.com.ua</a></li>
									<li class="contact-list-item">Загляните к нам: <a class="link-text" href="https://goo.gl/maps/57yX893f7Ls" target="_blank">Киев, ул. Семьи Хохловых, 9А</a></li>
								</ul>
							</p>
						</div>
					</div>
				</div>
			</section>	

		</div> <!-- / id="main" -->
	</div> <!-- / id="wrap" -->


	<?php include "templates/footer.php" ?>	

	<!-- jQuery -->
	<script type="text/javascript" src="js/jquery.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script type="text/javascript" src="js/bootstrap.min.js"></script>

	<!-- custom script -->
	<script type="text/javascript" src="js/script.js"></script>

	<!-- збір статистики -->
	<script type="text/javascript" src="js/scriptlandcc.js"></script>

	<!-- Script to Activate the Carousel -->
	<script>
	$('.carousel').carousel({
		interval: 3000 //changes the speed
	})
	</script>

</body>

</html>