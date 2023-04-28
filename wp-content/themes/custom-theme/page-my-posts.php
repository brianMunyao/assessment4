<?php get_header(); ?>
<div class="content">
    <?php


    /**
     * Template Name: Posts Page
     *
     */ ?>
    <h1>Posts Page</h1>

    <?php

    $args = [
        'type' => 'post',
        "posts_per_page" => 3
    ];

    $blogs = new WP_Query($args);

    if ($blogs->have_posts()) :
        while ($blogs->have_posts()) : $blogs->the_post(); ?>

            <?php
            get_template_part('content', get_post_format());
            ?>
            <div><?php previous_posts_link();
                    ?></div>
            <div><?php next_posts_link();
                    ?></div>




        <?php
        endwhile;

        ?>


    <?php
    endif;


    ?>



    <?php
    wp_reset_postdata();
    ?>



    <?php get_footer(); ?>
</div>