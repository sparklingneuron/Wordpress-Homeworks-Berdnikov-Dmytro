<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Advocatus_by_Berdnikov_Dmytro
 */

?>

<li id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php the_post_thumbnail('full'); ?>
    <h3><?php the_title(); ?></h3>
    <span><?php the_field('position'); ?></span>
</li><!-- #post-<?php the_ID(); ?> -->