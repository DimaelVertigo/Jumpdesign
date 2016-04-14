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
		'section'=>'team'
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
		ff_load_section_printer( 'heading-wrapped', $query );
		?>
		<div class="row">
			<?php
			$persons = $query->get('persons');
			foreach ($query->get('persons') as $person) {
				$bootstrapClasses =  ff_load_section_printer(
					'bootstrap-columns',
					$person->get('bootstrap-columns')
				);
				$animation = ff_load_section_printer('animation', $person);
				$image = $person->getImage('image');
				$imageUrlResized = fImg::resize($image->url, 360, 360, true);
				$position = $person->get('position');
				?>
				<div class="<?php echo esc_attr($bootstrapClasses); ?>">

					<div class="about-me wow <?php echo esc_attr($animation); ?>">

						<div class="about-me-thumbnail">

							<img src="<?php echo esc_url($imageUrlResized); ?>" alt="">
							<?php
							$socialLinks = $person->get('social');
							$linksTranslated = ffContainer::getInstance()->getThemeFrameworkFactory()->getSocialFeedCreator()->getFeedFromLinks($socialLinks);
							if( !empty( $linksTranslated ) ) {?>
								<div class="social-media">
									<?php
									foreach( $linksTranslated as $oneLink ) {
										?>
										<a class="<?php echo esc_attr($oneLink->type);?>" href="<?php echo esc_url($oneLink->link);?>">
											<i class="fa fa-<?php echo esc_attr($oneLink->type);?>"></i>
										</a>
										<?php
									}
									?>
								</div>
								<?php
							}
							?>

						</div>

						<div class="about-me-details">
							<h4><?php $person->printText('name'); ?></h4>
							<h5><?php $person->printText('position'); ?></h5>
						</div>

					</div>
				</div>
				<?php
			}
			?>
		</div>
	</div>
</section>