<?php

define('TM_DIR', get_template_directory(__FILE__));
define('TM_URL', get_template_directory_uri(__FILE__));

require_once TM_DIR.'/parser.php';

function add_style(){
    wp_enqueue_style( 'my-bootstrap-extension', get_template_directory_uri() . '/css/bootstrap.css', array(), '1');
    wp_enqueue_style( 'fotorama', get_template_directory_uri() . '/css/fotorama.css', array('my-bootstrap-extension'), '1');
    wp_enqueue_style( 'slideme-css', get_template_directory_uri() . '/css/slideme.css', array('fotorama'), '1');
    wp_enqueue_style( 'my-styles', get_template_directory_uri() . '/css/style.css', array('fotorama'), '1');
    wp_enqueue_style( 'my-sass', get_template_directory_uri() . '/sass/style.css', array('fotorama'), '1');    
}

function add_script(){
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-2.1.3.min.js', array(), '1');
    wp_enqueue_script( 'jq', 'https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js', array(), '1');
    wp_enqueue_script( 'my-bootstrap-extension', get_template_directory_uri() . '/js/bootstrap.js', array(), '1');
   
    wp_enqueue_script( 'slideme2-js', get_template_directory_uri() . '/js/jquery.slideme2.js', array(), '1'); 
    wp_enqueue_script( 'my-script', get_template_directory_uri() . '/js/script.js', array(), '1', true);
    wp_enqueue_script( 'fotorama-js', get_template_directory_uri() . '/js/fotorama.js', array(), '1');    
}

add_action( 'wp_enqueue_scripts', 'add_style' );
add_action( 'wp_enqueue_scripts', 'add_script' );

function prn($content) {
    echo '<pre style="background: lightgray; border: 1px solid black; padding: 2px">';
    print_r ( $content );
    echo '</pre>';
}

function my_pagenavi() {
    global $wp_query;

    $big = 999999999; // уникальное число для замены

    $args = array(
        'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) )
    ,'format' => ''
    ,'current' => max( 1, get_query_var('paged') )
    ,'total' => $wp_query->max_num_pages
    );

    $result = paginate_links( $args );

    // удаляем добавку к пагинации для первой страницы
    $result = str_replace( '/page/1/', '', $result );

    echo $result;
}

function excerpt_readmore($more) {
    return '... <br><a href="'. get_permalink($post->ID) . '" class="readmore">' . 'Читать далее' . '</a>';
}
add_filter('excerpt_more', 'excerpt_readmore');

if ( function_exists( 'add_theme_support' ) )
    add_theme_support( 'post-thumbnails' );

add_action('admin_menu', 'admin_menu');

function admin_menu(){
    add_menu_page( 'Настройки главного слайдера', 'Главный слайдер', 'manage_options', 'main_slider', 'main_slider' );
    add_menu_page( 'Настройки слайдера "Наши проекты"', 'Наши проекты', 'manage_options', 'our_projects', 'our_projects' );
    add_menu_page( 'Настройки блока "Нам доверяют"', 'Нам доверяют', 'manage_options', 'trust_us', 'trust_us' );
}

//nav menus wordpress
register_nav_menus( array(
    'header_menu' => 'Меню в шапке',
    'main_menu' => 'Меню на главной',
    'footer_menu' => 'Меню в подвале',
    'main_footer_menu' => 'Меню на главной в подвале',
    'sidebar' => 'Боковое меню'
) );

// load script to admin
function admin_js() {
    $url = TM_URL . '/js/admin.js';
    echo "<script type='text/javascript' src='$url'></script>";
}
add_action('admin_head', 'admin_js');

