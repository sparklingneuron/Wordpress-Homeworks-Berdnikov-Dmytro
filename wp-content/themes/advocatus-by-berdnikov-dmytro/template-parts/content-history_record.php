<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Advocatus_by_Berdnikov_Dmytro
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <dt><?php the_title(); ?> -</dt>
    <dd><?php the_content(); ?></dd>
</div><!-- #post-<?php the_ID(); ?> -->
