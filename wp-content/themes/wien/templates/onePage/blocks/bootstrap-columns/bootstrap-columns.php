<?php

if( $query->queryExists('bootstrap-columns') ) {
	$query = $query->get('bootstrap-columns');
}

$dataToReturn = '';

$classes = array();
if( $query->get('xs') != 'no' ) {
	$classes[] = 'col-xs-'.absint($query->get('xs'));
}

if( $query->get('sm') != 'no' ) {
	$classes[] = 'col-sm-'.absint($query->get('sm'));
}

if( $query->get('md') != 'no' ) {
	$classes[] = 'col-md-'.absint($query->get('md'));
}

if( $query->get('lg') != 'no' ) {
	$classes[] = 'col-lg-'.absint($query->get('lg'));
}

if( $query->get('off-xs') != 'no' ) {
	$classes[] = 'col-xs-offset-'.absint($query->get('off-xs'));
}

if( $query->get('off-sm') != 'no' ) {
	$classes[] = 'col-sm-offset-'.absint($query->get('off-sm'));
}

if( $query->get('off-md') != 'no' ) {
	$classes[] = 'col-md-offset-'.absint($query->get('off-md'));
}

if( $query->get('off-lg') != 'no' ) {
	$classes[] = 'col-lg-offset-'.absint($query->get('off-lg'));
}


$dataToReturn =  implode( ' ', $classes );