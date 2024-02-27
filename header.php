<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-cursor">
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title( '|', true, 'right' ); ?></title>

    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="">
    <div class="bg-darkBlue py-7">
        <div class="container mx-auto">
            <div class="flex justify-between items-center">
                <!-- Logo wrapper -->
                <div class="logoWrapper">
                <a href="<?php echo site_url(); ?>">
                    <?php 
                        $custom_logo_id = get_theme_mod( 'custom_logo' );
                        $logo = wp_get_attachment_image_src( $custom_logo_id , 'logo-size' );
                        if ( has_custom_logo() ) {
                            echo '<img class="logo" src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
                        } else {
                            echo '<h1>' . get_bloginfo('name') . '</h1>';
                        }
                    ?>
                </a>
                </div>
                <!-- Request quote button -->
                <div class="requestQuote_button">
                    <a type="button" class="bg-red py-2 px-5 font-inter font-light text-white text-lg rounded-md" href="<?php echo site_url('/contact')?>">Request Quote</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Menu items -->
    <div class="menuItems py-3 bg-red text-white text-lg font-inter">
        <div class="container mx-auto">
            <?php 
                wp_nav_menu(
                    array(
                    'theme_location' => 'header_menu',
                    'container_class' => 'header-menu',
                    )
                );
            ?>
        </div>
    </div>
</header>