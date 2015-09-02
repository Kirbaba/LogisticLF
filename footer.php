          <footer class="footer">
            <div class="contain"> 
              <div class="footer__logo">
                <a href="#nowhere">
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
                    <li><a href="<?php echo get_permalink(11); ?>"  class="smoothScroll">Услуги</a></li>
                    <li><a href="<?php echo get_permalink(13); ?>"  class="smoothScroll">География</a></li>
                    <li><a href="<?php echo get_home_url();?>#to_cont">Обратная связь </a></li>
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