<?php get_header(); ?>

<h2>
    Archive Template:
    <?php echo get_the_archive_title(); ?>
</h2>

<?php while ( have_posts() ) : ?>
    <?php the_post();   //sets up globals /values for this iteration. ?>

    <articel>
        <h3><?php the_title(); ?></h3>
        <p>
            <strong>Article Published on:</strong>
            <time datetime="<?php echo get_the_date( DATE_ATOM ); ?>">
                <?php echo get_the_date(); //WP function gets the date of posting ?>
            </time>
        </p>
        <p>
            <?php the_excerpt(); //output the post summary. ?>
        </p>
        <p>
            <a href="<?php the_permalink(); //url to view this post. ?>">
                Read More
            </a>
        </p>

    </article>
<?php endwhile; ?>


<?php get_footer(); ?>