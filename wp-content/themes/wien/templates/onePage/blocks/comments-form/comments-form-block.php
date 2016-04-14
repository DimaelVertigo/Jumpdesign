<?php
/** @var ffOneStructure $s */

$s->startSection('comments-form');


	$s->addElement(ffOneElement::TYPE_HEADING,'',__('General Comment Form Options', 'wien'));

	$s->addOption( ffOneOption::TYPE_TEXT, 'heading', __('Form Heading', 'wien'), __('Leave a Reply', 'wien'));
	$s->addElement(ffOneElement::TYPE_NEW_LINE );

	$s->addOption( ffOneOption::TYPE_TEXT, 'name', __('Name', 'wien'), __('Name', 'wien'));
	$s->addElement(ffOneElement::TYPE_NEW_LINE );

	$s->addOption( ffOneOption::TYPE_TEXT, 'email', __('Email', 'wien'), __('Email', 'wien'));
	$s->addElement(ffOneElement::TYPE_NEW_LINE );

	$s->addOption( ffOneOption::TYPE_TEXT, 'website', __('Website', 'wien'), __('Url', 'wien'));
	$s->addElement(ffOneElement::TYPE_NEW_LINE );

	$s->addOption( ffOneOption::TYPE_TEXT, 'comment-form', __('Comment Form', 'wien'), __('Message', 'wien'));
	$s->addElement(ffOneElement::TYPE_NEW_LINE );

	$s->addOption( ffOneOption::TYPE_TEXT, 'submit-button', __('Submit Button', 'wien'), __('Send', 'wien'));
	$s->addElement(ffOneElement::TYPE_NEW_LINE );

	$s->addOption( ffOneOption::TYPE_TEXT, 'logged-in', __('Logged in text', 'wien'), __('Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>', 'wien'));

	$s->addElement(ffOneElement::TYPE_NEW_LINE );

$s->endSection();