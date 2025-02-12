<?php get_header(); ?>

<main>
    <div class="container">
        <h2>Dobrodošli na <?php bloginfo('name'); ?></h2>

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article>
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <p><?php the_excerpt(); ?></p>
            </article>
        <?php endwhile; else: ?>
            <p>Nema postova za prikaz.</p>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>
