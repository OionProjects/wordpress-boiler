

<article class="content medium">
    
   <div class="embed-responsive embed-responsive-16by9">
		<?php echo primera_get_embedded_media( array('video','iframe') ); ?>
	</div>
        
        <div class="blog-details">

            <div class="entry-meta">
                <span class="entry-category"><?php the_category(); ?></span>
                <span class="byline"><i class="far fa-user"></i><a href="#">By: <?php the_author(); ?></a></span>
                <span class="posted-on"><a href="#"><i class="far fa-clock"></i> <?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?> </a></span>
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