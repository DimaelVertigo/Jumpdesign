<?php
/** @var ffOneStructure $s */

$s->startSection('button');

	$s->addOption( ffOneOption::TYPE_CHECKBOX, 'show', __('Show', 'wien'), 1);
	$s->addElement( ffOneElement::TYPE_NEW_LINE );

	$s->addOption( ffOneOption::TYPE_TEXT, 'title', __('Title', 'wien'), __('Read more', 'wien'));
	$s->addElement( ffOneElement::TYPE_NEW_LINE );

	$s->addOption( ffOneOption::TYPE_TEXT_FULLWIDTH, 'url', __('URL', 'wien'), '#');
	$s->addElement( ffOneElement::TYPE_NEW_LINE );

	$s->addOption(ffOneOption::TYPE_SELECT, 'target', __('Open in', 'wien'), '_blank')
		->addSelectValue(__('Same Window', 'wien'), '')
		->addSelectValue(__('New Window', 'wien'), '_blank')
	;

	$s->addElement( ffOneElement::TYPE_NEW_LINE );
	$s->addOption(ffOneOption::TYPE_SELECT, 'color', __('Color', 'wien'), 'black')
		->addSelectValue( __('black', 'wien'), 'btn btn-default')
		->addSelectValue( __('white', 'wien'), 'btn btn-white')
		->addSelectValue( __('grey', 'wien'), 'btn btn-grey')
	;

$s->endSection();







