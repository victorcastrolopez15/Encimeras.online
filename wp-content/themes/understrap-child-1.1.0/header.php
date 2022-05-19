<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$bootstrap_version = get_theme_mod( 'understrap_bootstrap_version', 'bootstrap4' );
$navbar_type       = get_theme_mod( 'understrap_navbar_type', 'collapse' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		<?php wp_head(); ?>
		<script src="https://kit.fontawesome.com/2cf3e50dd7.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/css/estilos.css">
	</head>

	<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
		<?php do_action( 'wp_body_open' ); ?>
		<div class="container-fluid">
			<div class="row fondo_azul_oscuro">
				<div class="col-12 d-flex justify-content-center align-items-center p-2">
					<p class="font-size-14px tipografia_blanca mb-0">
						<?php the_field('texto1_header');?> <span class="tipografia_naranja"><?php the_field('texto2_header');?></span>
					</p>
				</div>
			</div>
		</div>
	</body>
</html>