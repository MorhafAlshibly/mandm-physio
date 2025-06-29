<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package MandM_Physio
 */

?>

<header class="sticky top-0 bg-white z-40">
	<div class="grid grid-cols-[125px_1fr_125px] items-center gap-8 w-full">
		<div>
			<a href="<?php echo esc_url(home_url('/')); ?>">
				<img src="<?php echo esc_url(trailingslashit(wp_upload_dir()['baseurl']) . '2025/06/mandm-physio-nobg.png'); ?>"
					alt="<?php bloginfo('name'); ?>" class="w-20 h-auto" />
			</a>
		</div>

		<div class="grid justify-items-center items-center w-full">
			<div class="max-w-[600px] w-full hidden lg:block">
				<nav aria-label="<?php esc_attr_e('Main Navigation', 'mandm-physio'); ?>">
					<?php
					wp_nav_menu([
						'theme_location' => 'menu-1',
						'menu_class' => 'grid grid-cols-5 gap-4 text-[#999999] items-center',
						'items_wrap' => '<ul id="%1$s" class="%2$s" aria-label="submenu">%3$s</ul>',
						'walker' => new class extends Walker_Nav_Menu {
						public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
						{
							static $index = 0;
							$classes = empty($item->classes) ? [] : (array) $item->classes;
							$class = match (true) {
								$index < 2 => 'justify-self-start',
								$index == 2 => 'justify-self-center',
								default => 'justify-self-end'
							};
							$classes[] = $class;
							$output .= '<li class="' . esc_attr(implode(' ', $classes)) . '">';
							$output .= '<a href="' . esc_url($item->url) . '">' . esc_html($item->title) . '</a>';
							$output .= '</li>';
							$index++;
						}
						}
					]);
					?>
				</nav>
			</div>

		</div>

		<div class="justify-items-end">
			<div>
				<button class="bg-black text-white rounded-full px-6 py-3 hover:bg-gray-900 transition">
					<a href="<?php echo esc_url(home_url('/booking')); ?>">
						<?php esc_html_e('Book Now', 'mandm-physio'); ?>
					</a>
				</button>
			</div>
		</div>

	</div>
</header>