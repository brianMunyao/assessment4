<?php get_header(); ?>
<div class="content">
    <?php


    /**
     * Template Name: Posts Page
     *
     */ ?>
    <h1>Posts Page</h1>

    <?php
    $blogs = new WP_Query('type=post');

    if ($blogs->have_posts()) :
        while ($blogs->have_posts()) : $blogs->the_post(); ?>

            <?php get_template_part('content', get_post_format()) ?>

    <?php
        endwhile;
    endif;

    // previous_posts_link('&laquo; Newer posts');
    // next_posts_link('Older posts &raquo;');
    ?>

    <div><?php //previous_posts_link('Older posts'); 
            ?></div>
    <div><?php // next_posts_link('Newer posts'); 
            ?></div>

    <?php
    wp_reset_postdata();
    ?>



    <?php get_footer(); ?>
</div>