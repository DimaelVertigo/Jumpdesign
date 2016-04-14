<?php
/** @var ffOneStructure $s */

$s->startSection('comments-list');

	$s->startSection('heading');
		$s->addElement(ffOneElement::TYPE_HEADING,'',__('General Comments Options', 'wien'));
		$s->addOption(ffOneOption::TYPE_CHECKBOX, 'show', __('Show Heading', 'wien'), 1);
		$s->addElement(ffOneElement::TYPE_NEW_LINE );

		$s->addOption( ffOneOption::TYPE_TEXT, 'trans-zero', __('No Comments', 'wien'), __('Comments (0)', 'wien'));
		$s->addElement(ffOneElement::TYPE_NEW_LINE );

		$s->addOption( ffOneOption::TYPE_TEXT, 'trans-one', __('One Comment', 'wien'), __('Comments (1)', 'wien'));
		$s->addElement(ffOneElement::TYPE_NEW_LINE );

		$s->addOption( ffOneOption::TYPE_TEXT, 'trans-more', __('%s Comments', 'wien'), __('Comments (%s)', 'wien'));
		$s->addElement(ffOneElement::TYPE_NEW_LINE );
	$s->endSection();

	$s->startSection('one-comment');
		$s->addElement(ffOneElement::TYPE_HEADING,'',__('One Comment Options', 'wien'));

		$s->addOption(ffOneOption::TYPE_CHECKBOX, 'show-date', __('Show Date', 'wien'), 1);
		$s->addElement(ffOneElement::TYPE_NEW_LINE );

		$s->addOption( ffOneOption::TYPE_TEXT, 'date-format', __('Date Format', 'wien'), 'M d, Y, \a\t g:i A');
		$s->addElement(ffOneElement::TYPE_NEW_LINE );


		$s->addOption( ffOneOption::TYPE_TEXT, 'trans-reply', __('Reply comment', 'wien'), __('reply', 'wien'));
		$s->addElement(ffOneElement::TYPE_NEW_LINE );

		$s->addOption( ffOneOption::TYPE_TEXT, 'trans-moderation', __('Awaiting for moderation', 'wien'), __('Your comment is awaiting moderation.', 'wien'));
		$s->addElement(ffOneElement::TYPE_NEW_LINE );
	$s->endSection();

$s->endSection();