<?php get_template_part('blog-header'); ?>

<div id="content">

	<div id="inner-content" class="row align-center">

		<main id="main" class="small-12 medium-8 columns" role="main">
			 <h4 class="blog-header-single"><?php single_post_title( '' ); ?></h4>

				<?php the_post_thumbnail( 'medium_large' ); ?>

		    <p><?php the_content( '' ); ?></p>
		</main> <!-- end #main -->

		<section class="small-12 medium-8 columns">
		<?php get_sidebar(); ?>
	</section>

	</div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>
