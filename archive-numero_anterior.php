<?php
/*
Template Name: numeros vivos
archive-numero_anterior.php
 */

get_header();

$numeros = "";
$args = array('post_type'=>'numero_anterior','posts_per_page'=>-1);
$query = new WP_Query( $args);
while ($query->have_posts()){

  $query->the_post();
  
  if( foo_featImg() ) {
    $img = foo_img(foo_featImg());
  }
  else {
    $img = NULL;
  }

  $meta = get_post_meta( get_the_ID() );
  $link = $meta['url'][0];

  $numeros .= foo_div("","numero_anterior", $img, $link );

}


$numeros = foo_div("numeros_anteriores","",$numeros);

echo $numeros;


get_footer();

?>