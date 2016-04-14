<?php
/** @var ffOneStructure $s  */

$s->startSection('blog-meta');
	$s->startSection('featured-image');
		$s->addOption( ffOneOption::TYPE_CHECKBOX,'show', __('Show Featured Image', 'wien'),1);
		$s->addElement( ffOneElement::TYPE_NEW_LINE);

		$s->addOption( ffOneOption::TYPE_CHECKBOX,'resize', __('Resize Featured image', 'wien'),1);
		$s->addElement( ffOneElement::TYPE_NEW_LINE);

		$s->addElement(ffOneElement::TYPE_DESCRIPTION, '', __('Please note, that original dimensions are: 848x334 - blog classic, and 360x325 for blog columns', 'wien'));
		$s->addElement( ffOneElement::TYPE_NEW_LINE);

		$s->addOption( ffOneOption::TYPE_TEXT,'width', __('Featured Image width', 'wien'),0);
		$s->addElement( ffOneElement::TYPE_NEW_LINE);

		$s->addOption( ffOneOption::TYPE_TEXT,'height', __('Featured Image height', 'wien'),0);
		$s->addElement( ffOneElement::TYPE_NEW_LINE);

		$s->addOption( ffOneOption::TYPE_SELECT,'lightbox', __('Featured image points to', 'wien'),1)
			->addSelectValue( __('None', 'wien'), 0)
			->addSelectValue( __('Lightbox', 'wien'), 1)
			->addSelectValue( __('Post Single', 'wien'), 2)
			;
		$s->addElement( ffOneElement::TYPE_NEW_LINE);

	$s->endSection();

	$s->startSection('date');
		$s->addOption( ffOneOption::TYPE_CHECKBOX,'show', __('Show date', 'wien'),1);
		$s->addElement( ffOneElement::TYPE_NEW_LINE);

		$s->addOption( ffOneOption::TYPE_TEXT,'format', __('Date format', 'wien'),'j F Y');
		$s->addElement( ffOneElement::TYPE_NEW_LINE);
	$s->endSection();

	$s->startSection('author');
		$s->addOption( ffOneOption::TYPE_CHECKBOX,'show', __('Show author', 'wien'),1);
		$s->addElement( ffOneElement::TYPE_NEW_LINE);
	$s->endSection();

	$s->startSection('categories');
		$s->addOption( ffOneOption::TYPE_CHECKBOX,'show', __('Show Categories', 'wien'),1);
		$s->addElement( ffOneElement::TYPE_NEW_LINE);
	$s->endSection();

	$s->startSection('tags');
		$s->addOption( ffOneOption::TYPE_CHECKBOX,'show', __('Show Tags', 'wien'),1);
		$s->addElement( ffOneElement::TYPE_NEW_LINE);
	$s->endSection();

	$s->startSection('comments');
		$s->addOption( ffOneOption::TYPE_CHECKBOX,'show', __('Show Comments', 'wien'),1);
		$s->addElement( ffOneElement::TYPE_NEW_LINE);
	$s->endSection();
$s->endSection();