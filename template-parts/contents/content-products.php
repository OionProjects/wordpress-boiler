<?php

    /*$meta_query   = WC()->query->get_meta_query();
    $meta_query[] = array(
        'key'   => '_featured',
        'value' => 'yes'
    );*/
    $args = array(
        'post_type'   =>  'product',
        'stock'       =>  1,
        'showposts'   =>  6,
        'orderby'     =>  'date',
        'order'       =>  'DESC',
    );

    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ){
        $loop->the_post(); global $product;
        if( $product->is_featured() ){
            /**
             * Hook: woocommerce_shop_loop.
             *
             * @hooked WC_Structured_Data::generate_product_data() - 10
             */
            wc_get_template_part('content', 'product');
        }
    }
