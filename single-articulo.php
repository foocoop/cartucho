<?php

get_header();

foo_div("","large-12 columns",$single);

if ( have_posts() ) {
  while ( have_posts() ) {
    the_post();
    $meta = get_post_meta( get_the_ID() );
    $autorxs = $meta["autorxs"][0];
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header>
		<hgroup>
			<h2><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'foundation' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
			<h6><?php echo $autorxs; ?></h6>
		</hgroup>
	</header>

	<?php
        $img = foo_img( foo_featImg() );
        echo foo_div("","imagen",$img);
        $txt = get_the_content();
        $txt = foo_filter( $txt, 'content' );
        
        echo foo_div("","texto columnas",$txt);

        /* $imgarr = foo_imgs($post->ID);
        $imgs = "";
        foreach($imgarr as $img ) {
        $imgs = foo_img($img[0]);
        }
        echo foo_div("","imgs",$imgs); */

        ?>
        </div>
	<footer>

	</footer>

</article>

<?php


  }
}


get_footer(); ?>