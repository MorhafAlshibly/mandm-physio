<?php get_header(); ?>

<main class="max-w-screen-lg mx-auto py-10 px-4">
    <?php
    while (have_posts()):
        the_post();
        the_content();
    endwhile;
    ?>
</main>

<?php get_footer(); ?>