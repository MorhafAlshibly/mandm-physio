<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default. Please note that
 * this is the WordPress construct of pages: specifically, posts with a post
 * type of `page`.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package MandM_Physio
 */

get_header();
?>

<main class="grid grid-cols-1 gap-60">
	<?php get_template_part('template-parts/content/hero', 'hero'); ?>
	<?php get_template_part("template-parts/content/aboutus", "aboutus"); ?>
	<?php get_template_part("template-parts/content/services", "services"); ?>
	<?php get_template_part("template-parts/content/testimonials", "testimonials"); ?>
	<?php get_template_part("template-parts/content/locations", "locations"); ?>
	<?php get_template_part("template-parts/content/contact", "contact"); ?>
</main>

<?php
get_footer();
