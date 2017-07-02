<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
    <!-- Links to our Style.css file -->
	<link rel="stylesheet" type="text/css" href="
        <?php bloginfo('stylesheet_url'); ?>
    " />
</head>
<body>
     <!-- Begin Header Div -->
        <header>

            <div class="row">
              <div class="twelve columns">
                  <?php wp_nav_menu(array(
                          'theme_location'     =>  'menu-top',
                          'sort_column'        =>  'menu_order',
                          'container_class'    =>  'menu-header'
                      ));
                  ?>
              </div>
            </div>

          <div class="row">
            <div class="four columns">
                <div id="logo">
                    <a href="<?php $url = home_url('/'); echo $url; ?>"><h1>Home</h1>
                    </a>
                </div>
                <?php dynamic_sidebar('Social Media Icons Widget'); ?>
            </div>

            <div class="four columns">
                <?php dynamic_sidebar('Searchbar'); ?>
            </div>

            <div class="four columns">
                <?php dynamic_sidebar('Account Widget'); ?>
            </div>
          </div>


        </header>

    <div class="border">
    </div>
<hr />
<div class="container">
