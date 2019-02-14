<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="SHORTCUT ICON" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-134155339-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-134155339-1');
</script>
<?php wp_head(); ?>
</head>
<body <?php body_class('pmenu-push'); ?>>

<?php
	$latte_menu_display = get_theme_mod('latte_menu_display');
?>

	<div class="site-wrapper">

	<?php if( isset($latte_menu_display) && $latte_menu_display != 1 ): ?>

		<nav class="pmenu pmenu-vertical pmenu-left" id="pmenu">
			<h3 id="hideLeftPush"><?php _e( 'Ryo&apos;s Portfolio', 'latte' ); ?></h3>
			<?php
			wp_nav_menu(array(
				'theme_location' => 'primary',
				'menu' => __( 'Primary Menu', 'latte' ),
				'fallback_cb' => 'latte_new_setup',
				'items_wrap' => '<ul class="latte-push-menu">%3$s</ul>'
			));
			?>
		</nav>

		<a id="showLeftPush" class="fa fa-bars"></a>

	<?php endif; ?>