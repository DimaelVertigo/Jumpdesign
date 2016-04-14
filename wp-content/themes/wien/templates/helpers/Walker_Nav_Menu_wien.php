<?php

function Walker_Nav_Menu_wien_fallback( $args ){
	?>
		<div>
			<p>No menu selected. Create menu in the <code>WP Admin menu &raquo; Appereance &raquo; Menu</code> and create it.</p>
		</div>
	<?php
}

class Walker_Nav_Menu_wien extends Walker_Nav_Menu {

	public function start_lvl( &$output, $depth = 0, $args = array() ) {
		$output .= '<ul role="menu" class="dropdown-menu">';
	}

	public function end_lvl( &$output, $depth = 0, $args = array() ) {
		$output .= "</ul>";
	}

	public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {

		$LI_classes = empty( $item->classes ) ? array() : (array) $item->classes;
		$LI_classes[] = 'menu-item-' . esc_attr( $item->ID ) ;

		if ( !empty($args->has_children) ){
			if( ( 0 == $depth ) and ( ! in_array( 'megamenu', $LI_classes ) ) ){
				$LI_classes[] .= 'dropdown';
			}
		}

		if ( in_array( 'current-menu-item', $LI_classes ) ){
			$LI_classes[] = 'active';
		}

		$LI_classes = apply_filters( 'nav_menu_css_class', array_filter( $LI_classes ), $item, $args );
		$LI_classes = implode(' ', $LI_classes);

		$LI_id = 'menu-item-'. esc_attr( $item->ID ) ;
		$LI_id = apply_filters( 'nav_menu_item_id', $LI_id, $item, $args );

		$output .= ( $depth ) ? str_repeat( "\t", $depth ) : '';

		$item_output  = '';

		$output .= '<li id="' . esc_attr( $LI_id ) . '" class="' . esc_attr( $LI_classes ) . '">';
		$atts = array(
			'title'         => ! empty( $item->title  ) ? $item->title  : '' ,
			'target'        => ! empty( $item->target ) ? $item->target : '' ,
			'rel'           => ! empty( $item->xfn    ) ? $item->xfn    : '' ,
			'href'          => ! empty( $item->url    ) ? $item->url    : '' ,
			'class'         => '' ,
			'aria-haspopup' => 'true' ,
		);

		$atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args );

		$attributes = '';
		foreach ( $atts as $attr => $value ) {
			if ( ! empty( $value ) ) {
				$value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
				$attributes .= ' ' . ( $attr ) . '="' . ( $value ) . '"';
			}
		}

		$item_output .= empty( $args->before ) ? '':$args->before;
		$item_output .= '<a'. ( $attributes ) .'>';

		if ( FALSE === strpos( ' '.  $LI_classes.' ', ' show-image ' ) ){
			$item_output .= empty( $args->link_before ) ? '' : $args->link_before;
			$item_output .= apply_filters( 'the_title', $item->title, $item->ID );
			$item_output .= empty( $args->link_after ) ? '' : $args->link_after;
		}

		$item_output .= '</a>';

		$item_output .= empty( $args->after ) ? '' : $args->after;

		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );

	}

	public function end_el( &$output, $item, $depth = 0, $args = array() ) {
		$output .= "</li>\n";
	}

	public function display_element( $element, &$children_elements, $max_depth, $depth, $args, &$output ) {
		if ( ! $element )
			return;

		$id_field = $this->db_fields['id'];

		// Display this element.
		if ( is_object( $args[0] ) )
		   $args[0]->has_children = ! empty( $children_elements[ $element->$id_field ] );

		parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
	}
}

