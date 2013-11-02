<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header();?>

    <div class="gallery fl">
    <?php if ( have_posts() ) : ?>
        <header class="page-header">
            <h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'twentytwelve' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
        </header>
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
    <?php else: ?>
        <article id="post-0" class="post no-results not-found">
                    <header class="entry-header">
                            <h1 class="entry-title"><?php _e( 'Nothing Found', 'twentytwelve' ); ?></h1>
                    </header>

                    <div class="entry-content">
                            <p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'twentytwelve' ); ?></p>
                            <?php get_search_form(); ?>
                    </div><!-- .entry-content -->
            </article><!-- #post-0 -->
    <?php endif; ?>
        <div class="clear"></div>
    </div>
    <div class="widget_content fr">
        <div class="widget_box sidebar_main">
            <?php dynamic_sidebar( 'sidebar-2' ); ?>
        </div>
    </div>
    <div class="clear"></div>
<?php get_footer(); ?>