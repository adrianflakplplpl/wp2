<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="header test">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="" srcset="" class="logo">
			<?php
    			wp_nav_menu(
					array(
						'container'            => 'nav',
						'container_class' => 'mainmenu',
						'menu_class'           => 'mainmenu-inner',
						'theme_location'  => 'primary',
					)
				);
 			?>
			<?php
    			wp_nav_menu(
					array(
						'container'            => 'nav',
						'container_class' => 'mainmenu-right',
						'menu_class'           => 'mainmenu-inner',
						'theme_location'  => 'secondary',
					)
				);
 			?>

           
        </header>
	
	<?php echo do_shortcode('[metaslider id="28"]'); ?>