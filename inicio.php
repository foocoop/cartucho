<?php
/*
Template Name: Inicio
*/

get_header();

$args = array(
  'post_type' => 'numero',
  'tax_query' => array(
    array(
      'taxonomy' => 'mostrar_en',
      'field' => 'slug',
      'terms' => 'portada'
    )
  ),
  'posts_per_page' => 1
);

$tiempos = new WP_Query( $args );
if ( $tiempos -> have_posts() ) {
  $tiempos -> the_post();
  $meta = get_post_meta( get_the_ID() ); 
  $plantilla = $meta["plantilla"];
  $contenido = require( $plantilla[0] );
}


echo $contenido;

get_footer();

?>
