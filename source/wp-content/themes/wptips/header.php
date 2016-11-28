<!doctype html> 
<html lang="en"> 
<head>
  <meta charset="utf-8">
  <title><?php echo get_bloginfo('name');?></title>
    <meta charset="utf-8" />
    <meta content='text/html; charset=utf-8' http-equiv='Content-Type'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0'>
	<link href='https://fonts.googleapis.com/css?family=Merriweather:300,400,700,900' rel='stylesheet' type='text/css'>

<?php wp_head(); ?>

</head>
<body>

	<header>
		<div class="logo"></div>
		<div class="title"><?php echo get_bloginfo('name');?></div>
	</header>
	<? 
	$args = array(
			'container' => 'nav',
			'container_class' => 'menu',
			'echo' => true,
			'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			'depth' => 0,
			'theme_location' => ''
			);
	wp_nav_menu( $args ); ?>

	<div class="languages">
	<?php _e('Select your language:');?>
		<?php 
		include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
		if (is_plugin_active('qtranslate-x/qtranslate.php')) {
			echo qtranxf_generateLanguageSelectCode('text');
		}?>
	</div>
	<div id="search-demo-container">
		<div class="container">
			<?php get_search_form(); ?>
		</div>
	</div>
	<div class="wrap">

