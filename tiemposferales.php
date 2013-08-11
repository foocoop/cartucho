<?php
//$titulo = foo_div("","titulo",get_the_title());
$img = foo_img( foo_featImg() );
$contenido = get_the_content();
$contenido = foo_filter( $contenido, 'content');
$contenido = foo_div("","contenido", $contenido );
//$numero = $titulo . $img . $contenido;
$numero = $img . $contenido;

$articulos = "";

$args = array('post_type'=>'seccion','posts_per_page'=>-1);
$query = new WP_Query( $args);
while ($query->have_posts()){

  $query->the_post();
  $titulo = "";
  $titulo = get_the_title();
  $titulo = foo_filter( $titulo, "title" );
  $titulo = foo_div("","titulo",$titulo); 
  $extracto = foo_filter(get_the_excerpt(),'excerpt');
  $extracto= foo_div("","extracto",$extracto);
  if( foo_featImg() ) {
    $img = foo_img( foo_thumb( foo_featImg(), 300, 200 ) );
  }
  else {
    $img = NULL;
  }

  $link = get_permalink();

  $articulos .= foo_div("","articulo", $titulo . $img. $extracto, $link );

}


$echo = foo_div("seccion","", $numero);
$echo .= foo_div("articulos","",$articulos);
$echo = foo_div("","large-12 columns",$echo);
$echo .= '<script type="text/javascript">';
$echo .= 'jQuery(document).ready(function($){';
$echo .= 'var articulos = $("#articulos");';
$echo .= 'var articulos_num = $("#articulos .articulo").length;';
$echo .= 'if( articulos_num > 4 ) articulos_num = 4;';
$echo .= 'var width = articulos.width();';
$echo .= 'var col_width = width / articulos_num;';
$echo .= 'articulos.masonry({ columnWidth: col_width, itemSelector: ".articulo" });';
$echo .= '});';
$echo .= '</script>';

return $echo;

?>