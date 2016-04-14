<?php
locate_template('templates/helpers/Walker_Nav_Menu_wien.php', true, true);
?>
<header class="header">

	<div class="container">
		<div class="row">
			<div class="col-xs-12">



				<div class="logo-holder">
					<div class="vcenter-wrapper">
						<div class="vcenter">
							<div class="logo-wrapper">

								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="logo">

									<?php
									$fallbackImage = null;
									foreach ( array('desktop', 'tablet', 'phone') as $breakpoint) {

										?>

										<?php
										$logo = '';
										$breakpointForQuery = $breakpoint;
										if( $breakpoint == 'desktop' ) {
											$breakpoint = '';
										} else {
											$breakpoint = $breakpoint .= ' ';
										}

										if ( $query->getImage('logo '.($breakpoint).'image')->url ){
											$logo = $query->getImage('logo '.($breakpoint).'image')->url;
											$fallbackImage = $logo;
										} else {
											if( empty( $fallbackImage ) ) {
												$logo = get_template_directory_uri() . '/images/logo-'.($breakpointForQuery).'@2x.png';
											} else {
												$logo = $fallbackImage;
											}
										}
										$imageDimensions = ffContainer()
											->getGraphicFactory()
											->getImageInformator( $logo )
											->getImageDimensions();

										if( $query->get('logo '.($breakpoint).'is_retina') ) {
											$logoWidth = $imageDimensions->width / 2;
											$logoHeight = $imageDimensions->height / 2;
										} else {
											$logoWidth = $imageDimensions->width;
											$logoHeight = $imageDimensions->height;
										}
										?>

										<img
											class="logo-<?php echo esc_attr( $breakpointForQuery ); ?>"
											src="<?php echo esc_url( $logo ); ?>"
											alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"
											width="<?php echo absint( $logoWidth ); ?>"
											height="<?php echo absint( $logoHeight ); ?>"
											>

									<?php } ?>

								</a>

							</div>
						</div>
					</div>
				</div>



				<div class="mobile-menu-button-holder">
					<div class="vcenter-wrapper">
						<div class="vcenter">
							<a id="mobile-menu-button" href="#"><i class="fa fa-bars"></i></a>
						</div>
					</div>
				</div>


				<?php if( $query->get('search show') ){ ?>
					<div class="search-button-holder">
						<div class="vcenter-wrapper">
							<div class="vcenter">

								<div class="search-button">
									<form id="search-form" name="search-form" method="get" action="<?php echo esc_attr( home_url( '/' ) ); ?>">
										<fieldset>
											<input type="text" name="s" placeholder="">
										</fieldset>
									</form>
								</div>

							</div>
						</div>
					</div>
				<?php } ?>

				<div class="nav-holder">
					<div class="vcenter-wrapper">
						<div class="vcenter">

							<nav class="clearfix">

								<?php
								wp_nav_menu( array(
									'menu'           => $query->get('navigation-menu-id'),
									'depth'          => 0,
									'container'      => false,
									'menu_class'     => 'menu clearfix',
									'items_wrap'     => '<ul role="menu" id="%1$s" class="%2$s">%3$s</ul>',
									'walker'         => new Walker_Nav_Menu_wien(),
									'fallback_cb'    => 'Walker_Nav_Menu_wien_fallback',
								) );
								?>
							</nav>

						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

</header>

