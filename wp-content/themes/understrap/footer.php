<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>


				<footer class="site-footer" id="colophon">

					<div class="container">
        			<div class="row">

									<div style="color: #f5f2ed;" class="col-sm-12 col-md-6 col-lg-6 ">
									<h2><a style="color: #f5f2ed;" href=" http://radhikaprofile.test/contact_us/102-2/">Contact Us</a></h2>
									<li>Radhika S Sonawane</li>
									<li>XYZ, 123 45, Malmö</li>
									</div>
      

									<div class="col-sm-12 col-md-6 col-lg-6 " id="social_media_links">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-linkedin"></i></a>
									<a href="#"><i class="fa fa-instagram"></i></a>
									</div>
							</div>
						</div>

<?php wp_footer(); ?>

<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>

</body>

</html>