//Слайдер на главной (админка)
function main_slider(){
    global $wpdb;

    if (function_exists('wp_enqueue_media')) {
        wp_enqueue_media();
    } else {
        wp_enqueue_style('thickbox');
        wp_enqueue_script('media-upload');
        wp_enqueue_script('thickbox');
    }

    if(isset($_GET['del_slide'])){
        $wpdb->delete('main_slider',array("id" => $_GET['del_slide']));
        $message = "Слайд успешно удален!";
    }

    if(isset($_POST['attachment_url'])){
        if(isset($_POST['changed'])){
            $wpdb->update('main_slider',array("img_url" => $_POST['attachment_url'],
                "title" => $_POST['title'],"description" => $_POST['description'],"url" => $_POST['url']), array('id' => $_POST['changed']));
            $message = "Слайд успешно обновлен!";
        }else{
            $wpdb->insert('main_slider', array("img_url" => $_POST['attachment_url'],
                "title" => $_POST['title'],"description" => $_POST['description'],"url" => $_POST['url'],));
            $message = "Слайд успешно добавлен!";
        }

        echo mysql_error();
    }


    $generate = '';

    $slides = $wpdb->get_results("SELECT * FROM main_slider");
    foreach ($slides as $slide) {
        $generate .= "<tr data-slide-id='".$slide->id."'>
            <td class='curr_img' style='padding-right: 10px'><img  src='". $slide->img_url. "' alt='' style='width: 50px;'/></td>
            <td class='curr_title'>". $slide->title ."</td>
            <td class='curr_description'>". $slide->description ."</td>
            <td class='curr_url' ><a href='". $slide->url ."'>". $slide->url ."</a></td>
            <td><a href='#' class='change_slide'>Редактировать</a>
            <a href='/wp-admin/admin.php?page=main_slider&del_slide=$slide->id'>Удалить</a></td>
        </tr>";
    }


    $parser = new Parser();
    $parser->parse(TM_DIR."/views/admin_page.php",array('slides'=>$generate,
        'message'=>$message), true);
}
//слайдер на главной (шорткод)
function main_slider_sc(){
    global $wpdb;

    $generate = "";

    $slides = $wpdb->get_results("SELECT * FROM main_slider");
    foreach ($slides as $slide) {
        $generate .= '<div data-img="'.$slide->img_url.'">
				<div class="first__onslide">
					<h1>'.$slide->title.'</h1>
					<p>'.$slide->description.'</p>
					<a href="'.$slide->url.'" class="first__more">Подробнее</a>
				</div>
			</div>';
    }

    return $generate;
}
add_shortcode('main_slider', 'main_slider_sc');

//Наши проекты (админка)
function our_projects(){
    global $wpdb;

    if (function_exists('wp_enqueue_media')) {
        wp_enqueue_media();
    } else {
        wp_enqueue_style('thickbox');
        wp_enqueue_script('media-upload');
        wp_enqueue_script('thickbox');
    }

    if(isset($_GET['del_slide'])){
        $wpdb->delete('our_projects',array("id" => $_GET['del_slide']));
        $message = "Слайд успешно удален!";
    }

    if(isset($_POST['attachment_url'])){
        if(isset($_POST['changed'])){
            $wpdb->update('our_projects', array("img_url" => $_POST['attachment_url'],
                "logo_url" => $_POST['logo_url'],"description" => $_POST['description'],"url" => $_POST['url']), array('id' => $_POST['changed']));
            $message = "Слайд успешно обновлен!";
        }else{
            $wpdb->insert('our_projects', array("img_url" => $_POST['attachment_url'],
                "logo_url" => $_POST['logo_url'],"description" => $_POST['description'],"url" => $_POST['url'],));
            $message = "Слайд успешно добавлен!";
        }

        echo mysql_error();
    }


    $generate = '';

    $slides = $wpdb->get_results("SELECT * FROM our_projects");
    foreach ($slides as $slide) {
        $generate .= "<tr data-slide-id='".$slide->id."'>
            <td class='curr_logo' style='padding-right: 10px'><img src='". $slide->logo_url. "' alt='' style='width: 50px;'/></td>
            <td class='curr_description' style='padding-right: 10px'>". $slide->description ."</td>
            <td class='curr_url' style='padding-right: 10px'><a href='". $slide->url ."'>". $slide->url ."</a></td>
            <td class='curr_img' style='padding-right: 10px'><img src='". $slide->img_url. "' alt='' style='width: 50px;'/></td>
            <td>
                <a href='#' class='change_project'>Редактировать</a>
                <a href='/wp-admin/admin.php?page=our_projects&del_slide=$slide->id'>Удалить</a>
            </td>
        </tr>";
    }


    $parser = new Parser();
    $parser->parse(TM_DIR."/views/admin_projects.php",array('slides'=>$generate,
        'message'=>$message), true);
}
//Наши проекты (шорткод)
function our_projects_sc(){
    global $wpdb;

    $generate = "";

    $slides = $wpdb->get_results("SELECT * FROM our_projects");
    foreach ($slides as $slide) {
        $generate .= '<div class="proj__block">
              <div class="contain">
                <div class="proj__block--text">
                  <img src="'.$slide->logo_url.'" alt="">
                  <p>' .$slide->description. ' </p>
                    <a href="' .$slide->url. '" class="proj__block--text--but">О ПРОЕКТЕ</a>
                </div>
                <div class="proj__block--img">
                  <div class="proj__block--img--box">
                    <img class="proj_thumb" src="' .$slide->img_url. '" alt="">
                  </div>
                </div>
              </div>
            </div>';
    }

    return $generate;
}
add_shortcode('our_projects', 'our_projects_sc');

