<?php
/**
* @var ffOptionsQuery $query
*
* @link http://milothemes.com/wien/single-service.html
*/
?><section<?php
ff_load_section_printer(
	'section-fullwidth-wrapper'
	, $query->get('section-fullwidth-wrapper')
	, array(
		'class' => 'clearfix',
		'section'=>'boxes-with-icons'
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
			$image = $query->getImage('image');
			$imageUrlResized = fImg::resize($image->url, 190, 370, true);
			?>
			<div class="col-sm-4">
			<?php
			foreach ($query->get('boxesLeft') as $boxLeft) {
				$animation = ff_load_section_printer('animation', $boxLeft);
			?>

				<div class="services-boxes style-4 icon-right wow <?php echo esc_attr($animation); ?>">

					<i class="<?php echo esc_attr($boxLeft->getIcon('icon')); ?>"></i>
					<h4><a href="<?php echo esc_url($boxLeft->get('link')); ?>"><?php $boxLeft->printText('title'); ?></a></h4>

					<div class="services-boxes-content">
						<p><?php $boxLeft->printText('description'); ?></p>
					</div>

				</div>

			<?php
			}
			?>
			</div>

			<div class="col-sm-4">
				<p class="last text-center wow pulse">
					<img src="<?php echo esc_url($imageUrlResized) ?>" alt="">
				</p>
			</div>

			<div class="col-sm-4">
			<?php
			foreach ($query->get('boxesRight') as $boxRight) {
				$animation = ff_load_section_printer('animation', $boxRight);
				?>

					<div class="services-boxes style-4 icon-left wow <?php echo esc_attr($animation); ?>">

						<i class="<?php echo esc_attr($boxRight->getIcon('icon')); ?>"></i>
						<h4><a href="<?php echo esc_url($boxRight->get('link')); ?>"><?php $boxRight->printText('title'); ?></a></h4>

						<div class="services-boxes-content">
							<p><?php $boxRight->printText('description'); ?></p>
						</div>

					</div>

			<?php
			}
			?>
			</div>

		</div>
	</div>
</section>