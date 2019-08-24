<?php
/* 
Template Name: Gallery
*/
?>

<?php get_header(); ?>

<div class="panel single gallery">

    <div class="content">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <h1 class="heading"><?php the_title(); ?></h1>
            <?php the_content(); ?>
        <?php endwhile; endif; ?>

        <?php
        $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'category_name' => 'gallery',
        );
        $arr_posts = new WP_Query($args);
        ?>

        <ol class="gallery-entries">
            <?php if ($arr_posts->have_posts()): while ($arr_posts->have_posts()): $arr_posts->the_post(); ?>
                <li id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_content(); ?>
                    </a>
                </li>
            <?php endwhile; endif; ?>
        </ol>

    </div>

</div>

<?php get_footer(); ?>