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
		'section'=>'title-and-breadcrumbs'
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
		ff_load_section_printer(
			'section-background'
			, $query->get('section-boxed-wrapper background')
		);
		?>
		<div class="title-and-breadcrumbs-container">
			<?php if( $query->get('show-title') ) { ?>
				<h4 class="pull-left"><?php
					ff_load_section_printer(
						'page-title'
						, $query->get('translation')
					);
					?></h4>
			<?php } ?>
			<?php
			if( $query->get('breadcrumbs show') ) {

				$breadcrumbsCollection = ffContainer()->getLibManager()->createBreadcrumbs()->generateBreadcrumbs();

				echo '<ul class="breadcrumb pull-right">';
				$breadcrumbsArray = array();
				$connector = '';
				foreach( $breadcrumbsCollection as $oneItem ) {
					$nextItem = '';

					if( $oneItem->queryType == ffConstQuery::HOME ) {
						$oneItem->name = $query->get('breadcrumbs homepage');
					}

					if( $oneItem->isSelected ) {
						$nextItem .= '<li class="active">';
						$nextItem .= $oneItem->name;
						$nextItem .= '</li>'."\n";
					} else {
						$nextItem .= '<li><a href="'.esc_url($oneItem->url).'">';
						$nextItem .= $oneItem->name;
						$nextItem .= '</a></li>'."\n";
					}

					$breadcrumbsArray[] = $nextItem;
				}

				echo implode( $connector, $breadcrumbsArray );

				echo '</ul>';
			}
			?>
		</div>
	</div>
</section>