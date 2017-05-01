<?php
/*
Template Name: Full Width (No Sidebar)
*/
?>


<?php get_header(); ?>
<div class="main-content-section">
  <div class="main-content-section-img">
    <img class="hide-for-small-only" data-interchange="[<?php the_field('top_image_medium'); ?>, medium], [<?php the_field('top_image_large'); ?>, large]">
  </div>
  <div class="main-content-section-block" style="background-image: url('<?php the_field('album_cover_large'); ?>">
    <h3 class="album-header"><?php the_field('album_header'); ?></h3>
      <?php the_field('bandcamp'); ?>
  </div>
  <div class="main-content-section-block small-order-2 medium-order-1">
    <?php
    $options = array(
      'scope' => 'upcoming',
      'artist' => 1,
      'title' => 'Upcoming shows',
      'show_feeds' => 'yes',
      'limit' => 3);
    echo gigpress_shows($options);
?>
  </div>
  <div class="main-content-section-img small-order-1 medium-order-2">
    <img data-interchange="[<?php the_field('bottom_image_small'); ?>, small][<?php the_field('bottom_image_medium'); ?>, medium], [<?php the_field('bottom_image_large'); ?>, large]">
  </div>
</div>



	<section class="members-three-up">
		<p>This will eventually be some sort of fancy-pants bio that mentions that some of us used to be in Forstella Ford, and some other bands. About how we're old and we've been around, but we're not too old, and we still love to do this shit, even if we can't go on tour 6 months a year.</p>
	  <div class="row medium-unstack">
	    <div class="columns">
	      <img src="<?php the_field('eric_photo'); ?>" class="img-circle">
	      <h4 class="members-three-up-title">Eric Madl</h4>
	      <p class="members-three-up-desc">Vocals, Guitar.</p>
	    </div>
	    <div class="columns">
	      <img src="<?php the_field('nick_photo'); ?>" class="img-circle">
	      <h4 class="members-three-up-title">Nicholas Sheppard</h4>
	      <p class="members-three-up-desc">Bass, Vocals.</p>
	    </div>
	    <div class="columns">
	      <img src="<?php the_field('mark_photo'); ?>" class="img-circle">
	      <h4 class="members-three-up-title">Mark Sheppard</h4>
	      <p class="members-three-up-desc">Drums.</p>
	    </div>
	  </div>
	</section>

<?php get_footer(); ?>
