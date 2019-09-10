<?php

    /*$category_list = get_categories('');
    $split_cat = array_chunk($category_list, 2);*/
    //echo '<pre>'; var_dump($category_list); exit;
    /* foreach ($split_cat[0] as $category => $value){
        echo '<pre>'; var_dump($value); exit;
    }*/
    $terms = get_terms( 'product_cat', array(
        'hide_empty' => false,
    ) );
    $split_cat = array_chunk($terms, 2);
?>

<div class="col-md-8">
    <div class="row">
        <div class="col-md-6 order-md-last align-items-stretch d-flex">
            <div class="category-wrap-2 ftco-animate img align-self-stretch d-flex" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/category.jpg);">
                <div class="text text-center">
                    <h2>Vegetables</h2>
                    <p>Protect the health of every home</p>
                    <p><a href="#" class="btn btn-primary">Shop now</a></p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <?php foreach ($split_cat[0] as $index => $category):
                $image_id = get_term_meta ( $category->term_id, 'thumbnail_id', true );
                //$image = wp_get_attachment_url( $image_id );
            ?>
            <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(<?php echo esc_url(wp_get_attachment_image_url ( $image_id, 'large' )) ?>);">
                <div class="text px-3 py-1">
                    <h2 class="mb-0"><a href="#"><?php echo __( $category->name, 'primera-dm'  ) ?></a></h2>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

    <div class="col-md-4">
        <?php foreach ($split_cat[1] as $index => $category):
            $image_id = get_term_meta ( $category->term_id, 'thumbnail_id', true );
            //$image = wp_get_attachment_url( $image_id );
            ?>
        <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(<?php echo esc_url( wp_get_attachment_image_url ( $image_id, 'large' ) ) ?>);">
            <div class="text px-3 py-1">
                <h2 class="mb-0"><a href="#"><?php echo __( $category->name, 'primera-dm'  ) ?></a></h2>
            </div>
        </div>
        <?php endforeach; ?>
    </div>