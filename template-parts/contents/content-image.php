<article class="content medium">
        <div class="img-wrapper">
            <a href="<?php the_permalink();?>">
            <?php
                if ( has_post_thumbnail() )
                    the_post_thumbnail();
                else
                    echo '<img src="' . trailingslashit( get_stylesheet_directory_uri() ) . '/images/default-thumbnail.jpg' . '" alt="" />';
            ?>
                
            </a>
        </div>
        
        <div class="blog-details">

            <div class="entry-meta">
                <span class="entry-category"><?php the_category(); ?></span>
                <span class="byline"><i class="far fa-user"></i> <a href="#"><?php the_author();?></a></span>
                <span class="posted-on"><i class="far fa-clock"></i><a href="#"><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?> </a></span>
            </div>

            <header class="entry-header">
            <?php the_title( sprintf('<h2 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h2>' ); ?>
            </header>
            
            <div class="entry-content">
                <?php the_excerpt(); ?>
            </div>
            <div class="continue-reading"><a href="<?php the_permalink()?>"><span class="arrow">Read More →</span></a></div>

            <footer class="entry-footer">
                <?php echo primera_posted_footer(); ?>
            </footer>
        </div>
    </article>