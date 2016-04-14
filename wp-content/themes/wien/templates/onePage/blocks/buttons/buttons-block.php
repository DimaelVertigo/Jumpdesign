<?php
/** @var ffOneStructure $s */

$s->startSection('buttons-more');

	$s->addOption( ffOneOption::TYPE_CHECKBOX, 'show', __('Show', 'wien'), 1);
	$s->addElement( ffOneElement::TYPE_NEW_LINE );

	$s->addOption( ffOneOption::TYPE_SELECT, 'text-align', __('Buttons block align', 'wien'), 'center')
			->addSelectValue(__('Default (left)', 'wien'), '')
			->addSelectValue(__('Center', 'wien'), 'text-center')
			->addSelectValue(__('Right', 'wien'), 'text-right')
			->addSelectValue(__('Justify', 'wien'), 'text-justify');
	$s->addElement( ffOneElement::TYPE_NEW_LINE );

	$s->startSection('buttons', ffOneSection::TYPE_REPEATABLE_VARIABLE );
		$s->startSection( 'button', ffOneSection::TYPE_REPEATABLE_VARIATION )->addParam('section-name', 'Button');
			$s->addElement( ffOneElement::TYPE_TABLE_START );
				ff_load_section_options( 'button-block', $s);
			$s->addElement( ffOneElement::TYPE_TABLE_END );
		$s->endSection();
	$s->endSection();

$s->endSection();
