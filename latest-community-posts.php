<div class="latest-community-posts">

    <div class="panel">
        <h2 class="heading">Community Stories</h2>
        <?php
        $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'category_name' => 'community',
            'posts_per_page' => 1,
        );
        $arr_posts = new WP_Query($args);
        ?>
        <?php if ($arr_posts->have_posts()): while ($arr_posts->have_posts()): $arr_posts->the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <a href="<?php the_permalink(); ?>">
                    <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('j M Y'); ?></time>
                    <h3><?php the_title(); ?><span class="read-more">&nbsp;&raquo;</span></h3>
                    <?php the_excerpt(); ?>
                </a>
            </article>
        <?php endwhile; endif; ?>
    </div>

    <div class="panel">
        <h2 class="heading">Gallery Entries</h2>
        <?php
        $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'category_name' => 'gallery',
            'posts_per_page' => 2,
        );
        $arr_posts = new WP_Query($args);
        ?>
        <div class="latest-gallery">
            <?php if ($arr_posts->have_posts()): while ($arr_posts->have_posts()): $arr_posts->the_post(); ?>
                <a href="<?php the_permalink(); ?>">
                    <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('j M Y'); ?></time>
                    <?php the_content(); ?>
                </a>
            <?php endwhile; endif; ?>
        </div>
    </div>

</div>
