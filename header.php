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

<!-- Tablet & Desktop Header -->
<header class="hidden lg:block">
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
                    <button class="min-w-[130px] text-lg group relative inline-flex py-2 px-5 items-center justify-center overflow-hidden rounded-md bg-red font-light font-halveticaLight text-white duration-500"><div class="translate-x-0 opacity-100 transition group-hover:-translate-x-[150%] group-hover:opacity-0">Request Quote</div><div class="absolute translate-x-[150%] opacity-0 transition group-hover:translate-x-0 group-hover:opacity-100"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"><path d="M8.14645 3.14645C8.34171 2.95118 8.65829 2.95118 8.85355 3.14645L12.8536 7.14645C13.0488 7.34171 13.0488 7.65829 12.8536 7.85355L8.85355 11.8536C8.65829 12.0488 8.34171 12.0488 8.14645 11.8536C7.95118 11.6583 7.95118 11.3417 8.14645 11.1464L11.2929 8H2.5C2.22386 8 2 7.77614 2 7.5C2 7.22386 2.22386 7 2.5 7H11.2929L8.14645 3.85355C7.95118 3.65829 7.95118 3.34171 8.14645 3.14645Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path></svg></div>
                        <a class="w-full h-full absolute top-0 right-0" href="<?php echo site_url('/contact')?>"></a>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- Menu items -->
    <div class="menuItems py-3 bg-red text-white text-lg font-inter font-light">
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

<!-- Mobile Header -->
<?php 

if(is_front_page()){
    get_template_part('partials/header', 'transparent');
} else{
    get_template_part('partials/header', 'background');
}