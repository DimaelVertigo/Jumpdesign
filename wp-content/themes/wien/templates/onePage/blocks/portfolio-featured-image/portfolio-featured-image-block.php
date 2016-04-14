<?php
/**
 * @var $s ffOneStructure
 */


$s->startSection('featured-image');

	$s->addOption(ffOneOption::TYPE_SELECT, 'link', __('Image points to', 'wien'), 'lightbox')
		->addSelectValue(__('Lightbox', 'wien'), 'lightbox')
		->addSelectValue(__('Specified in portfolio single (item or external link)', 'wien'), 'single')
		->addSelectValue(__('Nowhere', 'wien'), 'nowhere')
		;
	$s->addElement( ffOneElement::TYPE_NEW_LINE );


	$s->addOption( ffOneOption::TYPE_CHECKBOX, 'resize', __('Resize featured image?', 'wien'), 1);
	$s->addElement( ffOneElement::TYPE_NEW_LINE );

	$s->addElement(ffOneElement::TYPE_DESCRIPTION, 'd', __('Original size is 533x300 px', 'wien'));
	$s->addElement( ffOneElement::TYPE_NEW_LINE );

	$s->addOption( ffOneOption::TYPE_TEXT, 'width', __('Width (px)', 'wien'), 533);
	$s->addElement( ffOneElement::TYPE_NEW_LINE );

	$s->addOption( ffOneOption::TYPE_TEXT, 'height', __('Height (px)', 'wien'), 300);
	$s->addElement( ffOneElement::TYPE_NEW_LINE );
$s->endSection();