<?php
/**
 * @var ffOptionsQuery $query
 *
 * @link http://milothemes.com/wien/contact-2.html
 */

wp_enqueue_script('ff-google-maps');
wp_enqueue_script('ff-validate');

?>
<section<?php
ff_load_section_printer(
	'section-fullwidth-wrapper'
	, $query->get('section-fullwidth-wrapper')
	, array(
		'class' => 'clearfix',
		'section'=>'contact-form-2'
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

		$cformQuery = $query->get('contact-form');
		$descriptionQuery = $query->get('description');
		if( $descriptionQuery->get('show') ) {
			$cformClass = 'col-sm-9';
		} else {
			$cformClass = 'col-sm-12';
		}

			$mapQuery = $query->get('map');
			$address = $mapQuery->get('address');
			$description = $mapQuery->get('description');

			$addressEscaped = htmlspecialchars( $address );
			$descriptionEscaped = htmlspecialchars( $description );

			$zoom = $mapQuery->get('zoom');
		?>

		<div class="row">
			<div class="col-sm-12">
				<div class="map-container clearfix">
					<div class="map map-3" data-zoom="<?php echo esc_attr($zoom);?>" data-address="<?php echo esc_attr($addressEscaped); ?>" data-description="<?php echo  $descriptionEscaped; ?>"></div>
					<div class="contact-over-maps">
						<div class="contact-toggle">

							<div class="row">
								<div class="col-sm-12">
									<h3><a href="#"><?php echo ff_wp_kses($query->get('title')); ?></a></h3>
								</div>
							</div>

						</div>

						<div class="contact-content">

							<div class="row">
								<div class="<?php echo esc_attr($cformClass); ?>">

								<form id="contact-form" class="ff-contact-form" name="contact-form" action="assets/php/send.php" method="post">
										<fieldset>

											<div id="alert-area"></div>
											<div class="row">
												<div class="col-sm-4">

													<label for="name"><?php echo ff_wp_kses($cformQuery->get('name'));?>*</label>
													<input class="col-xs-12" id="name" type="text" name="name" placeholder="">

												</div>
												<div class="col-sm-4">

													<label for="email"><?php echo  $cformQuery->get('email');?>*</label>
													<input class="col-xs-12" id="email" type="text" name="email" placeholder="">

												</div>
												<div class="col-sm-4">

													<label for="subject"><?php echo ff_wp_kses($cformQuery->get('subject'));?>*</label>
													<input class="col-xs-12" id="subject" type="text" name="subject" placeholder="">

												</div>
											</div>

											<label for="message"><?php echo ff_wp_kses($cformQuery->get('message'));?>*</label>
											<textarea class="col-xs-12" id="message" name="message" rows="4" cols="25" placeholder=""></textarea>

											<input class="btn btn-white" id="submit" type="submit" name="submit" value="<?php echo esc_attr($cformQuery->get('button'));?>">

										</fieldset>

										<?php

										$data = array();

										$data['email'] = $query->get('contact-form-user-input email');
										$data['subject'] = $query->get('contact-form-user-input subject');

										$data = json_encode( $data );

										$cfMessages = $query->get('contact-form-messages');

										echo '<div class="ff-contact-info" style="display:none;">'.ffContainer::getInstance()->getCiphers()->freshfaceCipher_encode( $data ).'</div>';

										echo '<div class="ff-contact-messages" style="display:none">';

										echo '<div class="ff-validation-name">'. ff_wp_kses($cfMessages->get('validation-name')) . '</div>';
										echo '<div class="ff-validation-email">'.  $cfMessages->get('validation-email') . '</div>';
										echo '<div class="ff-validation-email-format">'.  $cfMessages->get('validation-email-format') . '</div>';
										echo '<div class="ff-validation-subject">'. ff_wp_kses($cfMessages->get('validation-subject')) . '</div>';
										echo '<div class="ff-validation-message">'. ff_wp_kses($cfMessages->get('validation-message')) . '</div>';
										echo '<div class="ff-validation-message-minlength">'. ff_wp_kses($cfMessages->get('validation-message-minlength')) . '</div>';
										echo '<div class="ff-message-send-ok">'. ff_wp_kses($cfMessages->get('message-send-ok')) . '</div>';
										echo '<div class="ff-message-send-wrong">'. ff_wp_kses($cfMessages->get('message-send-wrong')) . '</div>';

										echo '</div>';

										?>

									</form>

								</div>

								<?php if( $descriptionQuery->get('show') ) { ?>

									<div class="col-sm-3">

										<h4><?php echo ff_wp_kses($descriptionQuery->get('title'));?></h4>

										<br><br>

										<div class="widget widget_contact">
											<ul>
												<?php
												foreach( $descriptionQuery->get('description-boxes') as $oneBox ) {
													foreach( $oneBox->get('lines') as $oneLine ) {
														$type = $oneLine->getVariationType();

														if( $type == 'one-line' ) {
															echo '<li class="address"><i class="fa fa-map-marker"></i>'.ff_wp_kses($oneLine->get('text')).'</li>';
														} else if ( $type == 'one-heading' ) {
															echo '<li class="phone"><i class="fa fa-mobile"></i>'.ff_wp_kses($oneLine->get('text')).'</li>';
														} else if ( $type == 'one-email' ) {
															echo '<li class="email"><i class="fa fa-envelope"></i><a href="mailto:'.esc_attr( $oneLine->get('text') ).'">'.ff_wp_kses( $oneLine->get('text') ).'</a></li>';
														}
													}
												}
												?>
											</ul>
										</div>

											<div class="widget widget_social">

												<div class="social-media">

													<?php
													$socialLinks = $descriptionQuery->get('social');
													$linksTranslated = ffContainer::getInstance()->getThemeFrameworkFactory()->getSocialFeedCreator()->getFeedFromLinks($socialLinks);

													if( !empty( $linksTranslated ) ) {
														foreach( $linksTranslated as $oneLink ) {
															?>
															<a class="<?php echo esc_attr($oneLink->type);?>" href="<?php echo esc_url($oneLink->link);?>">
																<i class="fa fa-<?php echo esc_attr($oneLink->type);?>"></i>
															</a>
														<?php
														}
													}
													?>

												</div>
											</div>
										</div>
								<?php
								} ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


