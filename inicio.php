<?php
/*
Template Name: Inicio
*/

get_header();



foreach( $i = 0; $i < 15; $i++ ) {

  $articulos .= foo_div("","articulo","...");

}


get_footer();

?>
