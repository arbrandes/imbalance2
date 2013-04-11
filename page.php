<?php get_header(); ?>

        <?php echo get_the_post_thumbnail( $post->ID, 'post-thumbnail' ); ?>
		<div id="container">
			<div id="content" role="main">

			<?php get_template_part( 'loop', 'page' ); ?>

			</div><!-- #content -->
		</div><!-- #container -->

<?php get_footer(); ?>
