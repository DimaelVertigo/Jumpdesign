<?php
/** @var ffOneStructure $s */


$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('General', 'wien'));

	$s->addOption( ffOneOption::TYPE_TEXT, 'id', __('Section ID ', 'wien'), '' );
	$s->addElement( ffOneElement::TYPE_HTML, '', __(' <span class="description">Option is used for linking. Leave blank for no ID.</span>', 'wien'));
	$s->addElement( ffOneElement::TYPE_NEW_LINE );

	$s->addOption( ffOneOption::TYPE_CHECKBOX, 'fullwidth', __('Fullwidth', 'wien'), 1);
	$s->addElement( ffOneElement::TYPE_NEW_LINE );
	$s->addOption( ffOneOption::TYPE_SELECT, 'color-type', __('Color type', 'wien'), 'light')
		->addSelectValue(__('Light BG / Dark text', 'wien'), 'light')
		->addSelectValue(__('Dark BG / Light text', 'wien'), 'dark')
		;
	$s->addElement( ffOneElement::TYPE_NEW_LINE );

	$s->addOption( ffOneOption::TYPE_SELECT, 'padding-top', __('Padding top (px)', 'wien'), 'default')
		->addSelectValue(__('Default', 'wien'), 'default')
		->addSelectNumberRange(0, 150, 5)
		;

	$s->addElement( ffOneElement::TYPE_NEW_LINE );

	$s->addOption( ffOneOption::TYPE_SELECT, 'padding-bottom', __('Padding bottom (px)', 'wien'), 'default')
		->addSelectValue(__('Default', 'wien'), 'default')
		->addSelectNumberRange(0, 150, 5)
		;
	$s->addElement( ffOneElement::TYPE_NEW_LINE );

	$s->addOption( ffOneOption::TYPE_SELECT, 'margin-top', __('Margin top (px)', 'wien'), 'default')
		->addSelectValue(__('Default', 'wien'), 'default')
		->addSelectNumberRange(0, 150, 5)
		;
	$s->addElement( ffOneElement::TYPE_NEW_LINE );

	$s->addOption( ffOneOption::TYPE_SELECT, 'margin-bottom', __('Margin bottom (px)', 'wien'), 'default')
		->addSelectValue(__('Default', 'wien'), 'default')
		->addSelectNumberRange(0, 150, 5)
		;
	$s->addElement( ffOneElement::TYPE_NEW_LINE );

$s->addElement( ffOneElement::TYPE_TABLE_DATA_END);