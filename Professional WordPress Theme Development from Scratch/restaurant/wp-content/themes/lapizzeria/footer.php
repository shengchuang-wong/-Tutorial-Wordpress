    
    <footer>
        <?php
            $args = array(
                'theme_location' => 'header-menu',
                'container' => 'nav',
                'after' => '<span class="separator"> | </span>'
            );
            wp_nav_menu($args);
        ?>
        
        <div class="location">
            <p><?php echo esc_html(get_option('lapizzeria_info_location')); ?></p>
            <p>Phone Number: <?php echo esc_html(get_option('lapizzeria_info_phonenumber')); ?></p>
        </div>
        
        <p class="copyright">All rights reversed <?php echo date('Y') ?> &copy; copyrighted</p>        
    </footer>

    <?php wp_footer(); ?>
</body>
</html>