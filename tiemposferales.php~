<?php

$args = array('post_type'=>'articulo');
$query = new WP_Query( $args);

while ($query->have_posts()){

  $query->the_post();
  $titulo = get_the_title();
  $titulo = foo_div("","titulo",$titulo); 
  $extracto = get_the_excerpt();
  $extracto= foo_div("","extracto",$extracto);
  $link = get_permalink();

  $articulos .= foo_div("","articulo", $titulo . $extracto, $link );
}



$echo = foo_div("articulos","",$articulos);
$echo = foo_div("","large-12 columns",$echo);

echo $echo;

?>

<script type="text/javascript">

 jQuery(document).ready(function($){
   var articulos = $('#articulos');

   articulos.masonry({
     columnWidth: 250,
     itemSelector: '.articulo'
   });
 });

</script>
