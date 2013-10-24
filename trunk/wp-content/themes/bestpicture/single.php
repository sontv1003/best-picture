<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
get_header(); ?>
    <div class="banner clearfix">
        <div class="social fl">
            <ul>
                <li>
                    <img src="<?php bloginfo('template_url'); ?>/images/facebook.png" /> <br/>
                    <p>129k<br/>Likes</p>
                </li>
                <li>
                    <img src="<?php bloginfo('template_url'); ?>/images/twitter.png" /> <br/>
                    <p>129k<br/>Followers</p>
                </li>
                <li>
                    <img src="<?php bloginfo('template_url'); ?>/images/google_plus.png" /> <br/>
                    <p>129k<br/>Followers</p>
                </li>
            </ul>
        </div>
        <div class="ads fr">ADS</div>
    </div>
    <div class="content_single fl">
        <div class="nav_single">
            <span class="lbNav">Wallpaper Gallery:</span>
            <span>
                <a href='#'>Natural</a>
            </span>
        </div>
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
        <div class="image_detail">
            <a href="<?php the_permalink() ?>" title="<?php the_title() ?>">
               <?php if(has_post_thumbnail($post->ID)) {?>
                   <?php echo get_the_post_thumbnail($post->ID, 'medium'); ?>
               <?php } ?>
            </a>
            <div class="cat_title">
                <?php $cat = get_the_category($post->ID);?>
                <a href="<?php echo get_category_link($cat[0]->term_id); ?> ">
                    <?php echo $cat[0]->name;?>
                </a>
            </div>
            <div class="info_left" style="width: 69%;">September 12th, 10:00</div>
            <div class="info_right" style="width: 31%;">1920x1080</div>
            <div class="clear"></div>
        </div>
        <?php endwhile;?>
    <?php endif; ?>
        <div class="clear"></div>
        <div class="line"></div>
        <h3>View Related Wallpapers from this Category</h3>
        <div class="group_relate clearfix">
            <div class="post_relate">
                <a href='#'><img src='http://localhost/best-picture/wp-content/uploads/2013/10/Download-Nature-HD-Wallpaper-224x160.jpg'/></a>
            </div>
            <div class="post_relate">
                <a href='#'><img src='http://localhost/best-picture/wp-content/uploads/2013/10/Download-Nature-HD-Wallpaper-224x160.jpg'/></a>  
            </div>
            <div class="post_relate last">
                <a href='#'><img src='http://localhost/best-picture/wp-content/uploads/2013/10/Download-Nature-HD-Wallpaper-224x160.jpg'/></a>
            </div>
            <div class="post_relate">
                <a href='#'><img src='http://localhost/best-picture/wp-content/uploads/2013/10/Download-Nature-HD-Wallpaper-224x160.jpg'/></a>
            </div>
            <div class="post_relate">
                <a href='#'><img src='http://localhost/best-picture/wp-content/uploads/2013/10/Download-Nature-HD-Wallpaper-224x160.jpg'/></a>
            </div>
            <div class="post_relate last">
                <a href='#'><img src='http://localhost/best-picture/wp-content/uploads/2013/10/Download-Nature-HD-Wallpaper-224x160.jpg'/></a>
            </div>
        </div>
    </div>
    <div class="widget_single fr">
        <div class="widget_box">

        </div>
    </div>
    <div class="clear"></div>
<?php // get_sidebar(); ?>
<?php get_footer(); ?>