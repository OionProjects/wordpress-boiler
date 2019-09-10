<?php
    $featured_post_args = array (
	    'post_status' => 'featured',
    );
	$primera_feature_query = new WP_Query( $featured_post_args );
	if( $primera_feature_query->have_posts() ):
		while( $primera_feature_query->have_posts() ): $primera_feature_query->the_post();
?>

        <div class="gg slider-item " style="background-image: url(<?php echo get_the_post_thumbnail_url() ?>);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">
                    <div class="col-md-12 ftco-animate text-center">
                        <h1 class="mb-2">We serve Fresh Vegestables &amp; Fruits</h1>
                        <h2 class="subheading mb-4">We deliver organic vegetables &amp; fruits</h2>
                        <p><a href="#" class="btn btn-primary">View Details</a></p>
                    </div>
                </div>
            </div>
        </div>

<?php
	endwhile;
	wp_reset_postdata();
	else:
?>
        <div class="bols slider-item" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/bg_1.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">
                    <div class="col-md-12 ftco-animate text-center">
                        <h1 class="mb-2">We serve Fresh Vegestables &amp; Fruits</h1>
                        <h2 class="subheading mb-4">We deliver organic vegetables &amp; fruits</h2>
                        <p><a href="#" class="btn btn-primary">View Details</a></p>
                    </div>
                </div>
            </div>
        </div>
<?php endif; ?>
