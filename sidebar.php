        <!-- Sidebar -->

        <div id="aside">



<?php if ( !function_exists('dynamic_sidebar')

        || !dynamic_sidebar() ) : ?>



            <!-- Search -->

            <h3 class="title">Search</h3>        

            

            <div class="aside-padding">

                <div id="search">

                    <form action="<?php bloginfo('url'); ?>" method="get">

                    	<div>

                            <span class="noscreen">Search:</span>

                            <input type="text" size="30" id="search-input" value="<?php the_search_query(); ?>" name="s" />

                            <input type="submit" value="Search" id="search-submit" />

                    	</div>

                                    </form>

                </div> <!-- /search -->

            

            </div> <!-- /aside-padding -->

            

            <hr class="noscreen" />



            <!-- About me -->        

            <h3 class="title">About me</h3>

            

            <div class="aside-padding smaller low box">

            

                <p><img src="<?php bloginfo('stylesheet_directory'); ?>/tmp/image.gif" alt="" class="f-left" />

                Name: <strong>Your name</strong><br />

                Work: <strong>Graphic designer</strong><br />

                Location: <strong>New York</strong><br />

                <strong><a href="#" class="high">My profil on MySpace</a></strong></p>

            

            </div> <!-- /aside-padding -->



            <hr class="noscreen" />



            <!-- Categories -->

            <h3 class="title">Categories</h3>

            

            <div class="aside-padding box2">

            

                <ul>

                    <?php wp_list_categories('title_li='); ?> 

                </ul>



            

            </div> <!-- /aside-padding -->

            

            <hr class="noscreen" />



            <!-- Archives -->

            <h3 class="title">Archives</h3>

            

            <div class="aside-padding box2">

            

                <ul>

                    <?php wp_get_archives('title_li='); ?>

                </ul>



            

            </div> <!-- /aside-padding -->

            

            <hr class="noscreen" />



            <!-- Links -->

            <h3 class="title">Links</h3>

            

            <div class="aside-padding box2">

            

                <ul>

                   <?php wp_list_bookmarks('categorize=0&title_li='); ?>

                </ul>



            

            </div> <!-- /aside-padding -->

            

            <hr class="noscreen" />



            <!-- Meta -->

            <h3 class="title">Meta</h3>

            

            <div class="aside-padding box2">

            

                <ul>

                   		<?php wp_register(); ?>



					<li><?php wp_loginout(); ?></li>



					<li><a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional">Valid <abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a></li>



					<li><a href="http://gmpg.org/xfn/"><abbr title="XHTML Friends Network">XFN</abbr></a></li>



					<li><a href="http://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress</a></li>



					<?php wp_meta(); ?>

                </ul>



            

            </div> <!-- /aside-padding -->

            

            <hr class="noscreen" />



            <!-- RSS feeds -->        

            <h3 class="title">RSS feeds</h3>

            

            <div class="aside-padding">

            

                <ul id="rss">

                    <li><a href="<?php bloginfo('rss2_url'); ?>">Articles</a></li>

                    <li><a href="<?php bloginfo('comments_rss2_url'); ?>">Comments</a></li>

                </ul>

            

            </div> <!-- /aside-padding -->

    <?php endif; ?>

        </div> <!-- /aside -->



    </div> <!-- /cols -->

    <div id="cols-bottom"></div>



    <hr class="noscreen" />
