<?php
/**
 * @var $s ffOneStructure
 */

$s->startSection('heading-wrapped');

	$s->addOption(ffOneOption::TYPE_CHECKBOX, 'show-heading', __('Show heading', 'wien'), 1);

	$s->addElement(ffOneElement::TYPE_TOGGLE_BOX_START, '', __('Big Heading', 'wien'));
		$s->addOption(ffOneOption::TYPE_SELECT, 'wrapper-type', __('Space under heading', 'wien'), '')
				->addSelectValue(__('None', 'wien'), 'headline-3')
				->addSelectValue(__('Medium', 'wien'), 'headline-2' )
				->addSelectValue(__('Large', 'wien'), '' )
			;
		$s->addElement(ffOneElement::TYPE_NEW_LINE);
		$s->addOption(ffOneOption::TYPE_SELECT, 'position', __('Heading position', 'wien'), 'none')
			->addSelectValue(__('Left', 'wien'), '' )
			->addSelectValue(__('Right', 'wien'), 'text-right' )
			->addSelectValue(__('Center', 'wien'), 'text-center')
		;
		$s->addElement(ffOneElement::TYPE_NEW_LINE);

		ff_load_section_options( 'heading-content-block', $s);

	$s->addElement(ffOneElement::TYPE_TOGGLE_BOX_END);
$s->endSection();

