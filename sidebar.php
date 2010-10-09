<div id="sidebar">
	<?php if ( ! dynamic_sidebar( 'Sidebar' )) : ?>

		<li id="sidebar-search" class="widget">
			<h3>Search</h3>
			<?php get_search_form(); ?>
		</li>
		
		<li id="sidebar-nav" class="widget menu">
			<h3>Navigation</h3>
			<ul>
				<?php wp_nav_menu( array('menu' => 'Sidebar Menu' )); ?>
			</ul>
		</li>
		
		<li id="sidebar-archives" class="widget">
			<h3>Archives</h3>
			<ul>
				<?php wp_get_archives( 'type=monthly' ); ?>
			</ul>
		</li>

		<li id="sidebar-meta" class="widget">
			<h3>Meta</h3>
			<ul>
				<?php wp_register(); ?>
				<li><?php wp_loginout(); ?></li>
				<?php wp_meta(); ?>
			</ul>
		</li>

	<?php endif; ?>
</div><!--sidebar-->