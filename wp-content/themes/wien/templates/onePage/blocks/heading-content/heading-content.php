<?php
/**
 * @var ffOptionsQuery $query
 */

if( $query->queryExists('heading-content-block') ) {
	$query = $query->get('heading-content-block');
}

foreach( $query->get('content') as $oneContent ) {
	switch( $oneContent->getVariationType() ){

		case 'one-line':
			$tagType = $oneContent->get('type');
			$text = $oneContent->get('title');

			if( 'br' == $tagType ) {
				echo '</br>';
			} else {
				echo '<'.esc_attr($tagType).'>'.ff_wp_kses($text).'</'.esc_attr($tagType).'>';
			}

			break;

		case 'one-button':

			echo '<div>';
			$buttons = $oneContent->get('buttons');
			foreach( $buttons as $oneButton ) {
				ff_load_section_printer(
					'button'
					, $oneButton->get('button')
				);
			}
			echo '</div>';

			break;

		case 'one-image':

			echo '<div>';
			echo '<img src="';
			echo esc_url( $oneContent->getImage('image')->url );
			echo '" alt="" />';
			echo '</div>';

			break;

		case 'one-dash':

			echo '<div class="'.esc_attr( $oneContent->get('color') ).'"></div>';

			break;

		case 'one-html':
			echo ff_wp_kses($oneContent->get('html'));

			break;

	}
}
