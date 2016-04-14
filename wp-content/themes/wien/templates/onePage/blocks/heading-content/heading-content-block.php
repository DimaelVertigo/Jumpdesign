<?php
/** @var ffOneStructure $s */

$s->startSection('heading-content-block');

$s->startSection('content', ffOneSection::TYPE_REPEATABLE_VARIABLE);



// One Line (heading or paragraph)


	$s->startSection('one-line', ffOneSection::TYPE_REPEATABLE_VARIATION)
		->addParam('section-name', __('One Line', 'wien'));
			$s->addOption(ffOneOption::TYPE_TEXT, 'title', __('Title', 'wien'), __('What we offer', 'wien'));
			$s->addElement(ffOneElement::TYPE_NEW_LINE);
			$s->addOption(ffOneOption::TYPE_SELECT, 'type', __('Type', 'wien'), 'h3')
				->addSelectValue(__('H1', 'wien'), 'h1')
				->addSelectValue(__('H2', 'wien'), 'h2')
				->addSelectValue(__('H3', 'wien'), 'h3')
				->addSelectValue(__('H4', 'wien'), 'h4')
				->addSelectValue(__('H5', 'wien'), 'h5')
				->addSelectValue(__('H6', 'wien'), 'h6')
				->addSelectValue(__('BR (new line)', 'wien'), 'br')
				->addSelectValue(__('Paragraph', 'wien'), 'p')
			;
	$s->endSection();



// BUTTON - ONE


	$s->startSection('one-button', ffOneSection::TYPE_REPEATABLE_VARIATION)
		->addParam('section-name', __(' Buttons', 'wien'));

		$s->startSection('buttons', ffOneSection::TYPE_REPEATABLE_VARIABLE );
			$s->startSection( 'button', ffOneSection::TYPE_REPEATABLE_VARIATION )->addParam('section-name', __('Button', 'wien'));
				ff_load_section_options( 'button-block', $s);
			$s->endSection();
		$s->endSection();

	$s->endSection();



// IMAGE - ONE


	$s->startSection('one-image', ffOneSection::TYPE_REPEATABLE_VARIATION)
		->addParam('section-name', __('One Image', 'wien'));

			$s->addOption(ffOneOption::TYPE_IMAGE, 'image', __('Image', 'wien'));

	$s->endSection();



// DASH - ONE


	$s->startSection('one-dash', ffOneSection::TYPE_REPEATABLE_VARIATION)
		->addParam('section-name', 'One Divider');

		$s->addOption(ffOneOption::TYPE_SELECT, 'color', __('Color', 'wien'), 'horizontal-dash-black')
			->addSelectValue(__('Black', 'wien'), 'horizontal-dash-black')
			->addSelectValue(__('Gray', 'wien'), 'horizontal-dash-gray')
		;

	$s->endSection();



// HTML


	$s->startSection('one-html', ffOneSection::TYPE_REPEATABLE_VARIATION)
		->addParam('section-name', 'HTML');

			$s->addOption(ffOneOption::TYPE_TEXTAREA, 'html', __('HTML', 'wien'));

	$s->endSection();



$s->endSection();

$s->endSection();
