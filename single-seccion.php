<?php

get_header();

if (have_posts()){
  while( have_posts() ) {
    the_post(); 
    $slug = the_slug();
    $titulo = get_the_title();
    $contenido = foo_filter( get_the_content(), "content");

    $seccion = foo_div("","titulo", foo_h( $titulo, 2 ) );

    if( foo_featImg() != "" ){
      $img = foo_img( foo_featImg() );
      $seccion .= $img;
    }
    $seccion .= foo_div("","contenido",$contenido);
  }
}
$articulos = "";

$args = array('post_type'=>'articulo','seccion'=>$slug);
$query = new WP_Query( $args );
while ($query->have_posts()){

  $query->the_post();
  $titulo = get_the_title();
  $titulo = foo_filter( $titulo, 'title');
  $titulo = foo_div("","titulo",$titulo); 
  $extracto = get_the_excerpt();
  $extracto = foo_filter( $extracto, 'excerpt');
  $extracto= foo_div("","extracto",$extracto);
  if( foo_featImg() ) {
    $img = foo_img( foo_thumb( foo_featImg(), 300, 200 ) );
  } 
  $link = get_permalink();
  
  $articulos .= foo_div("","articulo", $titulo . $img. $extracto, $link );
}


$echo = foo_div("seccion","",$seccion);
$echo .= foo_div("articulos","",$articulos);
$echo = foo_div("","large-12 columns",$echo);

$echo .= '<script type="text/javascript">';
$echo .= 'jQuery(document).ready(function($){';
$echo .= 'var articulos = $("#articulos");';
$echo .= 'articulos.masonry({ columnWidth: 230, itemSelector: ".articulo" });';
$echo .= '});';
$echo .= '</script>';




echo $echo;

get_footer();
?>