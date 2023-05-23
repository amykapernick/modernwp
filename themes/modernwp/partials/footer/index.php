<?php
	$logo = wp_get_attachment_image_src(get_theme_mod( 'custom_logo' ), 'full')[0];
	$name = get_bloginfo('name');
	$address = get_field('address', 'option');
	$phone = get_field('phone', 'option');
	$email = get_field('email', 'option');
	$charity_logo = get_field('logo', 'option');

	$data = fetch_styles(__DIR__);
	
	$template = $data['template'];
	$styles = $data['styles'];
	
	get_template_part(
		'parts/modules',
		null,
		array(
			'name' => $template,
			'dir' => __DIR__,
			'env' => 'dev'
		)
	);
?>

<footer class="<?php echo classes([$styles['footer']]); ?>">
	<?php if (is_active_sidebar('aoc')) : ?>
		<div class="<?php echo classes([$styles['aoc']]); ?>">
			<?php dynamic_sidebar('aoc'); ?>
		</div>
	<?php endif; ?>
	<div class="<?php echo classes([$styles['copyright']]); ?>">
		<p>© <?php echo date("Y"); ?> <?php echo $name; ?></p>
	</div>
	<nav class="<?php echo classes([$styles['nav']]); ?>">
		<ul>
			<?php 
				wp_nav_menu(array(
					'theme_location' => 'footer_menu',
					'container' => false,
					'items_wrap' => '%3$s'
				));
			?>
			<li class="label menu-item menu-item-has-children">
				<span class="section">Contact Us</span>
				<ul class="sub-menu">
					<?php if(check_field_value($phone)): ?>
						<li>
							<address>
								<a
									target="_blank"
									href="tel:<?php echo preg_replace('/(\s|\(|\))+/', '', $phone); ?>"
								>
									<?php echo $phone; ?>
								</a>
							</address>
						</li>
					<?php endif; ?>
					<?php if(check_field_value($email)): ?>
						<li>
							<address>
								<a
									target="_blank"
									href="mailto:<?php echo $email; ?>"
								>
									<?php echo $email; ?>
								</a>
							</address>
						</li>
					<?php endif; ?>
					<li>
						<nav class="<?php echo classes([$styles['social']]); ?>">
							<ul>
								<?php 
									wp_nav_menu(array(
										'theme_location' => 'social_menu',
										'container' => false,
										'items_wrap' => '%3$s'
									));
								?>
							</ul>
						</nav>
					</li>
				</ul>
			</li>
		</ul>
	</nav>
	
	<nav class="<?php echo classes([$styles['social']]); ?>">
		<ul>
			<?php 
				wp_nav_menu(array(
					'theme_location' => 'social_menu',
					'container' => false,
					'items_wrap' => '%3$s'
				));
			?>
		</ul>
	</nav>
</footer>