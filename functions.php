<?php
if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'before_widget' => '',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="title">',
        'after_title' => '</h3><div class="aside-padding box2">',
    ));
?>
<?php
function widget_transmission_search() {
?>
            <h3 class="title">Search</h3>
            <div class="aside-padding">
                <div id="search">
                    <form action="<?php bloginfo('url'); ?>" method="get">
                    	<div>
                            <span class="noscreen">Search:</span>
                            <input type="text" size="30" id="search-input" value="<?php the_search_query(); ?>" name="s" id="s" />
                            <input type="submit" value="Search" id="search-submit" />
                    	</div>
                                    </form>
                </div>
                        </div>
<?php
}
if ( function_exists('register_sidebar_widget') )
    register_sidebar_widget(__('Search'), 'widget_transmission_search');
?>
<?php
function widget_transmission_feeds() {
?>
            <h3 class="title">Feeds</h3>
                        <div class="aside-padding box">
                            <ul id="rss">
         <li><a href="<?php bloginfo('rss2_url'); ?>">Articles</a></li>
         <li><a href="<?php bloginfo('comments_rss2_url'); ?>">Comments</a></li>
                </ul>
                        </div> 
<?php
}
if ( function_exists('register_sidebar_widget') )
    register_sidebar_widget(__('Feeds'), 'widget_transmission_feeds');
add_action('admin_menu', 'Transmission_add_theme_page');

function ml_input( $var, $type, $description = "", $value = "", $selected="" ) {

	// ------------------------
	// add a form input control
	// ------------------------
	
 	echo "\n";
 	
	switch( $type ){
	
	    case "text":

	 		echo "<input name=\"$var\" id=\"$var\" type=\"$type\" style=\"width: 60%\" class=\"textbox\" value=\"$value\" />";
			
			break;
			
		case "submit":
		
	 		echo "<p class=\"submit\"><input name=\"$var\" type=\"$type\" value=\"$value\" /></p>";

			break;

		case "option":
		
			if( $selected == $value ) { $extra = "selected=\"true\""; }

			echo "<option value=\"$value\" $extra >$description</option>";
		
		    break;

	}

}

function Transmission_add_theme_page() {
	if ( $_GET['page'] == basename(__FILE__) ) {
	
	    // save settings
		if ( 'save' == $_REQUEST['action'] ) {

			update_option( 'left_post_number', $_POST['left_post_num'] );
			update_option( 'right_post_number', $_POST['right_post_num'] );

			header("Location: themes.php?page=functions.php&saved=true");
			die;

  		// reset settings
		} else if( 'reset' == $_REQUEST['action'] ) {

			delete_option( 'left_post_number' );
			delete_option( 'right_post_number' );		
			
			// goto theme edit page
			header("Location: themes.php?page=functions.php&reset=true");
			die;

		}
	}


    add_theme_page("Transmission Options", "Transmission Options", 'edit_themes', basename(__FILE__), 'Transmission_theme_page');

} 

function Transmission_theme_page() {

	// --------------------------
	// VideoDen theme page content
	// --------------------------

	if ( $_REQUEST['saved'] ) echo '<div id="message" class="updated fade"><p><strong>Transmission Theme: Settings saved.</strong></p></div>';
	if ( $_REQUEST['reset'] ) echo '<div id="message" class="updated fade"><p><strong>Transmission Theme: Settings reset.</strong></p></div>';
	
?>

    <div class="wrap">
        <h2>Homepage Options:</h2>
        <form method="post" action="">
<?php

if ($_POST['left_post_num'] AND !preg_match("/[^0-9]+$/ ",$_POST['left_post_num'])) {
        update_option('left_post_number', $_POST['left_post_num']);
        } ?>

Number of additional left posts to display: <input name="left_post_num" id="left_post_num" type="text" value="<?php echo(get_option('left_post_number')); ?>" size="2" /><br/><br/>


<?php

if ($_POST['right_post_num'] AND !preg_match("/[^0-9]+$/ ",$_POST['right_post_num'])) {
        update_option('right_post_number', $_POST['right_post_num']);
        } ?>

Number of additional right posts to display: <input name="right_post_num" id="right_post_num" type="text" value="<?php echo(get_option('right_post_number')); ?>" size="2" /><br/><br/>


<input type="hidden" name="action" value="save" />
	<?php ml_input( "save", "submit", "", "Save Settings" );?>     </form><br/><br/>
<form method="post">

<h2>Reset</h2>

<p>If for whatever reason you want to "clean up" the settings set here or want to use another theme, click the <em>Reset Settings</em> button below.  To completely remove the theme, make sure to delete this theme folder in the <em>/wp-content/themes/</em> directory.</p>
<?php

	ml_input( "reset", "submit", "", "Reset Settings" );
	
?>

<input type="hidden" name="action" value="reset" />
</form>

<h2>Support</h2>

<p>If you need any support with this particular theme, feel free to post your question in the <a href="http://www.themelab.com/forums/forum/wp-transmission">WP Transmission support forum</a> over at <a href="http://www.themelab.com">Theme Lab</a>.</p>

</div>
  <?php } ?>