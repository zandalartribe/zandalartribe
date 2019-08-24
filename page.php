<?php get_header(); ?>

<div class="panel single">

    <div class="content">

        <h1 class="heading"><?php the_title(); ?></h1>

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <?php the_content(); ?>

        <?php endwhile; endif; ?>

    </div>

</div>

<?php get_footer(); ?>