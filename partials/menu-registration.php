<?php 

function gcatheme_menus() {
    register_nav_menus(
        array(
            'header_menu'   => esc_html__( 'Header Menu', 'GCATheme' ),
            'footer_menu'   => esc_html__( 'Footer Menu', 'GCATheme')
        )
    );
}
add_action( 'init', 'gcatheme_menus' );