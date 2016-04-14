<?php
$s->startSection('post-classic-meta');
	$s->startSection('featured-image');
		$s->addOption( ffOneOption::TYPE_CHECKBOX,'show', __('Show Featured Image', 'wien'),1);
		$s->addElement( ffOneElement::TYPE_NEW_LINE);

		$s->addOption( ffOneOption::TYPE_TEXT,'width', __('Featured Image width', 'wien'),780);
		$s->addElement( ffOneElement::TYPE_NEW_LINE);

		$s->addOption( ffOneOption::TYPE_TEXT,'height', __('Featured Image height', 'wien'),0);
		$s->addElement( ffOneElement::TYPE_NEW_LINE);
	$s->endSection();

	$s->startSection('date');
		$s->addOption( ffOneOption::TYPE_CHECKBOX,'show', __('Show date', 'wien'),1);
		$s->addElement( ffOneElement::TYPE_NEW_LINE);

		$s->addOption( ffOneOption::TYPE_TEXT,'format', __('Date format', 'wien'),'F j, Y');
		$s->addElement( ffOneElement::TYPE_NEW_LINE);
	$s->endSection();

	$s->startSection('author');
		$s->addOption( ffOneOption::TYPE_CHECKBOX,'show', __('Show author', 'wien'),1);
		$s->addElement( ffOneElement::TYPE_NEW_LINE);

		$s->addOption( ffOneOption::TYPE_TEXT,'text-before', __('Text before', 'wien'),__('Posted by', 'wien'));
		$s->addElement( ffOneElement::TYPE_NEW_LINE);
	$s->endSection();

	$s->startSection('categories');
		$s->addOption( ffOneOption::TYPE_CHECKBOX,'show', __('Show Categories', 'wien'),1);
		$s->addElement( ffOneElement::TYPE_NEW_LINE);

		$s->addOption( ffOneOption::TYPE_TEXT,'text-before', __('Text before', 'wien'),__('in', 'wien'));
		$s->addElement( ffOneElement::TYPE_NEW_LINE);
	$s->endSection();

	$s->startSection('comments');
		$s->addOption( ffOneOption::TYPE_CHECKBOX,'show', __('Show Comments', 'wien'),1);
		$s->addElement( ffOneElement::TYPE_NEW_LINE);

		$s->addOption( ffOneOption::TYPE_TEXT,'zero', __('0 Comments', 'wien'),__('0 Comments', 'wien'));
		$s->addElement( ffOneElement::TYPE_NEW_LINE);
		$s->addOption( ffOneOption::TYPE_TEXT,'one', __('1 Comment', 'wien'),__('1 Comment', 'wien'));
		$s->addElement( ffOneElement::TYPE_NEW_LINE);
		$s->addOption( ffOneOption::TYPE_TEXT,'more', __('X Comments', 'wien'),__('%s Comments', 'wien'));
		$s->addElement( ffOneElement::TYPE_NEW_LINE);
	$s->endSection();
$s->endSection();