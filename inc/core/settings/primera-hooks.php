<?php
remove_action('woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open');
remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash');
remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail');
remove_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10 );
remove_action('woocommerce_before_main_content','woocommerce_breadcrumb',20);


add_action( 'woocommerce_before_shop_loop_item', function (){
    global $product;
    $link = apply_filters( 'woocommerce_loop_product_link', get_the_permalink(), $product );
    echo '<a href="' . esc_url( $link ) . '" class="img-prod">';

}, 10 );

add_filter( 'primera_product_title', function ( $title = '', $tag = 'h3' ){
    $template = '<%s>' . $title . '</%s>';
    $template = sprintf( $template, $tag, $tag);
    return $template;
} );

add_action( 'woocommerce_shop_loop_item_title', function (){
    echo apply_filters( 'primera_product_title', get_the_title() );
}, 10 );

