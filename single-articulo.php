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

	<?php if ( has_post_thumbnail()) : ?>
	<a href="<?php the_permalink(); ?>" class="th" title="<?php the_title_attribute(); ?>" ><?php the_post_thumbnail(); ?></a>
	<?php endif; ?>
	
	<?php the_content(); ?>

	<footer>

		<p><?php wp_link_pages(); ?></p>

		<h6><?php _e('Posted Under:', 'foundation' );?> <?php the_category(', '); ?></h6>
		<?php the_tags('<span class="radius secondary label">','</span><span class="radius secondary label">','</span>'); ?>

		<?php get_template_part('author-box'); ?>
		<?php comments_template(); ?>

	</footer>

</article>

<?php


  }
}


get_footer(); ?>