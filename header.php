<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="skip-link screen-reader-text" href="#content">
    <?php esc_html_e( 'Skip to content', 'edufrienz' ); ?>
</a>

<div id="page" class="site">
    <header class="site-header">
        <!-- Top Bar dengan Brand -->
        <nav class="navbar-top navbar navbar-expand-md navbar-light bg-white border-bottom">
            <div class="container-fluid d-flex align-items-center">
                <!-- Desktop: BRAND kiri -->
                <a class="navbar-brand d-md-block me-auto" href="<?php echo esc_url(home_url('/')); ?>">
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
                <div class="search-inside edu-none d-md-inline-flex w-100 mx-3">
                    <?php 
                        get_search_form([
                            'input_placeholder' => 'Search &quot;SEL training for teachers&quot;',
                            'class' => 'desktop-search-form',
                            'version' => 'desktop'
                        ]);
                    ?>
                </div>

                <!-- Desktop: Right Actions -->
                <div class="navbar-nav align-items-center edu-none d-md-flex gap-3 ms-auto">
                    <!-- Cart Icon -->
                    <?php
                        $cart_count   = WC()->cart ? WC()->cart->get_cart_contents_count() : 0;
                        $cart_display = edufrienz_format_cart_count( $cart_count );
                    ?>

                    <a href="<?php echo esc_url( wc_get_cart_url() ); ?>"
                    class="btn btn-edufrienz rounded-pill d-flex align-items-center gap-1 px-3 px-md-4 me-2 position-relative">

                        <i class="fas fa-shopping-cart"></i>
                        <span class="text-nowrap" style="font-family: 'Varela Round', sans-serif">Cart</span>

                        <?php if ( $cart_count > 0 ) : ?>
                            <span
                                class="position-absolute bg-danger border border-light rounded-circle
                                    d-flex align-items-center justify-content-center text-white p-1"
                                style="top: 0; right: 0; min-width: 2.5em; height: 2.5em; font-size: 12px; transform: translate(30%, -30%);">
                                <?php echo esc_html( $cart_display ); ?>
                            </span>
                        <?php endif; ?>
                    </a>
                    <?php if ( is_user_logged_in() ) : ?>
                        <?php
                            $current_user = wp_get_current_user();
                            $username     = $current_user->user_login;
                        ?>

                        <!-- Account Dropdown (login) -->
                        <div class="dropdown account-dropdown">
                            <button type="button"
                                class="btn btn-edufrienz rounded-pill d-flex align-items-center gap-1 px-3 px-md-4"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="dashicons dashicons-admin-users me-1 me-md-2" style="font-size:20px;"></span>
                                <span class="text-nowrap" style="font-family: 'Varela Round', sans-serif">Hi, <?php echo esc_html( $username ); ?></span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right mt-2 p-0" style="border-radius:0;">
                                <!-- Dashboard -->
                                <a class="dropdown-item d-flex align-items-center gap-3"
                                href="<?php echo esc_url( wc_get_page_permalink('myaccount') ); ?>">
                                    <i class="fas fa-tachometer-alt" style="width:18px;"></i>
                                    <span>Dashboard</span>
                                </a>

                                <!-- Orders -->
                                <a class="dropdown-item d-flex align-items-center gap-3"
                                href="<?php echo esc_url( wc_get_account_endpoint_url('orders') ); ?>">
                                    <i class="fas fa-receipt" style="width:18px;"></i>
                                    <span>Orders</span>
                                </a>

                                <!-- Downloads -->
                                <a class="dropdown-item d-flex align-items-center gap-3"
                                href="<?php echo esc_url( wc_get_account_endpoint_url('downloads') ); ?>">
                                    <i class="fas fa-download" style="width:18px;"></i>
                                    <span>Downloads</span>
                                </a>

                                <!-- Logout -->
                                <a class="dropdown-item d-flex align-items-center gap-3"
                                href="<?php echo esc_url( wc_get_account_endpoint_url('customer-logout') ); ?>">
                                    <i class="fas fa-sign-out-alt" style="width:18px;"></i>
                                    <span>Logout</span>
                                </a>
                            </div>
                        </div>
                    <?php else : ?>
                        <!-- Account Dropdown (guest) -->
                        <div class="dropdown account-dropdown">
                            <button type="button"
                                class="btn btn-edufrienz rounded-pill d-flex align-items-center gap-1 px-3 px-md-4"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="dashicons dashicons-admin-users me-1 me-md-2"></span>
                                <span class="text-nowrap" style="font-family: 'Varela Round', sans-serif">Account</span>
                            </button>

                            <div class="dropdown-menu dropdown-menu-right mt-2 p-0" style="border-radius:0;">
                                <!-- Login -->
                                <a class="dropdown-item d-flex align-items-center gap-3"
                                href="<?php echo esc_url( trailingslashit( wc_get_page_permalink('myaccount') ) . '#login' ); ?>">
                                    <i class="fas fa-sign-in-alt" style="width:18px;"></i>
                                    <span class="text-nowrap" style="font-family: 'Varela Round', sans-serif">Login</span>
                                </a>
                                <!-- Register -->
                                <a class="dropdown-item d-flex align-items-center gap-3"
                                href="<?php echo esc_url( trailingslashit( wc_get_page_permalink('myaccount') ) . '#register' ); ?>">
                                    <i class="fas fa-user-plus" style="width:18px;"></i>
                                    <span class="text-nowrap" style="font-family: 'Varela Round', sans-serif">Register</span>
                                </a>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>

                <!-- Hamburger Menu untuk Mobile - Dipindah ke sini -->
                <div class="d-flex align-items-center edu-md-none gap-3 ms-auto">
                    <!-- Search Toggle untuk Mobile -->
                    <a href="#" class="btn btn-link-edufrienz p-0 me-3 mobile-search-toggle">
                        <i class="fas fa-search fa-lg"></i>
                    </a>

                    <a href="<?php echo esc_url( wc_get_cart_url() ); ?>" class="btn btn-link-edufrienz p-0 me-3">
                        <i class="fas fa-shopping-cart fa-lg"></i>
                    </a>

                    <!-- Account Toggle untuk Mobile -->
                    <a href="<?php echo esc_url( wc_get_page_permalink('myaccount') ); ?>" class="btn btn-link-edufrienz p-0 me-3">
                        <i class="fas fa-circle-user fa-lg"></i>
                    </a>
                    
                    <!-- Hamburger Menu -->
                    <button class="navbar-toggler border-0 p-0"
                        type="button"
                        data-toggle="collapse"
                        data-target="#navbarNav"
                        aria-controls="navbarNav"
                        aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-inner"></span>
                    </button>
                </div>
            </div>
        </nav>

        <!-- Main Navigation Menu -->
        <nav class="navbar-bottom navbar navbar-expand-md navbar-light position-relative border-bottom px-0" style="background-color: #8ED1FC;">
            <div class="container-fluid flex-wrap-reverse">
                <!-- MENU UTAMA -->
                <div id="navbarNav" class="collapse navbar-collapse">
                    <?php
                        wp_nav_menu([
                            'theme_location'  => 'edufrienz_md_nav_menu',
                            'container'       => '',
                            'menu_class'      => 'navbar-nav mx-auto edu-none d-md-flex  flex-row flex-wrap justify-content-center',
                            'depth'           => 4,
                            'walker'          => new WP_Bootstrap_Mega_Navwalker()
                        ]);
                    ?>
                    <div class="dropdown-divider"></div>
                    <?php
                        wp_nav_menu([
                            'theme_location'  => 'edufrienz_sm_nav_menu',
                            'container'       => '',
                            'menu_class'      => 'navbar-nav mx-auto d-flex edu-md-none flex-row flex-wrap justify-content-center',
                            'depth'           => 4,
                            'walker'          => new WP_Bootstrap_Mega_Navwalker()
                        ]);
                    ?>
                </div>
                <?php
                    wp_nav_menu([
                        'theme_location'  => 'edufrienz_sm_nav_menu_2',
                        'container'       => '',
                        'menu_class'      => 'navbar-nav mx-auto flex-row flex-wrap justify-content-center edu-md-none',
                        'depth'           => 4,
                        'walker'          => new WP_Bootstrap_Mega_Navwalker()
                    ]);
                ?>
            </div>

            <!-- Mobile Search Form - Muncul di bawah main menu -->
            <div class="container-fluid mobile-search-form edu-md-none my-3" style="display: none;">
                <?php 
                    get_search_form([
                        'input_placeholder' => 'Search &quot;SEL training for teachers&quot;',
                        'class' => 'mobile-search-form-inner',
                        'version' => 'mobile'
                    ]); 
                ?>
            </div>
        </nav>
    </header>