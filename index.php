<?php get_header(); ?>

        <!-- Content -->
        <div id="content">
    
            <!-- Top story -->

            <div id="topstory" class="box">
                
 	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>
                
                <div id="topstory-desc">
                
                    <div id="topstory-title">
                    
                        <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                    
                        <p class="info"><strong><?php the_time('F j, Y'); ?></strong> &nbsp;&nbsp;
                        Category: <strong><?php the_category(', ') ?></strong><?php if ('open' == $post->comment_status) { ?> &nbsp;&nbsp;<strong><a href="#comments" class="ico-comment"><?php comments_number(__('No Comments &#187;'), __('1 Comment &#187;'), __('% Comments &#187;')); ?></a></strong></p><?php } ?>
                        
                    </div> <!-- /topstory-title -->

                    <div id="topstory-desc-in">                    
                    
                        <p><?php the_content('Read the rest of this entry &raquo;'); ?></p>                        

                   </div></div> <!-- /topstory-desc-in -->
       		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>

	<?php else : ?>
                <div id="topstory-desc">
		<h2 style="text-align: center">Not Found</h2>
		<p style="text-align: center">Sorry, but you are looking for something that isn't here.</p>
</div>

	<?php endif; ?>        
                
            </div> <!-- /topstory -->
            
            <hr class="noscreen" />

            <div class="content-padding"></div>



        </div> <!-- /content -->
    
        <hr class="noscreen" />

<?php get_sidebar(); ?>
<?php get_footer(); ?>