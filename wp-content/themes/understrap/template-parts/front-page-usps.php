<section class="usps" id="usps">

    <!-- Page Content -->
    <div class="container text-center">


    <?php
    			// hämta ut alla blogginlägg från kategorin USPs
    			$usps = new WP_Query([
            'cat' => '3',
    				'order_by' => 'post_title',	// sortera efter inläggets titel
    				'order' => 'ASC',			// sortera i bokstavsordning (A-Z)
    				'posts_per_page' => 1,		// hur många inlägg per sida vill vi visa
    			]);

          if ($usps->have_posts()) :
      ?>

        <div class="row mb-4">
            <?php while ($usps->have_posts()) : ?>
              <?php $usps->the_post(); ?>

              <div class="usp">
							<h1 class="text-center"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
              <div class="Responsive-image"><?php the_post_thumbnail('my-image');?></div>
  							<p class="content">	<?php the_content(); ?></p>
  							</div>

				</div><!-- /.usp -->

            <?php endwhile; ?>
					</div><!-- /.row -->
				<?php
			endif;
		?>

</section>
