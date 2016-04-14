<?php
/**
 * @var ffOptionsQuery $query
 *
 * @link http://milothemes.com/wien/portfolio-classic.html
 */
?><section<?php
ff_load_section_printer(
	'section-fullwidth-wrapper'
	, $query->get('section-fullwidth-wrapper')
	, array(
		'class' => 'clearfix',
		'section'=>'portfolio-archive-classic'
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
		$fwc = ffContainer::getInstance();
		$postMeta = $fwc->getDataStorageFactory()->createDataStorageWPPostMetas();
		rewind_posts();
		$postCounter = 0;
		global $post;
		if ( have_posts() ) {

			while ( have_posts() ) {
				the_post();
				/**********************************************************************************************************************/
				/* VARIABLE INIT
				/**********************************************************************************************************************/
				$postCounter++;
				$currentPostId = $post->ID;

				$data = $postMeta->getOption( $currentPostId, 'portfolio_category_options');
				$postQuery = $fwc->getOptionsFactory()->createQuery( $data,'ffComponent_Theme_MetaboxPortfolio_CategoryView');
				/**********************************************************************************************************************/
				/* POST TITLE
				/**********************************************************************************************************************/
				$postTitle = '';
				if( $postQuery->get('general title different') ) {
					$postTitle = $postQuery->get('general title title');
				} else {
					$postTitle = get_the_title();
				}
				/**********************************************************************************************************************/
				/* FEATURED IMAGE
				/**********************************************************************************************************************/
				$imageUrlNonresized = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );

				if( $imageUrlNonresized == null ) {
					return;
				}

				$imageUrlResized = $imageUrlNonresized;

				$featuredImageQuery = $query->get('featured-image');

				$width = $featuredImageQuery->get('width');
				$height = $featuredImageQuery->get('height');


				if( absint($width) == 0 ) {
					$width = null;
				}

				if( absint($height) == 0 ) {
					$height = null;
				}

				if( $featuredImageQuery->get('resize') ) {
					$imageUrlResized = fImg::resize( $imageUrlNonresized, $width, $height, true );
				}

				/**********************************************************************************************************************/
				/* BUTTON CAPTION & URL
				/**********************************************************************************************************************/
				$buttonCaption = '';
				$buttonUrl = '';
				if( $query->get('button show') ) {

					if ($postQuery->get('general button different-caption')) {
						$buttonCaption = $postQuery->get('general button caption');
					} else {
						$buttonCaption = $query->get('button title');
					}

					if ($postQuery->get('general button different-url')) {
						$buttonUrl = $postQuery->get('general button url');
					} else {
						$buttonUrl = get_permalink($post->ID);
					}
				}
				/**********************************************************************************************************************/
				/* TAGS AND SUB HEADING
				/**********************************************************************************************************************/
				$tags = ff_get_all_tags_for_one_portfolio_item();
				$subtitle = '';
				if (!empty($tags)) {
					foreach ($tags as $oneTag) {
						if (empty($subheading)) {
							$subtitle = $oneTag->name;
						}
					}
				}
				/**********************************************************************************************************************/
				/* PORTFOLIO SUB TITLE
				/**********************************************************************************************************************/
				if ($postQuery->get('general subtitle different')) {
					$subtitle = $postQuery->get('general subtitle subtitle');
				}


                $portfolioFeaturedImageClass = 'fancybox-portfolio-gallery';

                if( $featuredImageQuery->get('link') == 'single' ) {
                    $portfolioFeaturedImageClass = '';

                    $imageUrlNonresized = $buttonUrl;
                }

				?>
				<div class="row">
					<div class="col-sm-12">

						<div class="portfolio-item classic">

							<div class="row">

								<div class="col-sm-8">
									<div class="portfolio-item-thumbnail">

										<img src="<?php echo esc_url($imageUrlResized);?>" alt="">

											<div class="portfolio-item-hover">
												<?php
												if( $featuredImageQuery->get('link') == 'lightbox' || $featuredImageQuery->get('link') == 'single' ) {
												?>
													<a class="<?php echo esc_attr( $portfolioFeaturedImageClass ); ?> zoom-action" href="<?php echo esc_url($imageUrlNonresized); ?>">
														+
													</a>
												<?php
												}
												?>
											</div>

									</div>
								</div>

								<div class="col-sm-4">

									<div class="portfolio-item-description">

										<h4>
											<?php
											if ($query->get('linkTitle') == 'button') {
												echo '<a href="' . get_permalink($post->ID) . '">' . get_the_title() . '</a>';
											}
											else{
												echo get_the_title();
											}?>
										</h4>
										<h5><?php echo ff_wp_kses($subtitle); ?></h5>

										<p>
											<?php echo ff_wp_kses($postQuery->get('general description description')); ?>
										</p>

										<?php
										if( $query->get('button show') ) {
											ff_load_section_printer(
												'button'
												, $query
												, array(
													'url' => $buttonUrl,
													'title' => $buttonCaption,
												)
											);
										}
										?>

									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
				<?php
			}
		}
		?>
	</div>
</section>


