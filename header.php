<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title>
	<?php if ( is_tag() ) {
			echo 'Tag Archive for &quot;'.$tag.'&quot; | '; bloginfo( 'name' );
		} elseif ( is_archive() ) {
			wp_title(); echo ' Archive | '; bloginfo( 'name' );
		} elseif ( is_search() ) {
			echo 'Search for &quot;'.wp_specialchars($s).'&quot; | '; bloginfo( 'name' );
		} elseif ( is_home() ) {
			bloginfo( 'name' ); echo ' | '; bloginfo( 'description' );
		}  elseif ( is_404() ) {
			echo '404 Not Found | '; bloginfo( 'name' );
		} else {
			echo wp_title( ' | ', false, right ); bloginfo( 'name' );
		} ?>
	</title>
	<!--
		Semi dynamic meta keywords and meta description. Google likes meta info that changes for each page.
		While these meta keywords are not ideal and the meta description could be better, they are better than nothing.
	-->
	<meta name="keywords" content="<?php wp_title(); echo ' , '; bloginfo( 'name' ); echo ' , '; bloginfo( 'description' ); ?>" />
	<meta name="description" content="<?php wp_title(); echo ' | '; bloginfo( 'description' ); ?>" />
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="index" title="<?php bloginfo( 'name' ); ?>" href="<?php echo get_option('home'); ?>/" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'rss2_url' ); ?>" />
	<link rel="alternate" type="application/atom+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'atom_url' ); ?>" />
	<link rel="canonical" href="<?php echo curPageURL(); ?>" />
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<!--
		Pulls the latest version of jQuery from Google's CDN - Learn more: http://code.google.com/apis/libraries/
	-->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php  if (is_user_logged_in()) { ?>
<div id="if-logged-in">
	<div class="container">
		<p class="left">
			<a href="<?php bloginfo('url'); ?>/wp-admin/">Control Panel</a>
			<a href="<?php bloginfo('url'); ?>/wp-admin/edit.php">Posts</a>
			<a href="<?php bloginfo('url'); ?>/wp-admin/edit.php?post_type=page">Pages</a>
			<a href="<?php bloginfo('url'); ?>/wp-admin/edit-comments.php">Comments</a>
			<a href="<?php bloginfo('url'); ?>/wp-admin/upload.php">Media Library</a> 
		</p>
		<p class="right">
			<a href="<?php bloginfo('url'); ?>/wp-admin/options-general.php">Settings</a>
			<a href="<?php bloginfo('url'); ?>/wp-admin/profile.php">Profile</a>
			<?php wp_loginout() ?>
		</p>
	</div>
</div><!--#if-logged-in-->
<?php } ?>

<div id="main"><!-- this encompasses the entire Web site -->
	<header>
		<div class="container">
			<?php if( is_front_page() || is_home() ) { ?>
				<h1><a href="<?php bloginfo('url'); ?>/" title="<?php bloginfo('description'); ?>"><?php bloginfo('name'); ?></a></h1>
			<?php } else { ?>
				<h2><a href="<?php bloginfo('url'); ?>/" title="<?php bloginfo('description'); ?>"><?php bloginfo('name'); ?></a></h2>
			<?php } ?>
			<p><?php bloginfo('description'); ?></p>
			<nav class="primary">
				<?php wp_nav_menu( array('menu' => 'Header Menu' )); ?>
			</nav><!--.primary-->
			<?php if ( ! dynamic_sidebar( 'Header' ) ) : ?>
				<!-- Wigitized Header -->
			<?php endif ?>
		</div><!--.container-->
	</header>
	<div class="clear"></div>
	<div class="container">