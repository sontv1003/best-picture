<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
    <div class="gallery fl">
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
        <div class="box_image fl">
            <a href="<?php the_permalink() ?>" title="<?php the_title() ?>">
               <?php if(has_post_thumbnail($post->ID)) {?>
                   <?php echo get_the_post_thumbnail($post->ID, 'thumbnail'); ?>
               <?php } ?>
            </a>
            <div class="cat_title">
                <?php $cat = get_the_category($post->ID);?>
                <a href="<?php echo get_category_link($cat[0]->term_id); ?> ">
                    <?php echo $cat[0]->name;?>
                </a>
            </div>
            <div class="info_left" style="width: 69%;"><?php the_date(); ?></div>
            <div class="info_right" style="width: 31%;">1920x1080</div>
            <div class="clear"></div>
        </div>
        <?php endwhile;?>
    <?php endif; ?>
        <div class="clear"></div>
    </div>
    <div class="widget_content fr">
        <div class="widget_box sidebar_main">
            <?php dynamic_sidebar( 'sidebar-1' ); ?>
        </div>
    </div>
    <div class="clear"></div>
<?php get_footer(); ?>