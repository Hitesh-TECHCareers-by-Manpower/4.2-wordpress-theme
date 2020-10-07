<footer>
    <h2><?php bloginfo('title');?> Footer</h2>
    <p>
        &copy;
        <?php echo date('Y');?>
            <a href="<?php echo site_url(); ?>">
                <?php  bloginfo('title');?>
            </a>
        All Right Reserved.
    </p>
</footer>
<?php
    wp_footer();
?>
</body>
</html>
