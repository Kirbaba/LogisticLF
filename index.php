<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <link rel="icon" href="/wp-content/uploads/2015/03/657068.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="/wp-content/uploads/2015/03/657068.ico" type="image/x-icon" />
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAaOWKyamSxMTXclSDFmJ2N4Am20PCTD6I&sensor=FALSE">
    </script>
    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body>
	
	<header class="header">	
		<div class="contain">	
			<div class="header__logo">
				<a href="#nowhere">
					<img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="">
				</a>
			</div>
			<div class="header__menu">
				<nav class="navigation">
					<ul>
						<li><a href="#nowhere">О компании </a></li>
						<li><a href="#nowhere">Услуги</a></li>
						<li><a href="#nowhere">География</a></li>
						<li><a href="#nowhere">Обратная связь </a></li>
						<li><a href="#nowhere">Контакты</a></li>
					</ul>
				</nav>
				<div class="header__menu__phone">
					<h3><span class="header__menu__phone-icon"></span>8 (342) 218-17-10</h3>
					<p>Телефон в Перми</p>
				</div>
			</div>	
		</div>	
	</header>

	<section class="first">
		
		<div class="fotorama" data-minwidth="100%" data-ratio="2560/1400" data-fit="cover" data-autoplay="true" >
			<div data-img="<?php bloginfo('template_directory'); ?>/img/Layer-80-1.png">
				<div class="first__onslide">
					<h1>Кросс-докинг</h1>
					<p>Приёмка и отгрузка товаров и грузов через склад напрямую,<br>
						без размещения в зоне долговременного хранения.</p>	
					<a href="#nowhere" class="first__more">Подробнее</a>
				</div>
			</div>
			<div data-img="<?php bloginfo('template_directory'); ?>/img/Layer-80-1.png">Two</div>
			<div data-img="<?php bloginfo('template_directory'); ?>/img/Layer-80-1.png">Three</div>
		</div>

	

	</section>
   
<?php wp_footer(); ?>
</body>
</html>