<?php
/** @var ffOneStructure $s */

$title = 'Section Options';

if( isset( $params['title'] ) ) {
	$title = $params['title'];
}

$s->startSection('section-settings');
$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', $title);
	$s->addElement(ffOneElement::TYPE_TOGGLE_BOX_START, '', $title);

		$s->addElement( ffOneElement::TYPE_TABLE_START );
/**********************************************************************************************************************/
/* GENERAL
/**********************************************************************************************************************/
			$s->startSection('general');
				$s->addElement(ffOneElement::TYPE_TABLE_DATA_START, '', __('General', 'wien'));
					$s->addOption( ffOneOption::TYPE_TEXT, 'id', __('Section ID ', 'wien'), '' );
					$s->addElement( ffOneElement::TYPE_HTML, '', __(' <span class="description">Option is used for linking. Leave blank for no ID.</span>', 'wien'));

					$s->addElement( ffOneElement::TYPE_NEW_LINE );
					$s->addOption( ffOneOption::TYPE_SELECT, 'color-type', __('Color type', 'wien'), 'light')
						->addSelectValue(__('Light BG / Dark text', 'wien'), 'light')
						->addSelectValue(__('Dark BG / Light text', 'wien'), 'dark')
						;
				$s->addElement(ffOneElement::TYPE_TABLE_DATA_END);
			$s->endSection();
/**********************************************************************************************************************/
/* FULLWIDTH
/**********************************************************************************************************************/
			$s->startSection('fullwidth');
				$s->addElement(ffOneElement::TYPE_TABLE_DATA_START, '', __('Fullwidth Wrapper', 'wien'));
					$s->addOption( ffOneOption::TYPE_CHECKBOX, 'apply', __('Apply settings below', 'wien'), 'default');

					$s->addElement( ffOneElement::TYPE_NEW_LINE );

					$s->addOption( ffOneOption::TYPE_SELECT, 'margin-top', __('Margin top (px)', 'wien'), 'default')
						->addSelectValue('Default', 'default')
						->addSelectValue('0', '0')
						->addSelectNumberRange(5, 400, 5)
						;

					$s->addElement( ffOneElement::TYPE_NEW_LINE );

					$s->addOption( ffOneOption::TYPE_SELECT, 'margin-bottom', __('Margin bottom (px)', 'wien'), 'default')
						->addSelectValue('Default', 'default')
						->addSelectValue('0', '0')
						->addSelectNumberRange(5, 400, 5)
						;

					$s->addElement( ffOneElement::TYPE_NEW_LINE );

					$s->addOption( ffOneOption::TYPE_SELECT, 'padding-top', __('Padding top (px)', 'wien'), 'default')
						->addSelectValue('Default', 'default')
						->addSelectValue('0', '0')
						->addSelectNumberRange(5, 400, 5)
						;

					$s->addElement( ffOneElement::TYPE_NEW_LINE );

					$s->addOption( ffOneOption::TYPE_SELECT, 'padding-bottom', __('Padding bottom (px)', 'wien'), 'default')
						->addSelectValue('Default', 'default')
						->addSelectValue('0', '0')
						->addSelectNumberRange(5, 400, 5)
						;

					$s->addElement(ffOneElement::TYPE_HEADING, '', __('Background', 'wien'));

					$s->startSection('background');
						ff_load_section_options( 'section-background-block', $s);
					$s->endSection();

				$s->addElement(ffOneElement::TYPE_TABLE_DATA_END);
			$s->endSection();
/**********************************************************************************************************************/
/* BOXED
/**********************************************************************************************************************/
			$s->startSection('boxed');
				$s->addElement(ffOneElement::TYPE_TABLE_DATA_START, '', __('Boxed Wrapper', 'wien'));
					$s->addOption( ffOneOption::TYPE_CHECKBOX, 'apply', __('Apply settings below', 'wien'), 0);

					$s->addElement( ffOneElement::TYPE_NEW_LINE );

					$s->addOption( ffOneOption::TYPE_SELECT, 'width-type', __('Width Value', 'wien'), 'from-input')
						->addSelectValue('Fullwidth', 'fullwidth')
						->addSelectValue('Set Below', 'from-input')
						;

					$s->addElement( ffOneElement::TYPE_NEW_LINE );

					$s->addOption( ffOneOption::TYPE_TEXT, 'maxwidth', __('Max-width in px', 'wien'), '1170' );
					$s->addElement( ffOneElement::TYPE_HTML, '', __(' <span class="description">Max width of the boxed div, default is 1170</span>', 'wien'));

					$s->addElement( ffOneElement::TYPE_NEW_LINE );

					$s->addOption( ffOneOption::TYPE_SELECT, 'padding-top', __('Padding top (px)', 'wien'), 'default')
						->addSelectValue('Default', 'default')
						->addSelectValue('0', '0')
						->addSelectNumberRange(5, 250, 5)
						;

					$s->addElement( ffOneElement::TYPE_NEW_LINE );

					$s->addOption( ffOneOption::TYPE_SELECT, 'padding-bottom', __('Padding bottom (px)', 'wien'), 'default')
						->addSelectValue('Default', 'default')
						->addSelectValue('0', '0')
						->addSelectNumberRange(5, 250, 5)
						;

					$s->addElement(ffOneElement::TYPE_HEADING, '', __('Background', 'wien'));

					$s->startSection('background');
						ff_load_section_options( 'section-background-block', $s);
					$s->endSection();

				$s->addElement(ffOneElement::TYPE_TABLE_DATA_END);
			$s->endSection();

		   $s->startSection('container');
				$s->addElement(ffOneElement::TYPE_TABLE_DATA_START, '', __('Container Wrapper', 'wien'));
					$s->addOption( ffOneOption::TYPE_CHECKBOX, 'apply', __('Apply settings below', 'wien'), 0);

					$s->addElement( ffOneElement::TYPE_NEW_LINE );

					$s->addOption( ffOneOption::TYPE_SELECT, 'type', __('Type', 'wien'), 'not')
						->addSelectValue(__('Container', 'wien'), 'not')
						->addSelectValue(__('Container Fluid', 'wien'), 'fluid')
						->addSelectValue(__('Container Fullwidth', 'wien'), 'fullwidth')
						;

					$s->addElement( ffOneElement::TYPE_NEW_LINE );

					$s->addOption( ffOneOption::TYPE_CHECKBOX, 'is-fulscreen', __('Is Fullscreen section', 'wien'), 0);

				$s->addElement(ffOneElement::TYPE_TABLE_DATA_END);
			$s->endSection();

		$s->addElement( ffOneElement::TYPE_TABLE_END );

	$s->addElement(ffOneElement::TYPE_TOGGLE_BOX_END);
$s->addElement( ffOneElement::TYPE_TABLE_DATA_END);
$s->endSection();