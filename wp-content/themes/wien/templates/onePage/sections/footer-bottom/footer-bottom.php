<?php
/**
 * @var ffOptionsQuery $query
 *
 * @link http://milothemes.com/wien/index.html
 */
?><footer<?php
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
			'boxed' => $query->get('is-boxed'),
		)
	);
	?>>
		<?php
		ff_load_section_printer( 'section-background', $query->get('section-boxed-wrapper background') );
		?>
		<div id="footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">

						<div class="widget widget-text">

							<div class="copyright">
								<p class="last">
									<?php
										$image = $query->getImage('image')->url;
									?>
									<?php
										if ($query->get('show-image')) {
									?>
									<img src="<?php echo esc_url($image) ?>" alt="">
									<?php
										}
										$query->printText('content');
									?>
								</p>
							</div>

						</div>

					</div>
					<div class="col-sm-6">

						<div class="widget widget_social">

							<div class="social-media">
								<?php
								$socialLinks = $query->get('social');
								$linksTranslated = ffContainer::getInstance()->getThemeFrameworkFactory()->getSocialFeedCreator()->getFeedFromLinks($socialLinks);

								if( !empty( $linksTranslated ) ) {
									foreach( $linksTranslated as $oneLink ) {
										?>
										<a class="<?php echo esc_attr($oneLink->type);?>" href="<?php echo esc_url($oneLink->link);?>" target="_blank">
											<i class="fa fa-<?php echo esc_attr($oneLink->type);?>"></i>
										</a>
									<?php
									}
								}
								?>
							</div>

						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
