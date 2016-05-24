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

<style>
header {
    background: #fff;
}
body.page-template {
    background: transparent;
    z-index: 11;
}
 
body.page-template:after {
  content: "";
  background: url(<?php echo get_template_directory_uri(); ?>/img/page-bg.jpg) repeat;
  -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=20)";
  filter: alpha(opacity=20);
  -moz-opacity: 0.2;
  -khtml-opacity: 0.2;
  opacity: 0.2;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0; 
  position: fixed; 
  z-index: -1;   
  width : 100%
  height: 100%  
}

 

 

.page__content img {
    max-width: 100%;
    width: auto;
    height: auto; 
}


.tpl ul {
    margin: 0;
    padding: 0;
    list-style: none;
}

.tpl li {
    margin: 0;
    padding: 0;
    list-style: none;
}

.tpl .tpl-info li {
    margin: 0 0 7px 0;
    padding: 0 0 7px 0;
    color: #a5a5a5;
    border-bottom: 1px solid #a5a5a5; 
}

.tpl .tpl-info li:last-child {
    border-bottom: 0;
}

.tpl h3 {
    color: #df0028;
    font-size: 18px;
    line-height: 25px;
}

.tpl .tpl-stext {
    color: #000000;
    font-size: 18px;
    line-height: 25px;
}

.tpl .tpl-blocks {
    margin-right: -40px;
}

.tpl .tpl-blocks li {
    float: left;
    width: 30%;
    margin-right: 20px;
    padding: 20px 28px;
    border: 1px solid #b2b2b2;
    text-align: center;
    font-size: 16px;
    line-height: 22px;
}

.tpl .tpl-blocks .tpl-block-text {
    margin: 15px 0 5px 0;
    color: #000;
}

.tpl .tpl-blocks .tpl-block-button a {
    display: inline-block;
    vertical-align: top;
    width: 180px;
    margin: 10px 0;
    color: #e48b9b;
    line-height: 49px;
    height: 50px;
    border: 1px solid #e48b9b; 
    text-decoration: none;
} 

.tpl .tpl-blocks .tpl-block-button a:hover {
    background: #e48b9b;
    color: #fff;
} 

.cross-doc {
    position: relative;
}

.cross-doc .cross-doc-cars {
    position: absolute;
    top: -55px;
    right: 0;
}

.cross-doc .cross-doc-cars img {
    height: 50px;
    width: auto;
}

.cross-doc ul {
    margin: 0;
    padding: 0;
    list-style: none;
}

.cross-doc li {
    margin: 0;
    padding: 0;
}

.cross-doc .cross-doc-blocks {
    margin-right: -40px;
}

.cross-doc .cross-doc-blocks li {
    float: left;
    width: 30%;
    margin-right: 20px;
    padding: 20px 7px;
    border: 1px solid #b2b2b2;
    text-align: center;
    font-size: 16px;
    line-height: 22px;
}

.cross-doc .cross-doc-blocks .cross-doc-block-text {
    margin: 15px 0 5px 0;
    color: #000;
}

.about-cp {
    position: relative;
    width: 100%;
    color: #000;
}

.about-cp ul {
    margin: 0;
    padding: 0;
    list-style: none;
}

.about-cp li {
    margin: 0;
    padding: 0;
}

.about-cp .about-cp-blocks {
    margin-right: -60px; 
    clear: both;
}

.about-cp .about-cp-blocks li {
    float: left;
    width: 20.7%;
    margin-right: 20px;
    padding: 20px 7px; 
    border: 1px solid #b2b2b2;
    text-align: center;
    font-size: 16px;
    line-height: 22px;
    height: 182px;
}

.about-cp .about-cp-blocks li img {
    height: 65px;
    width: auto;
}

.about-cp .about-cp-block-text {
    margin-top: 15px;
}

.about-cp-mission-block {
    margin-left: 185px;
    padding-top: 40px;
    clear: both;
}

.about-cp-mission-block .mission-block-left {
    margin-left: -185px;
    float: left;
}

.about-cp-mission-block h2 {
    font-size: 36px;
}

.about-cp-mission-block .mission-block-right {
    border-left: 1px solid #b2b2b2;
    padding-left: 40px;
}
</style>

<body <?php if ( is_page() ) { echo 'class="page-template"'; } ?>>

	<header class="pageHeader">
        <div class="contain"> 
			<div class="pageHeader__logo">
				<a href="<?php echo get_home_url();?>">
					<img src="<?php bloginfo('template_directory'); ?>/img/logo_footer.png" alt="">
				</a>
			</div>
			<div class="pageHeader__menu">
				   <?php wp_nav_menu( array( 'theme_location' => 'header_menu','container' => 'nav', 'container_class' => 'navigation') ); ?>
			       
        </div> 
<div class="pageHeader__phone">
					<h3><span class="pageHeader__phone-icon"></span>8 (342) 218-17-01</h3>
				<!--  Comment  	<p>Телефон в Перми</p> -->
			</div>     
	</header>