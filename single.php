<?php get_header(); ?>

<div class="panel single <?php foreach ((get_the_category()) as $category) { echo $category->slug; } ?>">

    <h1 class="heading"><?php the_title(); ?></h1>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <?php the_content(); ?>

    <?php endwhile; endif; ?>

</div>

<?php get_footer(); ?>