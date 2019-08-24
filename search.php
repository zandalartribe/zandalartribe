<?php get_header(); ?>

<div class="panel single">

    <div class="content">

        <h1 class="heading">Search results for: "<?php echo get_search_query(); ?>"</h1>

        <?php if (have_posts()): ?>
            <ul>
                <?php while (have_posts()) : the_post(); ?>
                    <li>
                        <h3>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h3>
                        <?php the_excerpt(); ?>
                    </li>
                <?php endwhile; ?>
            </ul>
            <div class="pagination">
                <?php the_posts_pagination(); ?>
            </div>
        <?php else: ?>
            <p>Sorry, we couldn't find any results for: "<?php echo get_search_query(); ?>"</p>
        <?php endif; ?>

    </div>

</div>

<?php get_footer(); ?>
