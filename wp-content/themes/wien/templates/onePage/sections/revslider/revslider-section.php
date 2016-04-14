<?php
/**
 * @var $s ffOneStructure
 */

################################################################################
# REVOLUTION SLIDER
################################################################################

$s->startSection('revslider', ffOneSection::TYPE_REPEATABLE_VARIATION)
	->addParam('section-name', __('Revolution Slider', 'wien'))
	->addParam('hide-default', true)

	->addParam('advanced-picker-menu-title', __('Header', 'wien'))
	->addParam('advanced-picker-menu-id', 'header')
	->addParam('advanced-picker-section-image', ff_get_section_preview_image_url('revslider'));


	$s->addElement( ffOneElement::TYPE_TABLE_START );

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Preview', 'wien'));
			$s->addElement(ffOneElement::TYPE_HTML,'','<img src="'.ff_get_section_preview_image_url('revslider').'" width="250">');
		$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Slider Revolution', 'wien'));

			$s->startSection('revslider');

				$s->addOption(ffOneOption::TYPE_REVOLUTION_SLIDER, 'id', '', '');

			$s->endSection();

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );
	$s->addElement( ffOneElement::TYPE_TABLE_END );

$s->endSection();
################################################################################
# REVOLUTION SLIDER END
################################################################################