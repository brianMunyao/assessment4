<?php get_header(); ?>
<div class="content">
    <?php


    /**
     * Template Name: Posts Page
     *
     */ ?>
    <h1>Posts Page</h1>

    <?php

    $blogs = new WP_Query('type=post&posts_per_page=3');

    if ($blogs->have_posts()) :
        while ($blogs->have_posts()) : $blogs->the_post(); ?>



            <?php get_template_part('content', get_post_format()) ?>

    <?php
        endwhile;
    endif;
    wp_reset_postdata();
    ?>


    <div class="nav-previous alignleft"><?php previous_posts_link('Older posts'); ?></div>
    <div class="nav-next alignright"><?php next_posts_link('Newer posts'); ?></div>
    <?php get_footer(); ?>
</div>