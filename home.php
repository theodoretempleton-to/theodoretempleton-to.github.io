<?php get_header(); ?>

<?php

global $left_setting_num;
	if(get_settings('left_post_number')!='')
	{ 
		$left_setting_num = get_settings('left_post_number');
	}
	else
	{
		$left_setting_num = '3'; }

global $right_setting_num;
	if(get_settings('right_page_post_number')!='')
	{ 
		$right_setting_num = get_settings('right_page_post_number');
	}
	else
	{
		$right_setting_num = '15'; }

?>

        <!-- Content -->
        <div id="content">
    
            <!-- Top story -->

<?php $the_query = new WP_Query('showposts=1&orderby=post_date&order=desc');
			
				while ($the_query->have_posts()) : $the_query->the_post();

				$do_not_duplicate = $post->ID; ?>

            <div id="topstory" class="box">
                  
        <?php if ( get_post_meta($post->ID, 'topstory_image', true) ) { ?>          
                <div id="topstory-img"><img src="<?php bloginfo('stylesheet_directory'); ?>/topstory-images/<?php echo get_post_meta($post->ID, "topstory_image", $single = true); ?>" width="250" height="180" /></div><?php } ?>
                
                <div id="topstory-desc">
                
                    <div id="topstory-title">
                    
                        <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
                    
                        <p class="info"><strong><?php the_time('l, m. j. Y'); ?></strong> &nbsp;&nbsp;
Category: <strong><?php $cat = get_the_category(); $cat = $cat[0]; echo $cat->cat_name; ?></strong> &nbsp;&nbsp;
                        <strong><?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></strong></p>
                        
                    </div> <!-- /topstory-title -->

                    <div id="topstory-desc-in">                    
                    
              <p><?php echo strip_tags(get_the_excerpt(), '<a><strong>'); ?></p>                        

                    </div> <!-- /topstory-desc-in -->
                    
                </div> <!-- /topstory-desc -->
                
            </div> <!-- /topstory -->
            				<?php endwhile; ?>
            <hr class="noscreen" />

            <div class="content-padding">
<!-- Start Flickr Photostream -->
<?php if (function_exists('get_flickrrss')) { ?>
                <h3 class="hx-style01 nomt">Flickr Photostream</h3>
                
                <div id="photos" class="box">
                
   <?php get_flickrrss(); ?> 
                
                </div>
<?php } ?>
<!-- End Flickr Photostream -->

                <hr class="noscreen" />

                <div class="separator"></div>

                <!-- Older posts -->
                <h3 class="hx-style01 nom">Recent posts</h3>
    
            </div> <!-- /content-padding -->
                            
                <!-- 2 same width columns -->
                <div class="cols50 box">
                
                    <!-- Left column -->
                    <div class="col50">

<?php $odd_or_even = ' bg'; ?>

                    <?php $the_query = new WP_Query('showposts='.$left_setting_num.'&offset=1&orderby=post_date&order=desc');
			
					while ($the_query->have_posts()) : $the_query->the_post();

					$do_not_duplicate = $post->ID; ?>
                        <!-- Article -->                    
                        <div class="article<?php echo $odd_or_even; ?>">

                            <h4><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h4>
                            
                            <p class="info"><?php the_time('F j, Y'); ?> &nbsp;&nbsp;
                            <strong><?php $cat = get_the_category(); $cat = $cat[0]; echo $cat->cat_name; ?></strong> &nbsp;&nbsp;
                            <strong><?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></strong></p>
                            
                            <p><?php echo strip_tags(get_the_excerpt(), '<a><strong>'); ?></p>

                        </div> <!-- /article -->
<?php $odd_or_even = (' bg'==$odd_or_even) ? '' : ' bg'; ?>
                        <?php endwhile; ?>
                        
                        
                    </div> <!-- /col50 -->
                    
                    <hr class="noscreen" />
                    
                    <!-- Right column -->
                    <div class="col50-right">
                    
                        <ul class="ul-style01 box">
<?php 

$right_offset_num = $left_setting_num + 1;

$the_query = new WP_Query('showposts='.$right_setting_num.'&offset='.$right_offset_num.'&orderby=post_date&order=desc');
			
					while ($the_query->have_posts()) : $the_query->the_post();

					$do_not_duplicate = $post->ID; ?>

                            <li><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a><br /><span class="smaller low">(<?php the_time('j. m. y'); ?> &ndash; <?php $cat = get_the_category(); $cat = $cat[0]; echo $cat->cat_name; ?> &ndash; <?php comments_popup_link('0 Comments', '1 Comment', '% Comments'); ?>)</span></li>

             <?php endwhile; ?>

                        </ul>
                    
                    </div> <!-- /col50-right -->
                
                </div> <!-- /cols50 -->
            
        </div> <!-- /content -->
    
        <hr class="noscreen" />

<?php get_sidebar(); ?>
<?php get_footer(); ?>