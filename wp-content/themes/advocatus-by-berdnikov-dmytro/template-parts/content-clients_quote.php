<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Advocatus_by_Berdnikov_Dmytro
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('client-details'); ?>>
    <div class="outer-div">
        <div class="inner-div">
            <?php the_post_thumbnail('full'); ?>
        </div>
    </div>
    <div>
        <blockquote><?php the_content(); ?></blockquote>
        <h3><?php the_title(); ?></h3>
        <span><?php the_field('position'); ?></span>
    </div>
</article><!-- #post-<?php the_ID(); ?> -->