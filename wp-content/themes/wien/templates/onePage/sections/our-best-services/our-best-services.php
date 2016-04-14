<?php
/**
 * @var ffOptionsQuery $query
 *
 * @link http://milothemes.com/wien/index.html
 */
?><section<?php
ff_load_section_printer(
	'section-fullwidth-wrapper'
	, $query->get('section-fullwidth-wrapper')
	, array(
		'class' => 'clearfix',
		'section'=>'our-best-services'
	)
);
?>>
	<?php
	ff_load_section_printer(
		'section-background'
		, $query->get('section-fullwidth-wrapper background')
	);
	?>
	<div<?php
	ff_load_section_printer(
		'section-boxed-wrapper'
		, $query->get('section-boxed-wrapper')
		, array(
			'boxed' => 1,
		)
	);
	?>>
		<?php
		ff_load_section_printer( 'section-background', $query->get('section-boxed-wrapper background') );
		ff_load_section_printer('heading-wrapped', $query);
?>
		<div class="row">
			<?php
			foreach ($query->get('our-services') as $service){
				$bootstrapClasses =  ff_load_section_printer(
					'bootstrap-columns',
					$service->get('bootstrap-columns')
				);
				$animation = ff_load_section_printer('animation', $service);
				$icon = $service->getIcon('icon');
				?>
				<div class="<?php echo esc_attr($bootstrapClasses); ?>">

					<div class="services-boxes style-1 wow <?php echo esc_attr($animation); ?>">

						<i class="<?php echo esc_attr($icon); ?>"></i>

						<div class="services-boxes-content">

							<h4><a href="<?php echo esc_url($service->get('link'));?>"><?php ff_wp_kses($service->printText('title')); ?></a></h4>

							<p><?php ff_wp_kses($service->printText('description')); ?></p>

							<a href="<?php echo esc_url($service->get('link'));?>">+</a>

						</div>

					</div>

				</div>
			<?php
			}
			?>
		</div>
	</div>
</section>