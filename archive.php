<?php
/* 
Template Name: Archives
*/
?>

<?php get_header(); ?>

<div class="panel single news-archive">

    <div class="content">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <h1 class="heading"><?php the_title(); ?></h1>
            <?php the_content(); ?>
        <?php endwhile; endif; ?>

        <?php
        $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'category_name' => 'alliance,server,horde',
        );
        $arr_posts = new WP_Query($args);
        ?>

        <ol>
            <?php if ($arr_posts->have_posts()): while ($arr_posts->have_posts()): $arr_posts->the_post(); ?>
                <li id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('j M Y'); ?></time>
                    <article>
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <?php the_excerpt(); ?>
                    </article>
                </li>
            <?php endwhile; endif; ?>
        </ol>
    
    </div>

    <?php get_template_part('adverts'); ?>

</div>

<?php get_footer(); ?>