<?php 
	$title = "Полезные сервисы от AND | AutoNovaD - запчасти для семьи автомобилей Volkswagen";
	include "header.php";
?>

<body>
	
	<?php 
		include "index_navigation.php";
	?>

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
				<a href="evaq.php"><div class="fill" style="background-image:url( ./../img/header-evaq.jpg);"></div></a>
				<div class="carousel-caption">
					<span class="title">Полный список эвакуаторов Киева</span><br>
					<span class="caption">возможность сразу вызвать эвакуатор</span>
				</div>
			</div>
			<div class="item">
				<!-- Set the fourth background image using inline CSS below. -->
				<a href="taxi.php"><div class="fill" style="background-image:url( ./../img/header-taxi.jpg);"></div></a>
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

			<!-- ABOUT SECTION -->
			<section id="about" class="section-content">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<h1 class="title-start">Про сервис</h1>
							<p class="text-justify text-content">
								Никогда не знаешь, что может случиться в дороге. Особенно в повседневных поездках. В ситуациях, когда все неожиданно стало плохо, больше всего необходимо твердое плечо настоящего друга. Мы в АНД думали, чем мы можем помочь вам в таких ситуациях. Быстрая доставка качественных запчастей - это, конечно, хорошо. Но помощь нужна здесь и сейчас.
							</p>
							<p class="text-justify text-content">Мы подготовили для вас два списка: список служб такси и список служб эвакуации. Первые перевезут в нужное место вас, вторые - ваш автомобиль.</p>
						</div>
					</div>
					<!-- /.row -->
				</div>
				<!-- /.container -->
				<hr class="visible-xs visible-sm">
			</section>
			<!-- /.section -->
			
			<hr class="hidden-xs hidden-sm">
			
			<section id="services" class="visible-xs visible-sm first-section section-content">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-6 text-center">
							<a href="taxi.php" class="btn btn-xs-visible">Выбрать и вызвать <br>такси</a>
						</div>
						<div class="col-xs-12 col-sm-6 text-center">
							<a href="evaq.php" class="btn btn-xs-visible">Выбрать и вызвать <br>эвакуатор</a>
						</div>
					</div>					
				</div>
				<hr class="visible-xs visible-sm">
			</section>

			<!-- SERVICE SECTION -->
			<section id="services" class="hidden-xs hidden-sm section-content">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<h1 class="title-start">Сервисы</h1>
							<p class="text-content">Пользоваться списками очень просто: открыли список, выбрали подходящий телефон, нажали на ссылку.</br>
							Не нужно что-то запоминать или копировать - одно нажатие и вы уже звоните по выбранному номеру.</p>
						</div>
						<div class="text-center">							
							<div class="col-xs-12 col-sm-6 col-lg-6">
								<img src=" ./../img/svg/evaq.svg" alt="" class="icon">
								<h3>Выбрать и вызвать эвакуатор</h3>
								<a type="button" href="evaq.php" class="btn btn-lg-visible">Перейти к списку</a>
							</div>
							<div class="col-xs-12 col-sm-6 col-lg-6">
								<img src=" ./../img/svg/taxi.svg" alt="" class="icon">
								<h3 class="corect_padding">Выбрать и заказать такси</h3>
								<a href="taxi.php" class="btn btn-lg-visible">Перейти к списку</a>
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
							<h1 class="title-start">Новости на сайте</h1>
						</div>
					</div>
					<div class="row">
						<div class="text-center">
							<div class="col-xs-12 col-sm-6 col-lg-3 img_news">
								<img src=" ./../img/svg/news-1.png" alt="" class="icon">
								<h4>Победители пятого розыгрыша отправляются в Запорожье</h4>
								<a type="button" href="http://autonovad.ua/index.html?id=news&nid=207" class="btn btn-lg-visible">Перейти к новости</a>
							</div>
							<div class="col-xs-12 col-sm-6 col-lg-3 img_news">
								<img src=" ./../img/svg/news-3.png" alt="" class="icon">
								<h4>OSSCA в Украине- это AutoNova-D</h4>
								<a type="button" href="http://autonovad.ua/index.html?id=news&nid=206" class="btn btn-lg-visible">Перейти к новости</a>
							</div>
							<div class="col-xs-12 col-sm-6 col-lg-3 img_news">
								<img src=" ./../img/svg/news-2.png" alt="" class="icon">
								<h4>Расшифровка новой структуры артикула запчастей тм “DELLO Automega”</h4>
								<a type="button" href="http://autonovad.ua/index.html?id=news&nid=205" class="btn btn-lg-visible">Перейти к новости</a>
							</div>
							<div class="col-xs-12 col-sm-6 col-lg-3 img_news">
								<img src=" ./../img/svg/news-all.png" alt="" class="icon">
								<h4>ВСЕ НОВОСТИ</h4>
								<a type="button" href="http://autonovad.ua/index.html?id=news&all=1" class="btn btn-lg-visible">Перейти к новости</a>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div> <!-- / id="main" -->
	</div> <!-- / id="wrap" -->

	<!-- Footer Include -->
	<?php include "footer.php" ?>	

	<!-- Script to Activate the Carousel -->
	<script>
	$('.carousel').carousel({
		interval: 3000 //changes the speed
	})
	</script>

</body>

</html>