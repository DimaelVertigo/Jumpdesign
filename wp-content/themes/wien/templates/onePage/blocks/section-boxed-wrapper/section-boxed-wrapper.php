<?php
/**
 * @var ffOptionsQuery $query
 */

////////////////////////////////////////////////////////////////////////////////////
// CLASS

echo ' class="';

if( ! empty( $params['boxed'] ) ){
    echo 'container ';
}

if( ! empty($params['class']) ){
	echo ' '.esc_attr( $params['class'] ).' ';
}

echo '"';

////////////////////////////////////////////////////////////////////////////////////
// STYLE

$style = "";

if ( '' !== $query->get('padding top') ) {
    $style .= 'padding-top:' . absint($query->get('padding top')) . 'px;';
}

if ( '' !== $query->get('padding bottom') ) {
    $style .= 'padding-bottom:' . absint($query->get('padding bottom')) . 'px;';
}

if( '' !== $style ){
    echo ' style="'.esc_attr($style).'"';
}

////////////////////////////////////////////////////////////////////////////////////
// CUSTOM STYLE

if( ! empty($params['style']) ){
	echo ' style="'.esc_attr($params['style']).'"';
}