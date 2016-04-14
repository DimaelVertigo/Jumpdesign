<?php
/**
 * @var ffOptionsQuery $query
 *
 * @link http://milothemes.com/wien/portfolio-titles.html
 */
?><section<?php
ff_load_section_printer(
	'section-fullwidth-wrapper'
	, $query->get('section-fullwidth-wrapper')
	, array(
		'class' => 'clearfix',
		'section'=>'portfolio-archive-filterable-1'
	)
);
?>>
	<?php
	ff_load_section_printer(
		'section-background'
		, $query->get('section-fullwidth-wrapper background')
	);

	$fwc = ffContainer::getInstance();
	$postMeta = $fwc->getDataStorageFactory()->createDataStorageWPPostMetas();
	rewind_posts();
	$postCounter = 0;
	global $post;

	$tags = ff_get_all_portfolio_tags();
	?>
	<div<?php
	ff_load_section_printer(
		'section-boxed-wrapper'
		, $query->get('filterset section-boxed-wrapper')
		, array(
			'boxed' => 1,
		)
	);
	?>>
		<?php
		ff_load_section_printer( 'section-background', $query->get('filterset section-boxed-wrapper background') );


		if( !empty( $tags ) && $query->get('show-filterable') ) {
			?>

			<?php ff_print_before_section( $query->get('section-settings-sortable section-settings')); ?>

			<div class="row">
				<div class="col-sm-12">

					<ul class="filter">
						<li>
							<a class="active" href="#" data-filter="*"><?php echo ff_wp_kses($query->get('trans-button-all'));?></a>
						</li>
						<?php
						foreach( $tags as $oneTag ) {
							echo '<li>';
							echo '<a href="#" data-filter=".ff-tag-'.absint($oneTag->term_id).'">'.ff_wp_kses($oneTag->name).'</a>';
							echo '</li>';
						}
						?>
					</ul>

				</div>
			</div>
		<?php
		} ?>
	</div>
	<div<?php
	ff_load_section_printer(
		'section-boxed-wrapper'
		, $query->get('portfolioset section-boxed-wrapper')
		, array(
			'boxed' => $query->get('portfolioset is-boxed'),
		)
	);
	?>>
		<?php
		ff_load_section_printer( 'section-background', $query->get('portfolioset section-boxed-wrapper background') );

		/**********************************************************************************************************************/
		/* NUMBER OF COLUMNS
		/**********************************************************************************************************************/
		$numberOfColums = $query->get('number-of-columns');
		$columnsClass = 12/$numberOfColums;
		/**********************************************************************************************************************/
		/* POST LOOP START
		/**********************************************************************************************************************/
		$loop_index = 0;
		if ( have_posts() ) {

			while (have_posts()) {
				the_post();
				if (0 == $loop_index % $numberOfColums) {
					echo "<div class='row'>";
				}
				/**********************************************************************************************************************/
				/* VARIABLE INIT
				/**********************************************************************************************************************/
				$currentPostId = $post->ID;

				$data = $postMeta->getOption($currentPostId, 'portfolio_category_options');
				$postQuery = $fwc->getOptionsFactory()->createQuery($data, 'ffComponent_Theme_MetaboxPortfolio_CategoryView');
				/**********************************************************************************************************************/
				/* TAGS AND SUB HEADING
				/**********************************************************************************************************************/
				$tags = ff_get_all_tags_for_one_portfolio_item();
				$subtitle = '';
				$sortableClasses = '';
				if (!empty($tags)) {
					foreach ($tags as $oneTag) {
						if (empty($subheading)) {
							$subtitle = $oneTag->name;
						}

						$sortableClasses .= ' ff-tag-' . esc_attr($oneTag->term_id);
					}
				}
				/**********************************************************************************************************************/
				/* PORTFOLIO SUB TITLE
				/**********************************************************************************************************************/
				if ($postQuery->get('general subtitle different')) {
					$subtitle = $postQuery->get('general subtitle subtitle');
				}
				/**********************************************************************************************************************/
				/* BUTTON CAPTION & URL
				/**********************************************************************************************************************/
				$buttonCaption = '';
				$buttonUrl = '';

				if( $query->get('linkTitle') == 'button') {
					if ($postQuery->get('general button different-url')) {
						$buttonUrl = $postQuery->get('general button url');
					} else {
						$buttonUrl = get_permalink($post->ID);
					}
				}
				/**********************************************************************************************************************/
				/* FEATURED IMAGE
				/**********************************************************************************************************************/
				$imageUrlNonresized = wp_get_attachment_url(get_post_thumbnail_id($post->ID));

				if ($imageUrlNonresized == null) {
					return;
				}

				$imageUrlResized = $imageUrlNonresized;

				$featuredImageQuery = $query->get('featured-image');

				$width = $featuredImageQuery->get('width');
				$height = $featuredImageQuery->get('height');


				if (absint($width) == 0) {
					$width = null;
				}

				if (absint($height) == 0) {
					$height = null;
				}

				if ($featuredImageQuery->get('resize')) {
					$imageUrlResized = fImg::resize($imageUrlNonresized, $width, $height, true);
				}


                $portfolioFeaturedImageClass = 'fancybox-portfolio-gallery';

                if( $featuredImageQuery->get('link') == 'single' ) {
                    $portfolioFeaturedImageClass = '';

                    $imageUrlNonresized = $buttonUrl;
                }
				?>

				<div class="col-sm-<?php echo esc_attr($columnsClass);?>">
					<div class="portfolio-item">

						<div class="portfolio-item-thumbnail">

							<img src="<?php echo esc_url($imageUrlResized); ?>" alt="">

								<div class="portfolio-item-hover">
									<?php
									if ($featuredImageQuery->get('link') == 'lightbox' || $featuredImageQuery->get('link') == 'single' ) {
										?>
										<a class="<?php echo esc_attr( $portfolioFeaturedImageClass ); ?> zoom-action"
										   href="<?php echo esc_url($imageUrlNonresized); ?>">+</a>
									<?php
									}
									?>
								</div>
						</div>

						<div class="portfolio-item-description">
							<h4>
								<?php
								if ($query->get('linkTitle') == 'button') {
									echo '<a href="' . esc_url($buttonUrl) . '">';
									the_title();
									echo '</a>';
								}
								else{
									echo get_the_title();
								}?>
							</h4>
							<h5><?php echo ff_wp_kses($subtitle); ?></h5>
						</div>

					</div>
				</div>
				<?php
				if ($numberOfColums - 1 == $loop_index % $numberOfColums) {
					echo "</div>";
				}
				$loop_index++;
			}
			if (0 != $loop_index % $numberOfColums) {
				echo "</div>";
			}
		}
		?>
	</div>
</section>