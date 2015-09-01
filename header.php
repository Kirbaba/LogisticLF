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

	<header class="pageHeader">
        <div class="contain"> 
			<div class="pageHeader__logo">
				<a href="<?php echo get_home_url();?>">
					<img src="<?php bloginfo('template_directory'); ?>/img/logo_footer.png" alt="">
				</a>
			</div>
			<div class="pageHeader__menu">
				<nav class="navigation">
					<ul>
						<li><a href="#to_about">О компании </a>
							<ul>
								<li><a href="">История</a></li>
								<li><a href="">Автопарк</a></li>
								<li><a href="">Склады</a></li>
								<li><a href="">Наши партнеры</a></li>
								<li><a href="">Презинтация</a></li>
							</ul>
						</li>
						<li><a href="#to_serv">Услуги</a></li>
						<li><a href="#to_geo">География</a></li>
						<li><a href="#to_cont">Обратная связь </a></li>
						<li><a href="#nowhere">Контакты</a></li>
					</ul>
				</nav>
			</div>
			<div class="pageHeader__phone">
				<h3><span class="pageHeader__phone-icon"></span>8 (342) 218-17-10</h3>
				<p>Телефон в Перми</p>
			</div>              
        </div> 
	</header>