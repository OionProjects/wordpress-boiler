<?php get_header(); ?>

    <?php if( have_posts() ):  ?>

        <?php while( have_posts() ): the_post(); ?>

            <div class="container mb-5 mt-5">
                <?php the_content(); ?>
            </div>


    <?php endwhile; else: ?>
        <h1> No items added to cart. <a href="#"> Shop now </a> </h1>
    <?php endif; ?>


<?php get_footer(); ?>