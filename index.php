<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div class="site" id="page">
        <header class="site-header">
            <!-- Top Bar dengan Brand -->
            <nav class="navbar-top navbar navbar-expand-md navbar-light bg-white border-bottom">
                <div class="container-fluid d-flex align-items-center">
                    <!-- Desktop: BRAND kiri -->
                    <a class="navbar-brand d-none d-md-block me-auto" href="<?php echo esc_url(home_url('/')); ?>">
                        <?php 
                        if (has_custom_logo()) {
                            $custom_logo_id = get_theme_mod('custom_logo');
                            echo wp_get_attachment_image($custom_logo_id, 'full', false, [
                                'class' => 'custom-logo'
                            ]);
                        } else {
                            echo '<span class="font-weight-bold text-primary h5 mb-0">EDUFRIENZ</span>';
                        }
                        ?>
                    </a>

                    <!-- Mobile: BRAND di kiri -->
                    <a class="navbar-brand d-md-none me-auto" href="<?php echo esc_url(home_url('/')); ?>">
                        <?php 
                        if (has_custom_logo()) {
                            $custom_logo_id = get_theme_mod('custom_logo');
                            echo wp_get_attachment_image($custom_logo_id, 'full', false, [
                                'class' => 'custom-logo'
                            ]);
                        } else {
                            echo '<span class="font-weight-bold text-primary h5 mb-0">EDUFRIENZ</span>';
                        }
                        ?>
                    </a>

                    <!-- Desktop: Search Form -->
                    <div class="search-inside d-none d-md-inline-flex w-100 mx-3">
                        <span class="search-icon">
                            <i class="fas fa-search"></i>
                        </span>
                        <input type="search" class="form-control rounded-pill" placeholder="Search &quot;SEL training for teachers&quot;" aria-label="Search">
                    </div>


                    <!-- Desktop: Right Actions -->
                    <div class="navbar-nav align-items-center d-none d-md-flex ms-auto">
                        <a href="#" class="btn btn-outline-primary btn-sm">Login</a>
                    </div>

                    <!-- Hamburger Menu untuk Mobile - Dipindah ke sini -->
                    <div class="d-flex align-items-center d-md-none ms-auto">
                        <!-- Search Toggle untuk Mobile -->
                        <a href="#" class="btn btn-link p-0 me-3 mobile-search-toggle">
                            <i class="fas fa-search fa-lg"></i>
                        </a>
                        
                        <!-- Hamburger Menu -->
                        <button class="navbar-toggler border-0"
                            type="button"
                            data-toggle="collapse"
                            data-target="#navbarNav"
                            aria-controls="navbarNav"
                            aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                </div>
            </nav>

            <!-- Main Navigation Menu -->
            <nav class="navbar-bottom navbar navbar-expand-md navbar-light position-relative border-bottom" style="background-color: #8ED1FC;">
                <div class="container-fluid flex-wrap-reverse">
                    <!-- MENU UTAMA -->
                    <div id="navbarNav" class="collapse navbar-collapse">
                        <?php
                            wp_nav_menu([
                                'theme_location'  => 'edufrienz_md_nav_menu',
                                'container'       => '',
                                'menu_class'      => 'navbar-nav mx-auto d-none d-md-flex  flex-row flex-wrap justify-content-center',
                                'depth'           => 4,
                                'walker'          => new WP_Bootstrap_Mega_Navwalker()
                            ]);
                        ?>

                        <?php
                            wp_nav_menu([
                                'theme_location'  => 'edufrienz_sm_nav_menu',
                                'container'       => '',
                                'menu_class'      => 'navbar-nav mx-auto d-flex d-md-none my-3 flex-row flex-wrap justify-content-center',
                                'depth'           => 4,
                                'walker'          => new WP_Bootstrap_Mega_Navwalker()
                            ]);
                        ?>
                    </div>
                    <?php
                        wp_nav_menu([
                            'theme_location'  => 'edufrienz_sm_nav_menu_2',
                            'container'       => '',
                            'menu_class'      => 'navbar-nav mx-auto flex-row flex-wrap justify-content-center d-md-none',
                            'depth'           => 4,
                            'walker'          => new WP_Bootstrap_Mega_Navwalker()
                        ]);
                    ?>
                </div>
                
                <!-- Mobile Search Form - Muncul di bawah main menu -->
                <div class="container-fluid mobile-search-form d-md-none my-3" style="display: none;">
                    <div class="input-group search-inside position-relative">
                        <span class="search-icon">
                            <i class="fas fa-search"></i>
                        </span>
                        <input type="search" class="form-control rounded-pill" placeholder="Search &quot;SEL training for teachers&quot;" aria-label="Search">
                    </div>
                </div>
            </nav>
        </header>
        <main class="site-main">
            <?php
            // if ( have_posts() ) :
            //     while ( have_posts() ) : the_post();
            //         the_content();
            //     endwhile;
            // else :
            //     echo '<p>No content found</p>';
            // endif;
            ?>
        </main>
        <footer class="site-footer">
            <p>&copy; <?php echo date('Y'); ?> EduFrienz. All rights reserved.</p>
        </footer>
    </div>
    <?php wp_footer(); ?>
</body>
</html>