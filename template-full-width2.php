<?php
/*
Template Name: Full Width2 - testes (No Sidebar)
*/
?>
<?php get_header(); ?>

<div id="records" class="album-section row">
  <div class="album-description-home small-12 large-6 align-center columns small-order-2 large-order-1">
    <?php the_field('album_description'); ?>
    <?php the_field('bandcamp_embed_small'); ?>
    <a class="button buy-album-button" href="<?php the_field('buy_album_link'); ?>">BUY ALBUM</a>
  </div>
  <div class="album-cover-container-home small-12 large-6 columns align-center small-order-1 large-order-2">
    <img class="album-cover-home" src="<?php the_field('album_cover'); ?>">

  </div>
</div>

<div id="shows" style="background-image: url('<?php the_field('bg_image'); ?>'); background-size: cover;">
  <h2 class="shows-header">Upcoming Shows</h2>
  <div class="shows-section row align-center">
    <div class="small-12 medium-8 columns">
      <?php
      $options = array('scope' => 'upcoming', 'artist' => 1, 'limit' => 10);
      echo gigpress_shows($options);
  ?>
    </div>
  </div>
</div>



	<section class="members-three-up">
		<p>This will eventually be some sort of fancy-pants bio that mentions that some of us used to be in Forstella Ford, and some other bands. About how we're old and we've been around, but we're not too old, and we still love to do this shit, even if we can't go on tour 6 months a year.</p>
	  <div class="row medium-unstack">
	    <div class="columns">
	      <img src="<?php the_field('eric_photo'); ?>" class="img-circle member-photo">
	      <h4 class="members-three-up-title">Eric Madl</h4>
	      <p class="members-three-up-desc">Vocals, Guitar.</p>
	    </div>
	    <div class="columns">
	      <img src="<?php the_field('nick_photo'); ?>" class="img-circle member-photo">
	      <h4 class="members-three-up-title">Nicholas Sheppard</h4>
	      <p class="members-three-up-desc">Bass, Vocals.</p>
	    </div>
	    <div class="columns">
	      <img src="<?php the_field('mark_photo'); ?>" class="img-circle member-photo">
	      <h4 class="members-three-up-title">Mark Sheppard</h4>
	      <p class="members-three-up-desc">Drums.</p>
	    </div>
	  </div>
	</section>

<?php get_footer(); ?>
