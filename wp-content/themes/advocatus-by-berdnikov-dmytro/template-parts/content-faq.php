<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Advocatus_by_Berdnikov_Dmytro
 */

?>

<a href="#" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php the_title(); ?>
    <span class="fa fa-plus" aria-hidden="true"></span>
</a><!-- #post-<?php the_ID(); ?> -->