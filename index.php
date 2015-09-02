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
				<a href="<?php echo get_home_url();?>">
				  <img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="">
				</a>
			</div>
			<div class="header__menu">
				<nav class="navigation">
					<ul>
						<li><a href="<?php echo get_permalink(9); ?>">О компании </a>
              <ul>
                <li><a href="<?php echo get_permalink(18); ?>">История</a></li>
                  <li><a href="<?php echo get_permalink(20); ?>">Автопарк</a></li>
                  <li><a href="<?php echo get_permalink(22); ?>">Склады</a></li>
                  <li><a href="<?php echo get_permalink(24); ?>">Наши партнеры</a></li>
                  <li><a href="<?php echo get_permalink(26); ?>">Презинтация</a></li>
              </ul>
            </li>
						<li><a href="<?php echo get_permalink(11); ?>">Услуги</a></li>
						<li><a href="<?php echo get_permalink(13); ?>">География</a></li>
						<li><a href="#to_cont"  class="smoothScroll">Обратная связь </a></li>
						<li><a href="<?php echo get_permalink(15); ?>">Контакты</a></li>
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
			<div data-img="<?php bloginfo('template_directory'); ?>/img/Layer-80-1.jpg">
				<div class="first__onslide">
					<h1>Кросс-докинг</h1>
					<p>Приёмка и отгрузка товаров и грузов через склад напрямую,<br>
						без размещения в зоне долговременного хранения.</p>	
					<a href="#nowhere" class="first__more">Подробнее</a>
				</div>
			</div>
			<div data-img="<?php bloginfo('template_directory'); ?>/img/Layer-80.jpg">
        <div class="first__onslide">
          <h1>Кросс-докинг</h1>
          <p>Приёмка и отгрузка товаров и грузов через склад напрямую,<br>
            без размещения в зоне долговременного хранения.</p> 
          <a href="#nowhere" class="first__more">Подробнее</a>
        </div>
      </div>
			<div data-img="<?php bloginfo('template_directory'); ?>/img/Layer-48-3.jpg">
        <div class="first__onslide">
          <h1>Кросс-докинг</h1>
          <p>Приёмка и отгрузка товаров и грузов через склад напрямую,<br>
            без размещения в зоне долговременного хранения.</p> 
          <a href="#nowhere" class="first__more">Подробнее</a>
        </div>
      </div>
      <div data-img="<?php bloginfo('template_directory'); ?>/img/predlagaem.jpg">
        <div class="first__onslide">
          <h1>Кросс-докинг</h1>
          <p>Приёмка и отгрузка товаров и грузов через склад напрямую,<br>
            без размещения в зоне долговременного хранения.</p> 
          <a href="#nowhere" class="first__more">Подробнее</a>
        </div>
      </div>
		</div>
	</section>
   <a name="to_serv" id="to_serv"></a>
   <section class="serv">
   	<div class="contain">
   		<div class="serv__block">
   			<h1>Услуги</h1>
   			<div class="serv__block--line"></div>
   			<a href="#nowhere"><div class="serv__block--single">
   				<img src="<?php bloginfo('template_directory'); ?>/img/Share-copy.png" alt="">
   				<p>Кросс-докинг</p>
   			</div>
        </a>
   			<a href="#nowhere"><div class="serv__block--single">
   				<img src="<?php bloginfo('template_directory'); ?>/img/Briefcase.png" alt="">
   				<p>3PL</p>
   			</div>
        </a>
   			<a href="#nowhere"><div class="serv__block--single">
   				<img src="<?php bloginfo('template_directory'); ?>/img/Layers.png" alt="">
   				<p>Склад</p>
   			</div>
        </a>
   			<a href="<?php echo get_permalink(11); ?>" class="serv__block--but">Все услуги</a>
   		</div>

   	</div>
   </section>
    
   <section class="geo">
    <a id="to_geo" name="to_geo"></a>
   	<div class="geo__map"></div>
		<div class="geo__text">
			<h1>География</h1>
			<p>Компания «Логистик Л7» оказывает логистические услуги
			на территории Перми и Пермского края, Республики Удмуртия,
			Екатеринбурга и Свердловской области и осуществляет
			грузоперевозки и экспедирование по всей территории России</p> 	
			<a href="<?php echo get_permalink(13); ?>" class="geo__text--but">НАЙТИ СВОЙ ГОРОД</a>		
		</div>
   </section>	

   <section class="adv">
   			<div class="contain">
   				<h1>Преимущества</h1>
   				<div class="serv__block--line"></div>
   				<div class="adv__block">
   					<div class="adv__block--item1">
   						<img src="<?php bloginfo('template_directory'); ?>/img/Group-2-copy.png" alt="">
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
                    <img class="proj_thumb" src="<?php bloginfo('template_directory'); ?>/img/Layer-7.jpg" alt="">
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
        <a name="to_about" id="to_about"></a>
				<div class="contain">
					<h1>О нас</h1>
					<div class="serv__block--line"></div>
					<p>Мы делаем доступными сырье и товары, снижая издержки наших клиентов. 
  					Мы транслируем передовой
  					опыт и обеспечиваем лучший уровень сервиса. 
  					Мы инвестируем в людей и технологии.</p>
					<a href="<?php echo get_permalink(9); ?>" class="about--but">ЧИТАТЬ ДАЛЕЕ</a>
				</div>
			</section>	

      <section class="trust">        
        <div class="contain">
          <h1>Нам доверяют</h1>
          <div class="serv__block--line"></div>
          <a href="#nowhere">
          <div class="trust__block">
            <img src="<?php bloginfo('template_directory'); ?>/img/Layer-11.png" alt="">
          </div>
          </a>
          <a href="#nowhere">
          <div class="trust__block">
            <img src="<?php bloginfo('template_directory'); ?>/img/Layer-12.png" alt="">
          </div>
          </a>
          <a href="#nowhere">
          <div class="trust__block">
            <img src="<?php bloginfo('template_directory'); ?>/img/Layer-13.png" alt="">
          </div>
          </a>
          <a href="#nowhere">
          <div class="trust__block">
            <img src="<?php bloginfo('template_directory'); ?>/img/Layer-14.png" alt="">
          </div>
          </a>
          <a href="#nowhere">
          <div class="trust__block">
            <img src="<?php bloginfo('template_directory'); ?>/img/Layer-15.png" alt="">
          </div>
          </a>
          <a href="#nowhere">
          <div class="trust__block">
            <img src="<?php bloginfo('template_directory'); ?>/img/Layer-16.png" alt="">
          </div>
          </a>
          <a href="#nowhere">
          <div class="trust__block">
            <img src="<?php bloginfo('template_directory'); ?>/img/Layer-17.png" alt="">
          </div>
          </a>
          <a href="#nowhere">
          <div class="trust__block">
            <img src="<?php bloginfo('template_directory'); ?>/img/Layer-21.png" alt="">
          </div>
          </a>
          <a href="#nowhere">
          <div class="trust__block">
            <img src="<?php bloginfo('template_directory'); ?>/img/Layer-22.png" alt="">
          </div>
          </a>
          <a href="#nowhere">
          <div class="trust__block">
            <img src="<?php bloginfo('template_directory'); ?>/img/Layer-24.png" alt="">
          </div>
          </a>
          <a href="#nowhere">
          <div class="trust__block">
            <img src="<?php bloginfo('template_directory'); ?>/img/Layer-23.png" alt="">
          </div>
          </a>
          <a href="#nowhere">
          <div class="trust__block">
            <img src="<?php bloginfo('template_directory'); ?>/img/Layer-18.png" alt="">
          </div>
          </a>
          <a href="#nowhere">
          <div class="trust__block">
            <img src="<?php bloginfo('template_directory'); ?>/img/Layer-19.png" alt="">
          </div>
          </a>
          <a href="#nowhere">
          <div class="trust__block">
            <img src="<?php bloginfo('template_directory'); ?>/img/Layer-20.png" alt="">
          </div>
          </a>
        </div>
      </section>

      <section class="questions">
        <a name=="to_cont" id="to_cont"></a>
            <div class="contain">
              <h1>Остались вопросы?</h1>
              <div class="serv__block--line"></div>
              <div class="questions__block">
              <!--   <form action="#nowhere">
                <div class="questions__block--left">
                  <input type="text" class="questions__block--inp" placeholder="Ваше имя">
                  <input type="text" class="questions__block--inp" placeholder="Почта или телефон для ответа">
                </div>
                <div class="questions__block--right">
                  <textarea name="mes" class="questions__block--txt" placeholder="Сообщение"></textarea>
                </div>
                <input type="submit" class="questions__block--sub" value="ОТПРАВИТЬ">
              </form> -->
                <?php echo do_shortcode("[contact-form-7 id='29' title='Form']"); ?>
              </div>
            </div>
          </section>		

          <footer class="footer">
            <div class="contain"> 
              <div class="footer__logo">
                <a href="<?php echo get_home_url();?>">
                  <img src="<?php bloginfo('template_directory'); ?>/img/logo_footer.png" alt="">
                </a>
              </div>
              <div class="footer__menu">
                <nav class="navigation">
                  <ul>
                    <li><a href="<?php echo get_permalink(9); ?>" class="smoothScroll">О компании </a>
                      <ul>
                        <li><a href="<?php echo get_permalink(18); ?>">История</a></li>
                        <li><a href="<?php echo get_permalink(20); ?>">Автопарк</a></li>
                        <li><a href="<?php echo get_permalink(22); ?>">Склады</a></li>
                        <li><a href="<?php echo get_permalink(24); ?>">Наши партнеры</a></li>
                        <li><a href="<?php echo get_permalink(26); ?>">Презинтация</a></li>
                      </ul>
                    </li>
                    <li><a href="<?php echo get_permalink(11); ?>">Услуги</a></li>
                    <li><a href="<?php echo get_permalink(13); ?>">География</a></li>
                    <li><a href="#to_cont"  class="smoothScroll">Обратная связь </a></li>
                    <li><a href="<?php echo get_permalink(15); ?>">Контакты</a></li>
                  </ul>
                </nav>
              </div>
              <div class="footer__phone">
                <h3><span class="footer__phone-icon"></span>8 (342) 218-17-10</h3>
                <p>Телефон в Перми</p>
              </div>              
            </div>  
          </footer>
<?php wp_footer(); ?>
</body>
</html>