//Наши проекты (админка)
function trust_us(){
    global $wpdb;

    if (function_exists('wp_enqueue_media')) {
        wp_enqueue_media();
    } else {
        wp_enqueue_style('thickbox');
        wp_enqueue_script('media-upload');
        wp_enqueue_script('thickbox');
    }

    if(isset($_GET['del_block'])){
        $wpdb->delete('trust_us',array("id" => $_GET['del_block']));
        $message = "Блок успешно удален!";
    }

    if(isset($_POST['attachment_url'])){

        if(isset($_POST['changed'])){
            $wpdb->update('trust_us', array("img_url" => $_POST['attachment_url']),array('id' => $_POST['changed']));
            $message = "Блок успешно обновлен!";
        }else{
            $wpdb->insert('trust_us', array("img_url" => $_POST['attachment_url']));
            $message = "Блок успешно добавлен!";
        }

        echo mysql_error();
    }


    $generate = '';

    $blocks = $wpdb->get_results("SELECT * FROM trust_us");
    foreach ($blocks as $block) {
        $generate .= "<tr data-slide-id='".$block->id."'>
            <td class='curr_img' style='padding-right: 10px'><img src='". $block->img_url. "' alt='' style='width: 50px;'/></td>
            <td>
                <a href='#' class='change_trust'>Редактировать</a>
                <a href='/wp-admin/admin.php?page=trust_us&del_block=$block->id'>Удалить</a></td>
        </tr>";
    }


    $parser = new Parser();
    $parser->parse(TM_DIR."/views/admin_trust.php",array('slides'=>$generate,
        'message'=>$message), true);
}
//Наши проекты (шорткод)
function trust_us_sc(){
    global $wpdb;

    $generate = "";

    $blocks = $wpdb->get_results("SELECT * FROM trust_us");
    foreach ($blocks as $block) {
        $generate .= '<div class="trust__block">
            <img src="'.$block->img_url.'" alt="">
          </div>';
    }

    return $generate;
}
add_shortcode('trust_us', 'trust_us_sc');

// custom menu example @ https://digwp.com/2011/11/html-formatting-custom-menus/
function clean_custom_menus() {
    $menu_name = 'sidebar'; // specify custom menu slug
    if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
        $menu = wp_get_nav_menu_object($locations[$menu_name]);
        $menu_items = wp_get_nav_menu_items($menu->term_id);

        $menu_list = '<div class="sidebar">' ."\n";
        $menu_list .= "\t\t\t\t". '<ul>' ."\n";
        foreach ((array) $menu_items as $key => $menu_item) {
            $title = $menu_item->title;
            $url = $menu_item->url;
            $menu_list .= "\t\t\t\t\t". '<a href="'. $url .'"><li>'. $title .'</li></a>' ."\n";
        }
        $menu_list .= "\t\t\t\t". '</ul>' ."\n";
        $menu_list .= "\t\t\t". '</div>' ."\n";
    } else {
        // $menu_list = '<!-- no list defined -->';
    }
    echo $menu_list;
}
