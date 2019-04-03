<?php /* Template Name: Contact Us*/?>

<?php
get_header(); // header.php
?>

<div class="container location">
        <?php
        get_taxonomies();
        $addres = get_taxonomies();?>
        <h1><?php echo $addres['location']; ?></h1>
        <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6 card find">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2255.9136883892606!2d12.992439715923416!3d55.568701480504544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4653a124c5dc5efb%3A0xc262dc18cdd21cc6!2sVelandergatan+110%2C+215+65+Malm%C3%B6!5e0!3m2!1ssv!2sse!4v1538389463430" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
     </div>

    <div class="col-sm-12 col-md-6 col-lg-6 card us text-center">
      <h3>Radhika sonawane</h3>
          <?php echo the_field('street_address');?>,
          <?php echo the_field('post_number');?>,
          <?php echo the_field('city_name');?>,
          <?php echo the_field('contry_name');?>
          <li>E-post:example@test.com</li>
          <li><?php _e( 'Mobile:', 'understrap' ); ?> # 0123 456 78 </li>
    </div>
  </div>
</div>
<?php get_footer();?>
