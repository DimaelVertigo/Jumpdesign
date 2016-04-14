<?php

class ffComponent_ContactUsWidget_Printer extends ffBasicObject {
	public function printComponent( $args, ffOptionsQuery $query) {

		echo ($args['before_widget']);

		echo ($args['before_title']);
		echo ff_wp_kses($query->get('contact-us title'));
		echo ($args['after_title']);

		echo '<ul>';

		foreach( $query->get('contact-us lines') as $oneLine ) {
			echo '<li class="'.esc_attr($oneLine->get('type')).'">';

			switch( $oneLine->get('type') ) {
				case 'address' :
					echo '<i class="fa fa-map-marker"></i>';
					break;

				case 'phone' :
					echo '<i class="fa fa-mobile"></i>';
					break;

				case 'email':
					echo '<i class="fa fa-envelope"></i>';
					break;
			}

			echo ff_wp_kses($oneLine->get('text'));

			echo '</li>';
		}

		echo '</ul>';

		echo ($args['after_widget']);
	}
}