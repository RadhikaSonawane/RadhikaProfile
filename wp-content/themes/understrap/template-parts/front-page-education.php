<section class="educations" id="educations">

<div class="container">

    <h1 class="my-4 text-center"><a href="http://radhikaprofile.test/category/educations/">Education</a><h1>


            <?php
                    // hämta ut alla blogginlägg från kategorin USPs
                    $educations = new WP_Query([
                        'cat' => 2,					// hämta bara inlägg ifrån kategori med ID 2
                        'order_by' => 'post_title',	// sortera efter inläggets titel
                        'order' => 'ASC',			// sortera i bokstavsordning (A-Z)
                        'posts_per_page' => 4,		// hur många inlägg per sida vill vi visa
                    ]);
                    if ($educations->have_posts()) :
                        ?>

                  <div class="row">


                        <?php while ($educations->have_posts()) : ?>
                                    <?php $educations->the_post(); ?>


                        <div class="col-sm-6 text-center">

                             <?php the_post_thumbnail($post->ID, 'post-thumbnail size' );?>
                            <h3 class="all-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            
                        </div>

                        <?php endwhile; ?>

			</div><!-- /.row -->

				<?php
			endif;
		?>


</div>
