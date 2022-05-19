<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="container-fluid fondo_azul_negro height_335 p-3">
    <div class="row row_footer">
        <div class="col-12 text-center">
            <?php
                wp_nav_menu(
                    array(
                        'theme_location'  => 'primary',
                        'container_id'    => 'navbarNavDropdown',
                        'menu_class'      => 'navbar-nav ml-auto',
                        'fallback_cb'     => '',
                        'menu_id'         => 'main-menu',
                        'depth'           => 2,
                        'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
                    )
                );
            ?>
        </div>
    </div>
</div>

<?php wp_footer(); ?>

</body>

</html>

