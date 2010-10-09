<?php get_header(); ?>
	<div id="content">
		<?php if ( ! dynamic_sidebar( 'Alert' ) ) : ?>
			<!--Wigitized 'Alert' for the home page-->
		<?php endif ?>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
			<?php echo '<div class="featured-thumbnail">'; the_post_thumbnail(); echo '</div>'; ?>
			<div class="post-content">
				<?php the_content(__('Read more'));?>
			</div>
			<div class="post-meta">
				<p>
					Written on <?php the_time('F j, Y'); ?> at <?php the_time() ?>, by <?php the_author_posts_link() ?>
				</p>
				<p>
					<?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?>
					<br />
					Categories: <?php the_category(', ') ?>
					<br />
					<?php if (the_tags('Tags: ', ', ', ' ')); ?>
				</p>
			</div><!--.postMeta-->
			
		<?php endwhile; else: ?>
			<div class="no-results">
				<p>
					<strong>There has been a glitch in the Matrix.</strong>
					<br />
					There is nothing to see here.
				</p>
				<p>
					We apologize for any inconvenience, please try somewhere else.
				</p>
			</div><!--noResults-->
		<?php endif; ?>
			
		<nav class="oldernewer">
			<div class="older">
				<p>
					<?php next_posts_link('&laquo; Older Entries') ?>
				</p>
			</div><!--.older-->
			<div class="newer">
				<p>
					<?php previous_posts_link('Newer Entries &raquo;') ?>
				</p>
			</div><!--.older-->
		</nav><!--.oldernewer-->

	</div><!--#content-->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
