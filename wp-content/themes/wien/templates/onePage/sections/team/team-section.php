<?php
/**
 * @var $s ffOneStructure
 */

################################################################################
# TEAM START
################################################################################

$s->startSection('team', ffOneSection::TYPE_REPEATABLE_VARIATION)
	->addParam('section-name', __('Team', 'wien'))
	->addParam('hide-default', true)
	->addParam('advanced-picker-menu-title', __('Common', 'wien'))
	->addParam('advanced-picker-menu-id', 'common')
	->addParam('advanced-picker-section-image', ff_get_section_preview_image_url('team'));

	$s->addElement( ffOneElement::TYPE_TABLE_START );

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Preview', 'wien'));
			$s->addElement(ffOneElement::TYPE_HTML,'','<img src="'.ff_get_section_preview_image_url('team').'" width="250">');
		$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Section Wrappers Options', 'wien'));
			ff_load_section_options('section-fullwidth-wrapper-block', $s);
			ff_load_section_options('section-boxed-wrapper-block', $s);
		$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Heading', 'wien'));
		ff_load_section_options( 'heading-wrapped-block', $s);
		$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Person', 'wien'));

			$s->startSection('persons', ffOneSection::TYPE_REPEATABLE_VARIABLE);
				$s->startSection('one-person', ffOneSection::TYPE_REPEATABLE_VARIATION)
					->addParam('section-name', __('One person', 'wien'));
					ff_load_section_options( 'bootstrap-columns-block', $s, array('sm'=>4));
					$s->addElement(ffOneElement::TYPE_NEW_LINE);
					ff_load_section_options('animation-block', $s );
					$s->addElement(ffOneElement::TYPE_NEW_LINE);
					$s->addOption(ffOneOption::TYPE_TEXT, 'name', __('Name', 'wien'), __('Sam Smith', 'wien'));
					$s->addElement(ffOneElement::TYPE_NEW_LINE);
					$s->addOption(ffOneOption::TYPE_TEXT, 'position', __('Position', 'wien'), __('Graphical Designer', 'wien'));
					$s->addElement(ffOneElement::TYPE_NEW_LINE);
					$s->addOption(ffOneOption::TYPE_IMAGE, 'image', __('Photo', 'wien'), '');
					$s->addElement(ffOneElement::TYPE_NEW_LINE);
					$s->addOption(ffOneOption::TYPE_TEXTAREA, 'social', __('Social links', 'wien'), '');
				$s->endSection();
			$s->endSection();
		$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

	$s->addElement( ffOneElement::TYPE_TABLE_END );
$s->endSection();

################################################################################
# TEAM END
################################################################################
