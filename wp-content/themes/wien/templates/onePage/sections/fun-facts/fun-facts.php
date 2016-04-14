<?php
/**
* @var ffOptionsQuery $query
*
* @link http://milothemes.com/wien/services.html
*/

wp_enqueue_script('ff-charts');

?><section<?php
ff_load_section_printer(
	'section-fullwidth-wrapper'
	, $query->get('section-fullwidth-wrapper')
	, array(
		'class' => 'clearfix',
		'section'=>'fun-facts'
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
			foreach ($query->get('facts') as $fact) {
				$bootstrapClasses =  ff_load_section_printer(
					'bootstrap-columns',
					$fact->get('bootstrap-columns')
				);

				$color = '#ffffff';

				if( $query->get('colors different-color') ) {
					$color = $query->get('colors color');
				}
			?>
			<div class="<?php echo esc_attr($bootstrapClasses); ?>">

				<div class="pie-chart" data-percent="<?php $fact->printText('percentage'); ?>" data-size="225" data-line-width="3" data-track-color="transparent" data-bar-color="<?php echo esc_attr($color); ?>">

					<div class="pie-chart-details">
						<h1>
							<span class="value"><?php $fact->printText('percentage'); ?></span>%
							<small><?php $fact->printText('title'); ?></small>
						</h1>
					</div>
				</div>
			</div>
			<?php
			}
			?>
		</div>
	</div>
</section>
