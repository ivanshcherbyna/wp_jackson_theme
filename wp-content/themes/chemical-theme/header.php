<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>

	</head>
	<body <?php body_class(); ?>>
	<?php global $mytheme; ?>
	<!-- wrapper -->
	<div class="wrapper">
		<header class="header" role="banner">
			<a class="header-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img  src="<?php echo $mytheme['logo-header']['url'];?>" /></a>
			<div id="navigation"  class="nav-container">
				<!-- nav -->
<!--				<nav class="nav" role="navigation">-->
<!--					--><?php my_nav(); get_search_form(true);?>
<!--				</nav>-->
				<!-- /nav -->

			</div>

			


		</header>				
