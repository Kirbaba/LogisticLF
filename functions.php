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
}

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
        $wpdb->insert('main_slider', array("img_url" => $_POST['attachment_url'],
            "title" => $_POST['title'],"description" => $_POST['description'],"url" => $_POST['url'],));
        $message = "Слайд успешно добавлен!";
        echo mysql_error();
    }


    $generate = '';

    $slides = $wpdb->get_results("SELECT * FROM main_slider");
    foreach ($slides as $slide) {
        $generate .= "<tr>
            <td style='padding-right: 10px'><img src='". $slide->img_url. "' alt='' style='width: 50px;'/></td>
            <td>". $slide->title ."</td>
            <td>". $slide->description ."</td>
            <td><a href='". $slide->url ."'>". $slide->url ."</a></td>
            <td><a href='/wp-admin/admin.php?page=main_slider&del_slide=$slide->id'>Удалить</a></td>
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


