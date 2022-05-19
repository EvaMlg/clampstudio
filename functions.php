<?php

/**
 * New themes functions and definitions
 *
 *
 */



add_theme_support('title-tag');
add_theme_support('post-thumbnails');
add_theme_support('custom-logo');



// MENUS
add_theme_support('menus');
register_nav_menus(
    [
        'header-main-menu' => 'Header Main Menu',
        'footer-main-menu' => 'Footer Main Menu',
        'footer-legal-menu' => 'Footer Legal Menu',
    ]
);


// LIMITE LA TAILLE DE L'EXCERPT 

add_filter('excerpt_length', function () {
    return 20;
}, 999);


// STYLE
function lct_register_assets()
{
    
    wp_enqueue_script('jquery' );

    wp_enqueue_style("main-style", get_template_directory_uri() . "/src/style/main.css");

    wp_enqueue_script("swiper-script", "https://unpkg.com/swiper/swiper-bundle.js");
    wp_enqueue_script("swiper", get_template_directory_uri() . "/src/js/swiper.js", array(), '1.0', true);
    wp_enqueue_script('menu', get_template_directory_uri() . '/src/js/menu.js', array(), '1.0', true);
    wp_enqueue_script('nudemode', get_template_directory_uri() . '/src/js/nudemode.js', array(), '1.0');
    wp_enqueue_script('nudemode', get_template_directory_uri() . '/src/js/countdown.js', array(), '1.0');
}
add_action('wp_enqueue_scripts', 'lct_register_assets');

// WOOCOMMERCE

function mytheme_add_woocommerce_support()
{
    add_theme_support('woocommerce', array(
        'thumbnail_image_width' => 800,
        'single_image_width'    => 800,
        'gallery_thumbnail_image_width' => 1000,

        'product_grid'          => array(
            'default_rows'    => 3,
            'min_rows'        => 2,
            'max_rows'        => 8,
            'default_columns' => 4,
            'min_columns'     => 2,
            'max_columns'     => 5,
        ),
    ));
}

add_filter('woocommerce_enqueue_styles', '__return_empty_array');

add_action('after_setup_theme', 'mytheme_add_woocommerce_support');


// Fonction pour ajouter les inner fields des forms784I39OA6F3


add_filter('woocommerce_checkout_fields', 'override_billing_checkout_fields', 20, 1);
function override_billing_checkout_fields($fields)
{
    $fields['billing']['billing_phone']['placeholder'] = 'Phone';
    $fields['billing']['billing_email']['placeholder'] = 'Email';
    return $fields;
}

add_filter('woocommerce_default_address_fields', 'override_default_address_checkout_fields', 20, 1);
function override_default_address_checkout_fields($address_fields)
{
    $address_fields['first_name']['placeholder'] = 'First Name';
    $address_fields['last_name']['placeholder'] = 'Last Name';
    $address_fields['address_1']['placeholder'] = 'Adress';
    $address_fields['state']['placeholder'] = 'State';
    $address_fields['postcode']['placeholder'] = 'PostCode';
    $address_fields['city']['placeholder'] = 'City';
    return $address_fields;
}

// Fonction pour rendre les images non cliquables

function e12_remove_product_image_link($html, $post_id)
{
    return preg_replace("!<(a|/a).*?>!", '', $html);
}
add_filter('woocommerce_single_product_image_thumbnail_html', 'e12_remove_product_image_link', 10, 2);


// Function to add a continue shopping button
add_action( 'woocommerce_before_cart_table', 'woo_add_continue_shopping_button_to_cart' );

function woo_add_continue_shopping_button_to_cart() {
 $shop_page_url = get_permalink( woocommerce_get_page_id( 'shop' ) );
 
 echo '<div class="woocommerce-message">';
 echo ' <a href="'.$shop_page_url.'" class="button">Continue Shopping →</a> Would you like some more goods?';
 echo '</div>';
}

// Add back to store button on WooCommerce Checkout
add_action('woocommerce_cart_coupon', 'amano_back_to_store');
add_action('woocommerce_checkout_before_customer_details', 'amano_back_to_store');

add_action( 'woocommerce_after_cart_totals', 'tl_continue_shopping_button' );

function amano_back_to_store() {
$shop_page_url = get_permalink( woocommerce_get_page_id( 'shop' ) );
 
 echo '<div class="back-to-store">';
 echo ' <a href="'.$shop_page_url.'" class="button">← Continue Shopping</a>';
 echo '</div>';
}

// Add Logo div on checkout page

add_action('woocommerce_after_checkout_shipping_form', 'logodiv');

function logo_div() {
    $shop_page_url = get_permalink( woocommerce_get_page_id( 'checkout' ) );
     
     echo '<div class="logodiv">';
     echo '</div>';
    }