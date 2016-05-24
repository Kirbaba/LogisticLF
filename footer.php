          <footer class="footer">
            <div class="contain"> 
              <div class="footer__logo">
               <a href="<?php echo get_home_url();?>">
                  <img src="<?php bloginfo('template_directory'); ?>/img/logo_footer.png" alt="">
                </a>
              </div>
              <div class="footer__menu">
     <?php wp_nav_menu( array( 'theme_location' => 'header_menu','container' => 'nav', 'container_class' => 'navigation') ); ?>
              </div>
              <div class="footer__phone">
                <h3><span class="footer__phone-icon"></span>8 (342) 218-17-01</h3>
          <!--  Comment    <p>Телефон в Перми</p> --> 
              </div>              
            </div>  
          </footer>
<?php wp_footer(); ?>
</body>
</html>