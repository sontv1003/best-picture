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
        <img height="100px" width="731px" src="<?php bloginfo('template_url'); ?>/images/banner.jpg" />
    </div>
</div>
<div class="gallery fl">
<?php
    $paged = get_query_var('paged');
    if(empty($paged))
        $paged = 1;
    
    $arrCats = array(
        'hide_empty'    => 1,
        'exclude'       => 1,
        'orderby'       => 'name',
	'order'         => 'ASC'
    );
    
    $categories = get_categories($arrCats);
    
    $numberCats         = count($categories);
    $showposts          = 1;
    $numberPostsOnPage  = 18;
    $numberPages        = ceil(($numberCats * $showposts) / $numberPostsOnPage);
    $numberPostFrom     = ($paged - 1) * $numberPostsOnPage + 1;
    $numberPostTo       = $numberPostFrom + $numberPostsOnPage - 1;
    $count              = 0;
    
    foreach($categories as $category):
        $args = array(
            'showposts'         => $showposts,
            'category__in'      => array($category->term_id),
            'caller_get_posts'  => 1,
            'orderby'           => 'meta_value',
            'meta_key'          => '_total_downloads',
            'order'             => 'DESC',
            'post_status'       => 'publish',
        );
       
        $posts = get_posts($args);

    if($posts):
        
        $count++;
        if($numberPostFrom > $count || $count > $numberPostTo) {
            continue;
        }
    
        foreach($posts as $post): setup_postdata($post); ?>
            <div class="box_image fl">
                <a href="<?php the_permalink() ?>" title="<?php the_title() ?>">
                    <?php if (has_post_thumbnail($post->ID)) { ?>
                        <?php echo get_the_post_thumbnail($post->ID, 'thumbnail'); ?>
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
        <?php endforeach; ?>
    <?php endif;
endforeach;
    ?>
    <div class="clear"></div>
    <div class="page-area">
        <div class="summary-page clearfix">
            <div class="summary-left">
                <h3><?php echo $numberPages; ?></h3>
                <span>pages</span>
            </div>
            <div class="summary-right">
                <h3><?php echo $numberCats * $showposts; ?></h3>
                <span>categories</span>
            </div>
        </div>
        <div class="nav-page">
            <div class="wp-pagenavi">
            <?php if($paged > 1) {?>
                <a class="previouspostslink" href="<?php echo site_url() ?>/page/<?php echo $paged - 1; ?>">«</a>
            <?php }?>
            <?php for($i = 1; $i <= $numberPages; $i++): ?>
                <?php if($paged == $i): ?>
                <span class="current"><?php echo $i ?></span>
                <?php else: ?>
                <a class="page larger" href="<?php echo site_url() ?>/page/<?php echo $i ?>"><?php echo $i ?></a>
                <?php endif; ?>
            <?php endfor; ?>
            <?php if(($paged+1) < $numberPages) {?>
                <a class="nextpostslink" href="<?php echo site_url() ?>/page/<?php echo $paged + 1; ?>">»</a>
            <?php }?>
            </div>
        </div>
    </div>
</div>
<div class="widget_content fr">
    <div class="widget_box sidebar_main">
<?php dynamic_sidebar('sidebar-1'); ?>
    </div>
</div>
<div class="clear"></div>
<?php get_footer(); ?>