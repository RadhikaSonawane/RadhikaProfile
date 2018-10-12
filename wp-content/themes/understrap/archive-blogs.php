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
	<!-- Do the left sidebar check -->
	<?php //get_template_part( 'global-templates/left-sidebar-check' ); ?>
	<div class="container">
		<main class="site-main" id="main">
		
				<?php if ( have_posts() ) : ?>
				
					<header class="page-header">
						<?php
						the_archive_description( '<div class="taxonomy-description">', '</div>' );
						?>
					</header><!-- .page-header -->
							<?php /* Start the Loop */ ?>						
						<div class="row">	
							<?php while ( have_posts() ) : the_post(); ?>
								<div class="col-sm-12 col-lg-4 col-md-4 blog">

									<?php
									/*
									* Include the Post-Format-specific template for the content.
									* If you want to override this in a child theme, then include a file
									* called content-___.php (where ___ is the Post Format name) and that will be used instead.
									*/
									
									get_template_part( 'loop-templates/blog', get_post_format() );
									?>
								</div>
							<?php endwhile; ?>
							<?php else : ?>
							<?php get_template_part( 'loop-templates/content', 'none' ); ?>
							<?php endif; ?>
			
						</div>
		</main><!-- #main -->
	
		<!-- The pagination component -->
		<?php understrap_pagination(); ?>
		<!-- Do the right sidebar check -->
		<?php// get_template_part( 'global-templates/right-sidebar-check' ); ?>
	</div>
<?php get_footer(); ?>
