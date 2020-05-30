<?php echo "<?xml version=\"1.0\" ?>"; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head>

    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

    <link rel="stylesheet" media="screen,projection" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />

    <!--[if lte IE 6]><link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/main-msie.css" /><![endif]-->

    <link rel="stylesheet" media="screen,projection" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/scheme.css" />

    <link rel="stylesheet" media="print" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/print.css" />



    <title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>

</head>



<body>



<div id="main">



    <!-- Header -->

    <div id="header">



        <!-- Your logo -->

        <h1 id="logo"><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>

        <hr class="noscreen" />



        <!-- Hidden navigation -->

        <p class="noscreen noprint"><em>Quick links: <a href="#content">content</a>, <a href="#nav">navigation</a>, <a href="#search">search</a>.</em></p>



    </div> <!-- /header -->



    <hr class="noscreen" />



    <!-- Navigation -->

    <div id="nav" class="box">

        

        <h3 class="noscreen">Navigation</h3>

        

        <ul>

            <li<?php if ( is_home() or is_archive() or is_single() or is_paged() or is_search() or (function_exists('is_tag') and is_tag()) ) { echo ' class="current_page_item"'; } ?>><a href="<?php echo get_option('home'); ?>">Home</a></li> <!-- Active page (highlighted) -->

           <?php wp_list_pages('title_li='); ?>

        </ul>

    

    </div> <!-- /nav -->



    <hr class="noscreen" />



    <!-- 2 columns (Content + Sidebar) -->

    <div id="cols-top"></div>

    <div id="cols" class="box">
