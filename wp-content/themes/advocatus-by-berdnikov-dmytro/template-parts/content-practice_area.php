<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Advocatus_by_Berdnikov_Dmytro
 */

?>

<li id="post-<?php the_ID(); ?>" <?php post_class('fa ' . get_field('font_awesome_icon_class')); ?>>
    <div>
        <h3><?php the_title(); ?></h3>
        <p><?php the_content(); ?></p>
    </div>
</li><!-- #post-<?php the_ID(); ?> -->