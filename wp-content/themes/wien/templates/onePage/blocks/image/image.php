<?php

$cssClass = '';

if( isset( $params['css-class'] ) ) {
	$cssClass = $params['css-class'];
}

if( $query->queryExists('image-block') ) {
	$query = $query->get('image-block');
}

$imageUrl = $query->getImage('image')->url;

if( $query->get('resize') ) {
	$imageUrl = fImg::resize( $imageUrl, $query->get('width'), $query->get('height'), true);
}

echo '<img src="'.esc_url($imageUrl).'" class="'.esc_attr($cssClass).'" alt="" />';