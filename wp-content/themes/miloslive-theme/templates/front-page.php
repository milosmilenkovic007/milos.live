<?php
/* Template Name: Home Page */
get_header(); ?>

<main class="home-page">
    <section class="hero">
        <div class="hero-content">
            <h1 class="hero-title">MILOS</h1>
        </div>
    </section>
    
    <section class="about-section">
        <div class="container">
            <?php the_content(); ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>
