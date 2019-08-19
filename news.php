<div class="news">

    <div class="panel alliance">
        <h2 class="heading">Alliance News</h2>
        <?php
        $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'category_name' => 'alliance',
            'posts_per_page' => 3,
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

    <div class="panel neutral">
        <h2 class="heading">Server News</h2>
        <?php
        $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'category_name' => 'server',
            'posts_per_page' => 3,
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

    <div class="panel horde">
        <h2 class="heading">Horde News</h2>
        <?php
        $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'category_name' => 'horde',
            'posts_per_page' => 3,
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

</div>
