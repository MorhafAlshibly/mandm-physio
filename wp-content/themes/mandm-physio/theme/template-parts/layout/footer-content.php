<?php
/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package MandM_Physio
 */

?>

<footer>
	<div class="grid grid-cols-1 justify-items-start items-center w-full pb-15 gap-10">
		<div class="bg-[#EEEEEE] h-0.5 w-full"></div>
		<div
			class="grid grid-cols-1 lg:grid-cols-[300px_auto_300px] w-full gap-8 justify-items-center lg:justify-items-between items-center">
			<div>
				<a href="<?php echo esc_url(home_url('/')); ?>">
					<img src="<?php echo esc_url(get_site_icon_url()); ?>" alt="<?php bloginfo('name'); ?>"
						class="w-10 h-auto" />
				</a>
			</div>
			<div class="grid grid-cols-1 justify-items-center">
				<?php get_template_part("template-parts/content/socials", "socials"); ?>
			</div>
			<div class="text-[#999999] text-sm justify-items-end p-0">
				<p>
					<?php
					printf(
						esc_html__('© %1$s %2$s. All rights reserved.', 'mandm-physio'),
						date_i18n('Y'),
						get_bloginfo('name')
					);
					?>
				</p>
			</div>



		</div>

</footer>