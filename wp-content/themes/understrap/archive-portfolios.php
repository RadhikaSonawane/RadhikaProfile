<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

get_header();
?>

<?php
$container   = get_theme_mod( 'understrap_container_type' );
?>
<div class="row">

			<!-- Do the left sidebar check -->
			<?php //get_template_part( 'global-templates/left-sidebar-check' ); ?>
<div class="container">
			<main class="site-main" id="main">
<div class="row">
				<?php if ( have_posts() ) : ?>
<div class="col-sm-12 col-lg-8 col-md-8">
					<header class="page-header">
						<?php
						the_archive_description( '<div class="taxonomy-description">', '</div>' );
						?>
					</header><!-- .page-header -->

					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<?php

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'loop-templates/content', get_post_format() );
						?>

					<?php endwhile; ?>

				<?php else : ?>

					<?php get_template_part( 'loop-templates/content', 'none' ); ?>

				<?php endif; ?>

		</div>
		<?php
		get_template_part( 'taxonomy-subject', 'taxonomy-subject');
						/**
		 * Create an unordered list of links to active location archives
		 */
		$locations_list = wp_list_categories( array(
		  'taxonomy' => 'subjects',
		  'orderby' => 'name',
		  'show_count' => 0,
		  'pad_counts' => 0,
		  'hierarchical' => 9,
		  'echo' => 0,
		  'title_li' => 'Subjects'
		) );

		// Make sure there are terms with articles
		if ( $locations_list )
		  echo '<ul class="locations-list">' . $locations_list . '</ul>';
		?>
		<div class="col-sm-12 col-sm-8 col-lg-4 sidebar">
                    <div class="container-fluid blog-sidebar">
                                <div class="sitebar">
                                    <?php if(is_active_sidebar('custom-side-bar')):?>
                                    <?php dynamic_sidebar('custom-side-bar');?>
                                    <?php endif; ?>
                                </div>
                    </div>  <!--/row-->
        </div><!--/col-md-4-->
	</main><!-- #main -->
		</div>
			<!-- The pagination component -->
			<?php understrap_pagination(); ?>

		</div><!-- #primary -->
		<!-- Do the right sidebar check -->
		<?php// get_template_part( 'global-templates/right-sidebar-check' ); ?>
	</div> <!-- .row -->

<?php get_footer(); ?>
