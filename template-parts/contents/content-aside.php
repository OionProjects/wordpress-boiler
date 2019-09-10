
<article class="content primera-format-aside">

		<div class="aside-container row">
			
			<div class="aside-featured col-xs-12 col-sm-3 col-md-2 text-center">
				
            <?php
                if ( has_post_thumbnail() )
                    the_post_thumbnail();
                else
                    echo '<img src="' . trailingslashit( get_stylesheet_directory_uri() ) . '/images/default-thumbnail.jpg' . '" alt="" />';
            ?>
				
			</div><!-- .col-md-2 -->
			
			<div class="col-xs-12 col-sm-9 col-md-10">
				
                <div class="entry-meta">
                    <span class="byline"><i class="far fa-user"></i> <a href="#"><?php the_author();?></a></span>
                    <span class="posted-on"><i class="far fa-clock"></i><a href="<?php the_permalink()?>"><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?> </a></span>
                </div>

                <div class="entry-content">
                <a href="<?php the_permalink()?>"><?php the_excerpt(); ?></a>
                </div>  
              

				
            </div><!-- .col-md-10 -->
            <footer class="entry-footer">
            
                <div class="row justify-content-end">
                    
                    <div class="bottom">
                    
                        <?php echo primera_posted_footer(); ?>
                        
                    </div><!-- .col-md-10 -->
                    
                </div><!-- .row -->
            
            </footer>
        
		</div><!-- .row -->
</article>