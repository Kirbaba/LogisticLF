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
   
   <section class="serv">
   	<div class="contain">
   		<div class="serv__block">
   			<h1>Услуги</h1>
   			<div class="serv__block--line"></div>
   			<div class="serv__block--single">
   				<img src="<?php bloginfo('template_directory'); ?>/img/Share-copy.png" alt="">
   				<p>Кросс-докинг</p>
   			</div>
   			<div class="serv__block--single">
   				<img src="<?php bloginfo('template_directory'); ?>/img/Briefcase.png" alt="">
   				<p>3PL</p>
   			</div>
   			<div class="serv__block--single">
   				<img src="<?php bloginfo('template_directory'); ?>/img/Layers.png" alt="">
   				<p>Склад</p>
   			</div>
   			<a href="#nowhere" class="serv__block--but">Все услуги</a>
   		</div>
   	</div>
   </section>

   <section class="geo">
   	<div class="geo__map"></div>
		<div class="geo__text">
			<h1>География</h1>
			<p>Компания «Логистик Л7» оказывает логистические услуги
			на территории Перми и Пермского края, Республики Удмуртия,
			Екатеринбурга и Свердловской области и осуществляет
			грузоперевозки и экспедирование по всей территории России</p> 	
			<a href="#nowhere" class="geo__text--but">НАЙТИ СВОЙ ГОРОД</a>		
		</div>
   </section>	

   <section class="adv">
   			<div class="contain">
   				<h1>Преимущества</h1>
   				<div class="serv__block--line"></div>
   				<div class="adv__block">
   					<div class="adv__block--item1">
   						<img src="<?php bloginfo('template_directory'); ?>/img/Group-2 copy.png" alt="">
   						<p>Собственный автопарк
						из 70 автомобилей</p>
   					</div>
   					<div class="adv__block--item2">
   						<img src="<?php bloginfo('template_directory'); ?>/img/Map-copy.png" alt="">
   						<p>17 тысяч точек доставок
						еженедельно</p>
   					</div>
   					<div class="adv__block--item3">
   						<img src="<?php bloginfo('template_directory'); ?>/img/Drawer-copy.png" alt="">
   						<p>Собственные склады
						класса А</p>
   					</div>
   					<div class="adv__block--item4">
   						<img src="<?php bloginfo('template_directory'); ?>/img/Friends-copy.png" alt="">
   						<p>Команда более<br>
						300 профессионалов</p>
   					</div>
   				</div>
   			</div>
   		</section>	
      
      <section class="proj">        
        <h1>Наши проекты</h1>
        <div class="serv__block--line"></div>        
          <div class="fotorama" data-minwidth="100%" data-height="350" data-nav="false">
            <div class="proj__block">
              <div class="contain">
                <div class="proj__block--text">
                  <img src="<?php bloginfo('template_directory'); ?>/img/nestle.png" alt="">
                  <p>Разработка маршрута доставки
                    вкусняшек от Нестле </p>
                    <a href="#nowhere" class="proj__block--text--but">О ПРОЕКТЕ</a>
                </div>
                <div class="proj__block--img">
                  <div class="proj__block--img--box">
                    <img class="proj_thumb" src="<?php bloginfo('template_directory'); ?>/img/Layer-7.png" alt="">
                  </div>
                </div>
              </div>
            </div>
            <div class="proj__block">
              <div class="contain">
                <div class="proj__block--text"></div>
                <div class="proj__block--img"></div>
              </div>
            </div>            
        </div>        
      </section>

   		<section class="about">
				<div class="contain">
					<h1>О нас</h1>
					<div class="serv__block--line"></div>
					<p>Мы делаем доступными сырье и товары, снижая издержки наших клиентов. 
  					Мы транслируем передовой
  					опыт и обеспечиваем лучший уровень сервиса. 
  					Мы инвестируем в людей и технологии.</p>
					<a href="#nowhere" class="about--but">ЧИТАТЬ ДАЛЕЕ</a>
				</div>
			</section>	

      <section class="trust">        
        <div class="contain">
          <h1>Нам доверяют</h1>
          <div class="serv__block--line"></div>
          <div class="trust__block">
            <img src="<?php bloginfo('template_directory'); ?>/img/Layer-11.png" alt="">
          </div>
          <div class="trust__block">
            <img src="<?php bloginfo('template_directory'); ?>/img/Layer-12.png" alt="">
          </div>
          <div class="trust__block">
            <img src="<?php bloginfo('template_directory'); ?>/img/Layer-13.png" alt="">
          </div>
          <div class="trust__block">
            <img src="<?php bloginfo('template_directory'); ?>/img/Layer-14.png" alt="">
          </div>
          <div class="trust__block">
            <img src="<?php bloginfo('template_directory'); ?>/img/Layer-15.png" alt="">
          </div>
          <div class="trust__block">
            <img src="<?php bloginfo('template_directory'); ?>/img/Layer-16.png" alt="">
          </div>
          <div class="trust__block">
            <img src="<?php bloginfo('template_directory'); ?>/img/Layer-17.png" alt="">
          </div>
          <div class="trust__block">
            <img src="<?php bloginfo('template_directory'); ?>/img/Layer-21.png" alt="">
          </div>
          <div class="trust__block">
            <img src="<?php bloginfo('template_directory'); ?>/img/Layer-22.png" alt="">
          </div>
          <div class="trust__block">
            <img src="<?php bloginfo('template_directory'); ?>/img/Layer-24.png" alt="">
          </div>
          <div class="trust__block">
            <img src="<?php bloginfo('template_directory'); ?>/img/Layer-23.png" alt="">
          </div>
          <div class="trust__block">
            <img src="<?php bloginfo('template_directory'); ?>/img/Layer-18.png" alt="">
          </div>
          <div class="trust__block">
            <img src="<?php bloginfo('template_directory'); ?>/img/Layer-19.png" alt="">
          </div>
          <div class="trust__block">
            <img src="<?php bloginfo('template_directory'); ?>/img/Layer-20.png" alt="">
          </div>
        </div>
      </section>

      <section class="questions">
            <div class="contain">
              <h1>Остались вопросы?</h1>
              <div class="serv__block--line"></div>
              <div class="questions__block">
                <form action="#nowhere">
                  <div class="questions__block--left">
                    <input type="text" class="questions__block--inp" placeholder="Ваше имя">
                    <input type="text" class="questions__block--inp" placeholder="Почта или телефон для ответа">
                  </div>
                  <div class="questions__block--right">
                    <textarea name="mes" class="questions__block--txt" placeholder="Сообщение"></textarea>
                  </div>
                  <input type="submit" class="questions__block--sub" value="ОТПРАВИТЬ">
                </form>
              </div>
            </div>
          </section>		

          
<?php wp_footer(); ?>
</body>
</html>