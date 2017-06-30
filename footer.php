        <footer >
            <div class="row">
                <div class="three columns">
                    <?php dynamic_sidebar('Main Footer Navigation Left'); ?>
                </div>
                <div class="three columns">
                    <?php dynamic_sidebar('Customer Navigation Footer'); ?>
                </div>
                <div class="three columns">
                    <?php dynamic_sidebar('Simple Stencil Footer'); ?>
                    <?php dynamic_sidebar('Footer Searchbar'); ?>
                </div>
                <div class="three columns">
                    <?php dynamic_sidebar('Footer Social Media'); ?>
                    <?php dynamic_sidebar('Footer Newsletter Signup'); ?>
                </div>
            </div>

            <div class="row">
                <div class="twelve columns">
                    <?php wp_nav_menu(array(
                      'theme_location'     =>  'menu-footer',
                			'sort_column'        =>  'menu_order',
                			'container_class'    =>  'menu-footer'
                		));
                    ?>
                </div>
        </footer>
    <?php wp_footer(); ?>
</body>
</html>
