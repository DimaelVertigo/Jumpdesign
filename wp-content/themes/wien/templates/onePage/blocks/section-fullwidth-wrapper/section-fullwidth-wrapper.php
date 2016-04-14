<?php
/**
 * @var ffOptionsQuery $query
 */


// GLOBAL - ID + COLOR

$id = $query->get('general id');
$id = trim($id);
if( !empty($id) ){
	echo ' id="'.esc_attr( $id ).'"';
}

// CLASS

echo ' class="ff-section-fullwidth ';

echo esc_attr( $query->get('general color-type') );

if( ! empty($params['class']) ){
	echo ' '.esc_attr( $params['class'] );
}

if( ! empty($params['section']) ){
	echo ' section--'.esc_attr( ( $params['section'] ) );
}

echo '"';

// STYLE

$style = "";

if ( '' !== $query->get('padding top') ) {
    $style .= 'padding-top:' . absint($query->get('padding top')) . 'px;';
}

if ( '' !== $query->get('padding bottom') ) {
    $style .= 'padding-bottom:' . absint($query->get('padding bottom')) . 'px;';
}

if ( '' !== $query->get('margin top') ) {
    $style .= 'margin-top:' . absint($query->get('margin top')) . 'px;';
}

if ( '' !== $query->get('margin bottom') ) {
    $style .= 'margin-bottom:' . absint($query->get('margin bottom')) . 'px;';
}

if( '' !== $style ){
    echo ' style="'.esc_attr($style).'"';
}

// CUSTOM STYLE

if( ! empty($params['style']) ){
	echo ' style="'.esc_attr($params['style']).'"';
}