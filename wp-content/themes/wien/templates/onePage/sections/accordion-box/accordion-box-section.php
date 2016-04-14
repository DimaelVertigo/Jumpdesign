<?php
/**
 * @var $s ffOneStructure
 */

################################################################################
# ACCORDION BOX START
################################################################################
$s->startSection('accordion-box', ffOneSection::TYPE_REPEATABLE_VARIATION)
	->addParam('section-name', __('Accordion box', 'wien'))
	->addParam('hide-default', true)
	->addParam('advanced-picker-menu-title', __('Common', 'wien'))
	->addParam('advanced-picker-menu-id', 'common')
	->addParam('advanced-picker-section-image', ff_get_section_preview_image_url('accordion-box'));

	$s->addElement( ffOneElement::TYPE_TABLE_START );

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', 'Preview');
			$s->addElement(ffOneElement::TYPE_HTML,'','<img src="'.ff_get_section_preview_image_url('accordion-box').'" width="250">');
		$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Section Wrappers Options', 'wien'));
			ff_load_section_options('section-fullwidth-wrapper-block', $s);
			ff_load_section_options('section-boxed-wrapper-block', $s);
		$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Heading', 'wien'));
			ff_load_section_options( 'heading-wrapped-block', $s);
		$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Content', 'wien'));
			$s->startSection('boxes', ffOneSection::TYPE_REPEATABLE_VARIABLE);
				$s->startSection('one-box', ffOneSection::TYPE_REPEATABLE_VARIATION)
					->addParam('section-name', 'Text box');

					ff_load_section_options( 'bootstrap-columns-block', $s, array('sm'=>4));
					$s->addOption(ffOneOption::TYPE_TEXT_FULLWIDTH, 'title', __('Title', 'wien'), 'Lorem ipsum dolor sit amet, consectetur adipis cing elit. Praesent at risus ac velit posuere lobo rtis. Vivamus aliquet eget dui non posuere.');
					$s->addElement(ffOneElement::TYPE_NEW_LINE);
					$s->addOption(ffOneOption::TYPE_TEXTAREA, 'description', __('Description', 'wien'), 'Etiam libero est, sodales eu arcu id, finibus facilisis dui. Aenean finibus fin ibus nibh, et commodo metus tempor vitae dolor.');
					$s->endSection();


					$s->startSection('one-image', ffOneSection::TYPE_REPEATABLE_VARIATION)
						->addParam('section-name', 'Image box');
					ff_load_section_options( 'bootstrap-columns-block', $s, array('sm'=>2));
					ff_load_section_options( 'image-block', $s);

				$s->endSection();

				$s->startSection('one-accordion', ffOneSection::TYPE_REPEATABLE_VARIATION)
					->addParam('section-name', __('One Accordion', 'wien'));
					ff_load_section_options( 'bootstrap-columns-block', $s, array('sm'=>6));
					$s->startSection('answer', ffOneSection::TYPE_REPEATABLE_VARIABLE );

						$s->startSection('one-answer', ffOneSection::TYPE_REPEATABLE_VARIATION )
							->addParam('section-name', __('One Text Line', 'wien'));

							$s->addOption( ffOneOption::TYPE_TEXT_FULLWIDTH, 'title', __('Title', 'wien'), 'Etiam libero est, sodale');
							$s->addElement( ffOneElement::TYPE_NEW_LINE);
							$s->addOption( ffOneOption::TYPE_TEXTAREA, 'text', __('Text', 'wien'), 'Etiam libero est, sodale');
							$s->addElement( ffOneElement::TYPE_NEW_LINE);
							$s->addOption( ffOneOption::TYPE_CHECKBOX, 'is_expanded', __('Is Expanded', 'wien'), 0);

						$s->endSection();

					$s->endSection();
			$s->addElement(ffOneElement::TYPE_NEW_LINE);
		$s->endSection();

	$s->endSection();

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

$s->addElement( ffOneElement::TYPE_TABLE_END );
$s->endSection();

################################################################################
# ACCORDION BOX END
################################################################################