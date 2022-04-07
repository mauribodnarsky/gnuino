<?
add_filter('nav_menu_css_class' , 'gnuino_nav_class' , 10 , 2);
 
function gnuino_nav_class($classes, $item){
    $classes[] = 'nav-link';
    return $classes;
}
