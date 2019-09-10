
    <div class="img-wrapper">
        <a href="<?php the_permalink();?>">
            <?php if ( has_post_thumbnail() ) the_post_thumbnail(); ?>
        </a>
    </div>
    <div class="blog-details">
        <header class="entry-header">
        <?php the_title( sprintf('<h2 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h2>' ); ?>
        </header>
        <div class="entry-meta">
            <span class="entry-category"> <?php the_category();?></span>
            <span class="byline"><i class="far fa-user"></i> <a href="#"><?php the_author();?></a></span>
            <span class="posted-on"> <i class="far fa-clock"></i>   <a href="#"><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?></a></span>
            <span class="edit"> <i class="far fa-edit"></i> <?php edit_post_link(); ?></span>
        </div>
        <div class="entry-content">
            <p> <?php the_content();?> </p>
            <br>                              
        </div>
        <div class="contact">
        <?php
            wp_nav_menu(array(
                    'theme_location' => 'secondary',
                    'container' => false,
                    'menu_class' => 'contact',
                    
                )
            );
        ?> 
        </div>
        
    </div> 
     
