<?php wp_footer(); ?>
</body>
</html>

<footer class="bg-darkBlue py-10">
<div class="container mx-auto px-4 lg:px-0">
    <!-- Logo and Form -->
    <div class="footer_upperContent pb-10 border-b border-white">
        <div class="grid lg:grid-cols-2 gap-4">
            <!-- Logo left section -->
            <div class="flex justify-center lg:justify-start mb-3 lg:mb-0">
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
            <!-- Newsletter section -->
            <div class="flex justify-center lg:justify-end">
                <div class="lg:w-[500px] h-auto">
                    <h3 class="font-inter text-white font-light text-2xl ml-3">Subscribe to Our Newsletter</h3>
                    <form action="#" class="popup-form">
                        <input type="email" class="popup-form-input" placeholder="" required>
                        <button class="popup-form-submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Bottom menu -->
    <div class="mt-5 hidden lg:block">
        <h3 class="font-inter text-red font-medium text-xl mb-3 text-center lg:text-start">Quick links:</h3>
        <div class="font-inter text-white font-normal text-lg">
            <?php 
                wp_nav_menu(
                    array(
                    'theme_location' => 'useful_links',
                    'container_class' => 'footer_useful_links',
                    )
                );
            ?>
        </div>
    </div>
    <div class="text-white font-inter text-lg ">
        <div class="h-[150px] w-full flex justify-between items-end">
            <div class="grid lg:grid-cols-2 gap-4 w-full">
                <!-- Footer Links -->
                <div class="">
                    <?php 
                        wp_nav_menu(
                            array(
                            'theme_location' => 'footer_menu',
                            'container_class' => 'footer-menu',
                            )
                        );
                    ?>
                </div>
                <!-- Copyright -->
                <div class="flex justify-center lg:justify-end mt-5 lg:mt-0">
                    <div class="">
                        <span class="font-inter text-white font-light text-md">© <?php echo date("Y"); ?> <a href="https://www.sensostudio.co/" target="_blank">Senso Studio.</a> All rights reserved.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>

