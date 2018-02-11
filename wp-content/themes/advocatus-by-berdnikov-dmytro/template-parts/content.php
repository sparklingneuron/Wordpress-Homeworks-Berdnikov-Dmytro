<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Advocatus_by_Berdnikov_Dmytro
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header>
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a>
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <p>By <span><?php the_author(); ?></span></p>
        <time datetime="<?php the_time('c'); ?>"><?php the_time('F j, Y'); ?></time>
    </header>
    <p><?php the_content(); ?></p>
    <button class="btn-comments fa fa-weixin" aria-hidden="true" name="comments-1">
        <span>29 Comments</span></button>
    <button class="btn-share fa fa-share" aria-hidden="true" name="share-1"><span>Share</span></button>
</article><!-- #post-<?php the_ID(); ?> -->