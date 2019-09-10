<!-- Featured Box -->


<!-- First -->
<div class="fbox-container col-12 col-md-4">
    <div class="feature-box">
            <?php
                if ( has_post_thumbnail() )
                    the_post_thumbnail();
                else
                    echo '<img src="' . trailingslashit( get_stylesheet_directory_uri() ) . '/images/default-thumbnail.jpg' . '" alt="" />';
            ?>
            
        <div class="fbox-img-wrapper">
            <a href="<?php the_permalink();?>">
                <?php the_post_thumbnail(); ?>   
            </a>
        </div>
        <div class="fbox-details pages">
            <h4><?php the_title();?></h4>
        </div>
    </div>
</div>  
             
