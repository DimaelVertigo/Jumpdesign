<?php
/**
 * @var $s ffOneStructure
 */

################################################################################
# LOGO SLIDER START
################################################################################

$s->startSection('logo-slider', ffOneSection::TYPE_REPEATABLE_VARIATION)
	->addParam('section-name', __('Logo slider' ,'wien'))
	->addParam('hide-default', true)
	->addParam('advanced-picker-menu-title', __('Common' ,'wien'))
	->addParam('advanced-picker-menu-id', 'common')
	->addParam('advanced-picker-section-image', ff_get_section_preview_image_url('logo-slider'));

	$s->addElement( ffOneElement::TYPE_TABLE_START );

	$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Preview' ,'wien'));
		$s->addElement(ffOneElement::TYPE_HTML,'','<img src="'.ff_get_section_preview_image_url('logo-slider').'" width="250">');
	$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

	$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Section Wrappers Options' ,'wien'));
			ff_load_section_options('section-fullwidth-wrapper-block', $s);
			ff_load_section_options('section-boxed-wrapper-block', $s);
	$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

	$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Heading' ,'wien'));
	ff_load_section_options( 'heading-wrapped-block', $s);
	$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

	$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Logo slider' ,'wien'));
		$s->startSection('logos', ffOneSection::TYPE_REPEATABLE_VARIABLE);
			$s->startSection('one-logo', ffOneSection::TYPE_REPEATABLE_VARIATION)
				->addParam('section-name', __('One logo' ,'wien'));
				ff_load_section_options('image-block', $s);
			$s->endSection();
		$s->endSection();
	$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

	$s->addElement( ffOneElement::TYPE_TABLE_END );
$s->endSection();

################################################################################
# LOGO SLIDER END
################################################################################