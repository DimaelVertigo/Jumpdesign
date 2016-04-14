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
		'section'=>'footer-widgets'
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
		?>
		<div class="row ff-footer-wrapper">
			<?php
				for( $i=1; $i <= 4; $i++ ) {

					$data = $query->get('footer-'.absint($i));

					if( !$data->get('show-footer') ) {
						continue;
					}

					$bootstrap = $data->get('bootstrap-columns');

					$cssClass = ff_load_section_printer('bootstrap-columns', $bootstrap );

					if( is_active_sidebar( 'sidebar-footer-'.absint($i) ) ) {
						echo '<div class="' . esc_attr($cssClass) . '">';
						dynamic_sidebar('sidebar-footer-' . absint($i));
						echo '</div>';
					}
				}
			?>
		</div>
	</div>
</section>