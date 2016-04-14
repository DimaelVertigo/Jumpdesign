<?php
/**
 * @var ffOptionsQuery $query
 *
 * @link http://milothemes.com/wien/services.html
 */
?><section<?php
ff_load_section_printer(
	'section-fullwidth-wrapper'
	, $query->get('section-fullwidth-wrapper')
	, array(
		'class' => 'clearfix',
		'section'=>'services-without-numbers'
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
			foreach ($query->get('numbered-services') as $service){
				$bootstrapClasses =  ff_load_section_printer(
					'bootstrap-columns',
					$service->get('bootstrap-columns')
				);
				$icon = $service->getIcon('icon');
				$animation = ff_load_section_printer('animation', $service);
				?>
				<div class="<?php echo esc_attr($bootstrapClasses); ?>">

					<div class="services-boxes style-2 wow <?php echo esc_attr($animation); ?>">

						<i class="<?php echo esc_attr($icon); ?>"></i>

						<div class="services-boxes-content">

							<h4><a href="<?php echo esc_url($service->get('link'));?>"><?php $service->printText('title'); ?></a></h4>

							<p><?php $service->printText('description'); ?></p>

							<?php
							ff_load_section_printer( 'button', $service );
							?>
						</div>
					</div>
				</div>
				<?php
			}
			?>
		</div>
	</div>
</section>