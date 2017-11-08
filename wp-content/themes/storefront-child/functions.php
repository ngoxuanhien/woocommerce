<?php

if ( ! function_exists( 'storefront_before_content' ) ) {
    /**
     * Before Content
     * Wraps all WooCommerce content in wrappers which match the theme markup
     *
     * @since   1.0.0
     * @return  void
     */
    function storefront_before_content() {
        ?>
        <div id="primary" class="content-block">
            <main id="main" class="site-main" role="main">
        <?php
    }
}

add_action( 'woocommerce_before_main_content',    'storefront_before_content',                10 );