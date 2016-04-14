<?php
/**
 * @var ffOptionsQuery $query
 *
 * @link http://milothemes.com/wien/pricing-plan.html
 */
?><section<?php
ff_load_section_printer(
	'section-fullwidth-wrapper'
	, $query->get('section-fullwidth-wrapper')
	, array(
		'class' => 'clearfix',
		'section'=>'pricing-tables'
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
			foreach ($query->get('tables') as $table)
			{
				$bootstrapClasses =  ff_load_section_printer(
					'bootstrap-columns',
					$table->get('bootstrap-columns')
				);
				$icon = $table->getIcon('icon');
				$animation =  ff_load_section_printer(
					'animation',
					$table
				);
			?>
			<div class="<?php echo esc_attr($bootstrapClasses); ?>">

				<div class="price-plan wow <?php echo esc_attr($animation); ?>">

					<div class="price-plan-heading">
						<i class="<?php echo esc_attr($icon); ?>"></i>
						<h3><?php $table->printText('title'); ?></h3>
						<h1><sup><?php $table->printText('currency'); ?></sup><?php $table->printText('price'); ?><small><?php $table->printText('time-period'); ?></small></h1>
					</div>

					<ul>
						<?php
						foreach ($table->get('rows') as $row)
						{
							?>
							<li><?php $row->printText('item');?></li>
						<?php
						}
						?>
					</ul>

					<?php
						ff_load_section_printer( 'button', $table );
					?>

				</div>

			</div>
			<?php
			}
			?>
		</div>
	</div>
</section>