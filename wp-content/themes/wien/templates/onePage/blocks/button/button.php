<?php

if( $query->queryExists('button') ) {
	$query = $query->get('button');
}

$url = $query->get('url');
$title = $query->get('title');

if( isset( $params['url' ] ) ) {
	$url = $params['url'];
}

if( isset( $params['title'] ) ) {
	$title = $params['title'];
}

echo '<a href="';
echo esc_url($url);
echo '" ';

if( '_blank' == $query->get('target') ){
	echo ' target="_blank" ';
}

echo ' class=" '.esc_attr( $query->get('color') ).' " >';

echo ff_wp_kses($title);

echo '</a>';
echo "\n";