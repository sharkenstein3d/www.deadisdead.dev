<!-- By default, this menu will use off-canvas for small
	 and a topbar for medium-up -->

<div class="top-bar" id="top-bar-menu">
	<div class="top-bar-left hide-for-small-only">
		<?php wp_nav_menu( array( 'jointswp' => 'social-links' ) ); ?>
	</div>
	<div class="top-bar-right show-for-medium">
		<?php joints_top_nav(); ?>
	</div>

	<div class="menu-btn">
		<div class="top-bar-right show-for-small-only">
			<ul class="menu">
				<li><a data-toggle="off-canvas"><i class="fa fa-bars fa-2x" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</div>
</div>
