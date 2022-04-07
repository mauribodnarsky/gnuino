<?php

add_action( 'after_setup_theme', 'gnuino_registrar_menu' );

function gnuino_registrar_menu() {
    register_nav_menu( 'menu-principal', 'Menu Principal' );
}

function jc_change_image_logo() { 
?>
  <style type="text/css">
    #login h1 a, .login h1 a {
    background-image: url('http://localhost:8080/gsh/wp-content/themes/gnuino/images/logognuino.png');
      background-repeat: no-repeat;
      background-size: cover;
      height: 150px;
      width: 150px;

    }
  </style>
<?php 
}

add_action( 'login_enqueue_scripts', 'jc_change_image_logo' );
function mensajeLogin()
{
return "<p align='center'>Bienvenido a <b>gnuino software maldita perra</b>.<br/>
Por favor ingresa en tu cuenta</p><br/>";
}

add_filter( 'login_message', 'mensajeLogin' );
$menu = array(
            'menu'            => 'menu-principal',
            'container'       => 'div',
            'container_class' => 'collapse navbar-collapse',
            'container_id'    => 'navbarResponsive',
            'menu_class'      => 'navbar-nav ml-auto',
            'menu_id'         => '',
            'echo'            => true,
            'fallback_cb'     => 'wp_page_menu',
            'before'          => '',
            'after'           => '',
            'link_before'     => '',
            'link_after'      => '',
            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'item_spacing'    => 'preserve',
            'depth'           => 0,
            'walker'          => '',
            'theme_location'  => '',
        );
        wp_nav_menu($menu);
        ?>