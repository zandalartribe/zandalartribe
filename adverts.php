<div class="adverts">
    
    <?php
    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'category_name' => 'advert',
        'orderby' => 'rand',
        'posts_per_page' => 5,
    );
    $arr_posts = new WP_Query($args);
    ?>

    <ul>
        <?php if ($arr_posts->have_posts()): while ($arr_posts->have_posts()): $arr_posts->the_post(); ?>
            <li>
                <?php the_content(); ?>
            </li>
        <?php endwhile; endif; ?>
    </ul>

</div>
