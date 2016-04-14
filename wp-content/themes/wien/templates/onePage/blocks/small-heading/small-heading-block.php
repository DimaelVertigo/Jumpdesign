<?php
/**
 * @var $s ffOneStructure
 */

$s->startSection('small-heading');
	$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Small Heading', 'wien'));

		$s->addOption( ffOneOption::TYPE_CHECKBOX, 'show-whole', __('Show Headings', 'wien'), 1);
		$s->addElement( ffOneElement::TYPE_NEW_LINE );

		$s->addOption( ffOneOption::TYPE_CHECKBOX, 'show-title', __('Show Title &nbsp; ', 'wien'), 1);
		$s->addOption( ffOneOption::TYPE_TEXT, 'title', '', __('Our Services', 'wien'));
		$s->addElement( ffOneElement::TYPE_NEW_LINE );

		$s->addOption( ffOneOption::TYPE_CHECKBOX, 'show-description', __('Show Description', 'wien'), 1);
		$s->addElement( ffOneElement::TYPE_NEW_LINE );
		$s->addOption( ffOneOption::TYPE_SELECT, 'description-style', __('Description style', 'wien'), 'lead')
				->addSelectValue(__('Smaller', 'wien'), '')
				->addSelectValue(__('Bigger', 'wien'), 'lead');

		$s->addElement( ffOneElement::TYPE_NEW_LINE );
		$s->addOption( ffOneOption::TYPE_TEXTAREA, 'description', '', __('Lorem ipsum veniam adipisicing cupidatat dolor do adipisicing commodo', 'wien'));
		$s->addElement( ffOneElement::TYPE_NEW_LINE );

		$s->addOption( ffOneOption::TYPE_CHECKBOX, 'show-points', __('Show points', 'wien'), 1);
		$s->addElement( ffOneElement::TYPE_NEW_LINE );

		$s->addOption( ffOneOption::TYPE_SELECT, 'text-align', __('Heading align', 'wien'), 'text-center')
				->addSelectValue(__('Left', 'wien'), '')
				->addSelectValue(__('Center', 'wien'), 'text-center')
				->addSelectValue(__('Right', 'wien'), 'text-right')
				->addSelectValue(__('Justify', 'wien'), 'text-justify');

	$s->addElement( ffOneElement::TYPE_TABLE_DATA_END);
$s->endSection();