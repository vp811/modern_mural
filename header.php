<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">

    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
    <!-- Links to our Style.css file -->
	<link rel="stylesheet" type="text/css" href="
        <?php bloginfo('stylesheet_url'); ?>
    " />

    <script src="https://use.typekit.net/ksi5iju.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
</head>
<body>
     <!-- Begin Header Div -->
        <header>
            <div class="row">
                <div class="three columns">
                    <div class="header-logo">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <img src="<?php echo( get_header_image() ); ?>" alt="<?php echo( get_bloginfo( 'title' ) ); ?>" />
                        </a>
                    </div>
                </div>

                <div class="six columns">
                    <nav>
                        <div class="menu-desktop">
                            <?php wp_nav_menu(array(
                               'theme_location'     =>  'desktop-menu',
                               'sort_column'        =>  'menu_order',
                               'container_class'    =>  'desktop-menu'
                                ));
                            ?>
                        </div>

                      <div id="menuToggle">
                        <input type="checkbox" />
                        <span></span>
                        <span></span>
                        <span></span>
                        <ul id="menu">
                           <div class="header-menu">
                                <?php wp_nav_menu(array(
                                   'theme_location'     =>  'menu-top',
                                   'sort_column'        =>  'menu_order',
                                   'container_class'    =>  'menu-header'
                                    ));
                                ?>
                            <div class="header-upload">
                                <?php dynamic_sidebar('Upload a Mural Slideout Menu'); ?>
                            </div>
                           </div>
                        </ul>
                      </div>
                    </nav>
                </div>

                 <div class="three columns">
                    <div class="header-account">
                        <?php dynamic_sidebar('Account Widget'); ?>
                        <?php wp_nav_menu(array(
                           'theme_location'     =>  'shopping-cart',
                           'sort_column'        =>  'menu_order',
                           'container_class'    =>  'shopping-cart'
                            ));
                        ?>
                    </div>
                 </div>
            </div>

          <div class="row" id="desktop-top">
                <div class="four columns">
                      <?php dynamic_sidebar('Searchbar'); ?>
                </div>

            <div class="four columns">
                <div class="header-social">
                    <?php dynamic_sidebar('Social Media Icons Widget'); ?>
                </div>
            </div>

            <div class="four columns">
                <div class="header-upload">
                    <?php dynamic_sidebar('Upload a Mural Header Widget'); ?>
                </div>
            </div>
          </div>


        </header>

    <div class="border">
    </div>
<div class="container">
