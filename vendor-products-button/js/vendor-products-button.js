jQuery(document).ready(function( $ ){
    if ( $('body').hasClass('wc-vendor-page') ) {
        $('.woocommerce-account #contents .entry-content nav.woocommerce-MyAccount-navigation > ul').append('<li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--products"><a href="/wp-admin/edit.php?post_type=product">Productos</a></li>')
    }
});