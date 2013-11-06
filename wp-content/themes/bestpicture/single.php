<?php
/**
 * The Template for displaying all single posts.
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
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <div class="nav_single clearfix">
                <span class="lbNav">Wallpaper Gallery:</span>
                <span>
                    <?php $cat = get_the_category($post->ID); ?>
                    <a href="<?php echo get_category_link($cat[0]->term_id); ?> ">
                        <?php echo $cat[0]->name; ?>
                    </a>
                </span>
                <div class="fr post-direction">
                    <table>
                        <tr>
                            <td><?php previous_post_link('%link', '<span class="post-prev"></span>', TRUE); ?> </td>
                            <td align="left">Preview</td>
                            <td>&nbsp;</td>
                            <td align="right">Next</td>
                            <td><?php next_post_link('%link', '<span class="post-next"></span>', TRUE); ?></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="image_detail">
                <a href="<?php the_permalink() ?>" title="<?php the_title() ?>">
                    <?php if (has_post_thumbnail($post->ID)) { ?>
                        <?php echo get_the_post_thumbnail($post->ID, 'medium'); ?>
                    <?php } ?>
                </a>
                <div class="single-option clearfix">
                    <div class="fl" style="width: 65%;">
                        <?php the_content() ?>
                        <span class="downloads">Downloads: <?php echo $post->download; ?></span>
                    </div>
                    <div class="fr" style="width: 35%;">
                        <span class="show-info1">Original: </span><span class="show-info2">
                            <?php
                            if (has_post_thumbnail($post->ID)) {
                                $post_thumbnail_id = get_post_thumbnail_id($post->ID);
                                $imageInfo = wp_get_attachment_image_src($post_thumbnail_id, 'full', true);
                                echo $imageInfo[1] . 'x' . $imageInfo[2];
                            }
                            ?>
                        </span><br/>
                        
                        <select id="resolution" class="resolution" name="resolution" onchange="javascript:selectRash(this)">
                            <option value="1" disabled="" selected="selected">Select Resolution:</option>
                            <optgroup label="Widescreen 16:10">
                                <option value="1920x1200">1920x1200</option>
                                <option value="1680x1050">1680x1050</option>
                                <option value="1440x900">1440x900</option>
                                <option value="1280x800">1280x800</option>
                            </optgroup>
                            <optgroup label="Widescreen 16:9">
                                <option value="1600x900">1600x900</option>
                            </optgroup>
                            <optgroup label="Fullscreen 4:3">
                                <option value="1600x1200">1600x1200</option>
                                <option value="1400x1050">1400x1050</option>
                                <option value="1280x960">1280x960</option>
                                <option value="1024x768">1024x768</option>
                            </optgroup>
                            <optgroup label="Fullscreen 5:4">
                                <option value="1280x1024">1280x1024</option>
                                <option value="1152x864">1152x864</option>
                            </optgroup>
                            <optgroup label="HDTV">
                                <option value="1280x720">1280x720</option>
                                <option value="1920x1080">1920x1080</option>
                            </optgroup>
                            <optgroup label="Netbook">
                                <option value="1366x768">1366x768</option>
                                <option value="1024x600">1024x600</option>
                                <option value="800x480">800x480</option>
                            </optgroup>
                            <optgroup label="Apple Devices">
                                <option value="1024x1024">1024x1024 iPad and iPad 2</option>
                                <option value="640x960">640x960 iPhone 4/4S</option>
                                <option value="1136x640">1136x640 iPhone 5</option>
                                <option value="320x480">320x480 iPhone/3G/3GS</option>
                            </optgroup>
                            <optgroup label="Google Android">
                                <option value="1080x960">1080x960</option>
                                <option value="960x854">960x854</option>
                                <option value="960x800">960x800</option>
                                <option value="640x480">640x480</option>
                                <option value="600x1024">600x1024 Amazon Kindle Fire</option>
                            </optgroup>
                            <optgroup label="Phone">
                                <option value="960x544">960x544 Sony PS Vita</option>
                                <option value="480x800">480x800 Windows Phone 7</option>
                                <option value="480x272">480x272 Sony PSP</option>
                                <option value="360x480">360x480 Blackberry</option>
                                <option value="320x400">320x400 Palm Pixi, HP Veer</option>
                                <option value="320x240">320x240 Cellphone</option>
                            </optgroup>
                        </select>
                    </div>
                </div>
                <p><span class="tag-title">Tags: </span><span class="single-tag"><?php the_tags('', ', '); ?></p>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>

    <div class="clear"></div>
    <div class="line"></div>        
    <div class="group_relate clearfix">
        <?php wp_related_posts() ?>
    </div>
    <div class="fb-comment">
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id))
                            return;
                        js = d.createElement(s);
                        js.id = id;
                        js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=542409615782070";
                        fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));</script>

        <fb:comments href="<?php echo get_permalink(); ?>" width="720" num_posts="10"></fb:comments>
    </div>
</div>
<div class="widget_single fr">
    <div class="widget_box sidebar-single">
        <?php dynamic_sidebar('sidebar-2'); ?>
    </div>
</div>
<div class="clear"></div>
<script>
    var url = '<?php echo get_permalink(get_page_by_path('crop-image')); ?>';
    
    function selectRash(e){
        var resolution = e.value;
        document.location = url+'?id=<?php echo $post->ID ?>&resolution='+resolution
    }
</script>
<?php // get_sidebar(); ?>
<?php get_footer(); ?>

