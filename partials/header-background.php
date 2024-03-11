<!-- Mobile Header -->
<header class="bg-darkBlue">
  <nav id="navbar" class="bg-darkBlue lg:hidden w-full p-5 absolute z-50">
        <div class="container mx-auto">
            <div class="flex justify-between">
                <!-- LOGO SECTION -->
				<div class="site-branding">
					<?php
					if ( has_custom_logo() ) {
						the_custom_logo();
					} elseif ( $site_name ) {
						?>
						<h1 class="site-title">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo bloginfo('name'); ?>" rel="home">
								<?php echo esc_html( $site_name ); ?>
							</a>
						</h1>
						<p class="site-description">
							<?php
							if ( $tagline ) {
								echo esc_html( $tagline );
							}
							?>
						</p>
					<?php } ?>
				</div>
                <!-- MENU ICON -->
                <button class="nav-toggler" data-target="#navigation">
                    <i class="text-2xl text-white fas fa-bars"></i>
                </button>
            </div>
        </div>
        <!-- DROPDOWN CONTAINER -->
        <div class="hidden navbar_grid__dropdown w-full h-screen absolute top-0 right-0 z-10 bg-darkBlue flex justify-between" id="navigation">
            <!-- DROPDOWN MENU -->
            <div class="header_dropdown bg-darkBlue flex justify-center items-center w-full h-screen">
                <div class="">
                    <!-- CLOSE BUTTON -->
                    <button class="nav_close__button nav-toggler close_button text-white text-4xl p-3 absolute top-2 right-2" data-target="#navigation">&#215;</button>
                    <!-- NAVIGATION -->
                    <div class="thentwrktheme_header__menuMobile text-white font-jost">
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
            </div>
        </div>
    </nav>
</header>