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
get_header();
?>
<div class="banner clearfix">
    <div class="social fl">
        <ul>
            <li>
                <a target="_blank" href="https://www.facebook.com/magic4walls"><img src="<?php bloginfo('template_url'); ?>/images/facebook.png" /></a>
                <p><?php echo get_scp_facebook(); ?><br/>Likes</p>
            </li>
            <li>
                <a target="_blank" href="https://twitter.com/magic4walls"><img src="<?php bloginfo('template_url'); ?>/images/twitter.png" /></a>
                <p><?php echo get_scp_twitter(); ?><br/>Followers</p>
            </li>
            <li>
                <a target="_blank" href="https://plus.google.com/104496166402943695916/posts"><img src="<?php bloginfo('template_url'); ?>/images/google_plus.png" /></a>
                <p><?php echo get_scp_googleplus(); ?><br/>Followers</p>
            </li>
        </ul>
    </div>
    <div class="ads fr">
        <?php include_once('ads/banner.php'); ?>
    </div>
</div>
<div class="gallery fl">
    <?php
//    query_posts( 'orderby=meta_value&meta_key=_total_downloads&order=DESC&post_status=publish' );
    //query_posts( 'orderby=name&order=ASC&post_status=publish' );
    if (have_posts()) :
        while (have_posts()) : the_post(); ?>        
            <div class="box_image fl">
                <a href="<?php the_permalink() ?>" title="<?php the_title() ?>">
                    <?php if (has_post_thumbnail($post->ID)) { ?>
                        <?php echo get_the_post_thumbnail($post->ID, 'medium'); ?>
                    <?php } ?>
                </a>
                <div class="cat_title">
                    <?php $cat = get_the_category($post->ID); ?>
                    <a href="<?php echo get_category_link($cat[0]->term_id); ?> ">
                        <?php echo $cat[0]->name; ?>
                    </a>
                </div>
                <div class="info_left" style="width: 69%;"><?php echo get_the_date(); ?></div>
                <div class="info_right" style="width: 31%;">
                    <?php
                    if (has_post_thumbnail($post->ID)) {
                        $post_thumbnail_id = get_post_thumbnail_id($post->ID);
                        $imageInfo = wp_get_attachment_image_src($post_thumbnail_id, 'full', true);
                        echo $imageInfo[1] . 'x' . $imageInfo[2];
                    }
                    ?>
                </div>
                <div class="clear"></div>
            </div>
    <?php endwhile;
endif; ?>
    <div class="clear"></div>
    <div class="page-area">
        <div class="summary-page clearfix">
            <div class="summary-left">
                <h3><?php echo $wp_query->max_num_pages; ?></h3>
                <span>pages</span>
            </div>
            <div class="summary-right">
                <h3><?php echo $wp_query->found_posts; ?></h3>
                <span>wallpapers</span>
            </div>
        </div>
        <div class="nav-page">
            <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
        </div>
    </div>
</div>
<div class="widget_content fr">
    <div class="widget_box sidebar_main">
<?php dynamic_sidebar('sidebar-1'); ?>
        <?php include_once('ads/widget.php'); ?>
    </div>
</div>
<div class="clear"></div>
<?php get_footer(); ?>