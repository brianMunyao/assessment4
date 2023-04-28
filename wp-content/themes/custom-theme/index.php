<?php get_header(); ?>

<?php
if (have_posts()) :
    while (have_posts()) : the_post(); ?>
        <div class="content">
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
        </div>

        <!-- <?php //get_template_part('content', get_post_format()); 
                ?> -->


    <?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>