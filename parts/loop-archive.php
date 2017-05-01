



<article class="row align-center blog-entry">
	<div class="small-12 medium-8 columns">
		<div class="card blog-entry-container">
		  <div class="card-divider article-header">
		    <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
		  </div>
		  <section class="card-section entry-content">
		    <?php the_content('<button class="tiny">' . __( 'Read more...', 'jointswp' ) . '</button>'); ?>
		 </section>
		 <?php the_post_thumbnail('large'); ?>
	</div>

	</article>
