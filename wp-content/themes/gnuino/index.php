<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

get_header();
?>


  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <!-- SE MUESTRA EL CONTENIDO DEL POST -->
 <h2>hola</h2>
            <div class="card mb-4">
            <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
            <div class="card-body">
                <h2 class="card-title"><?= the_title();?></h2>
                <p class="card-text">HOLA GNUINO!</p>
                <a href="#" class="btn btn-primary">Read More &rarr;</a>
            </div>
            <div class="card-footer text-muted">
                Posted on January 1, 2017 by
                <a href="#">Start Bootstrap</a>
            </div>
            </div>
            
            <!--
                AQUI VA EL HTML Y PHP DE LOS POSTS DEL HOME
             -->
       
        <?php endwhile; else : ?>
            <!-- SI NO SE CONSIGUE NINGÚN POST, SE RETORNA UN MENSAJE: -->
            <p>Lo siento, no hemos encontrado ningún post.</p>
 
        <?php endif; ?>
           <!-- SE DETIENE EL LOOP --><?php
get_footer();
