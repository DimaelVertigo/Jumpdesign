<?php
/**
 * @var $s ffOneStructure
 */

################################################################################
# HEADING START
################################################################################

$s->startSection('heading', ffOneSection::TYPE_REPEATABLE_VARIATION)
	->addParam('section-name', __('Heading' ,'wien'))
	->addParam('hide-default', false)
	->addParam('advanced-picker-menu-title', __('Common' ,'wien'))
	->addParam('advanced-picker-menu-id', 'common')
	->addParam('advanced-picker-section-image', ff_get_section_preview_image_url('heading'));

	$s->addElement( ffOneElement::TYPE_TABLE_START );

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Preview' ,'wien'));
			$s->addElement(ffOneElement::TYPE_HTML,'','<img src="'.ff_get_section_preview_image_url('heading').'" width="250">');
		$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Section Wrappers Options' ,'wien'));
			ff_load_section_options('section-fullwidth-wrapper-block', $s);
			ff_load_section_options('section-boxed-wrapper-block', $s);
		$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('General' ,'wien'));

			$s->startSection('heading');
			ff_load_section_options('heading-wrapped-block', $s);
			$s->endSection();
		$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );
	$s->addElement( ffOneElement::TYPE_TABLE_END );
$s->endSection();

################################################################################
# HEADING END
################################################################################
