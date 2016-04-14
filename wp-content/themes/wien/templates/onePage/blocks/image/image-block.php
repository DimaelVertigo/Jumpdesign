<?php

$resizeImage = 0;
$width = 0;
$height = 0;

if( isset( $params['resize-image'] ) ) {
	$resizeImage = $params['resize-image'];
}

if( isset( $params['width'] ) ) {
	$width = $params['width'];
}

if( isset( $params['height'] ) ) {
	$height = $params['height'];
}


/** @var ffOneStructure $s */
$s->startSection('image-block');

	$s->addOption(ffOneOption::TYPE_IMAGE, 'image', __('Image', 'wien'), '');
	$s->addElement( ffOneElement::TYPE_NEW_LINE);

	$s->addOption( ffOneOption::TYPE_CHECKBOX, 'resize', __('Resize image', 'wien'), 0);
	$s->addElement( ffOneElement::TYPE_NEW_LINE);
	$s->addOption( ffOneOption::TYPE_TEXT, 'width', __('Width', 'wien'), 0);
	$s->addElement( ffOneElement::TYPE_NEW_LINE);
	$s->addOption( ffOneOption::TYPE_TEXT, 'height', __('Height', 'wien'), 0);

$s->endSection();
