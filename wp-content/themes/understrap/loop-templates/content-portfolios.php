<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header text-center">

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta text-center">
			<?php understrap_posted_on(); ?>

		</div><!-- .entry-meta -->

	</header><!-- .entry-header -->
    <div class="text-center">
		<?php echo get_the_post_thumbnail( $post->ID, 'post-thumbnail size' ); ?>
    </div>
	<div class="entry-content text-center">

		<?php the_content(); ?>
	
			<a class="btn btn-danger" href="<?php echo get_field('link'); ?>">Continue Reading</a>



	</div><!-- .entry-content -->



</article><!-- #post-## -->
