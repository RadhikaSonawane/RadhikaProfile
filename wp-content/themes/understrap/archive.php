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

<div class="container tips-archive ">
    <div class="text-center" >
       <h1><?php single_cat_title(); ?></h1>
         </div>
                   
            <div class="row"> 
				 <?php while ( have_posts() ) : the_post(); ?>
                                <div class="col-sm-4 text-center">
									<div class=" decor">
										<div>
											<?php  if ( has_post_thumbnail() ) { ?>
											<img  class="image" src="<?php the_post_thumbnail_url(); ?>" alt="Card image cap">
											<?php } ?>  
											</div>

                                		<div class="card-body">
                                        	<h3 class="card-title test"><a href="<?php the_permalink(); ?>"><?php echo $post->post_title; ?></a></h3>
                                        	<?php the_excerpt();?>
                                		</div>
									</div>
                                </div>
                                    <?php endwhile; // end of the loop. ?>
           </div><!-- /.row -->
</div> <!-- container-->

                        
<?php get_footer(); ?>