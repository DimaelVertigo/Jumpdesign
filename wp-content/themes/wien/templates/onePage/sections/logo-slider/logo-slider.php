<?php
/**
 * @var ffOptionsQuery $query
 *
 * @link http://milothemes.com/wien/about-us.html
 */
?><section<?php
ff_load_section_printer(
	'section-fullwidth-wrapper'
	, $query->get('section-fullwidth-wrapper')
	, array(
		'class' => 'clearfix',
		'section'=>'logo-slider'
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
			<div class="col-sm-12">

				<ul class="logos clearfix">
					<?php foreach ($query->get('logos') as $logo)
					{
						?>
						<li><?php ff_load_section_printer('image', $logo); ?></li>
					<?php
					}
					?>
				</ul>

			</div>
		</div>
	</div>
</section>