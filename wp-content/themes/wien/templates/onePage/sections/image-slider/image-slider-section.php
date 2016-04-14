<?php
/**
 * @var $s ffOneStructure
 */

################################################################################
# IMAGE SLIDER START
################################################################################
$s->startSection('image-slider', ffOneSection::TYPE_REPEATABLE_VARIATION)
	->addParam('section-name', __('Image slider' ,'wien'))
	->addParam('hide-default', true)
	->addParam('advanced-picker-menu-title', __('Common' ,'wien'))
	->addParam('advanced-picker-menu-id', 'common')
	->addParam('advanced-picker-section-image', ff_get_section_preview_image_url('image-slider'));

	$s->addElement( ffOneElement::TYPE_TABLE_START );

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Preview' ,'wien'));
		$s->addElement(ffOneElement::TYPE_HTML,'','<img src="'.ff_get_section_preview_image_url('image-slider').'" width="250">');
		$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Section Wrappers Options' ,'wien'));
			ff_load_section_options('section-fullwidth-wrapper-block', $s);
			ff_load_section_options('section-boxed-wrapper-block', $s);
		$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Image slider' ,'wien'));
			$s->addElement( ffOneElement::TYPE_NEW_LINE);
			$s->startSection('images', ffOneSection::TYPE_REPEATABLE_VARIABLE);
				$s->startSection('one-image', ffOneSection::TYPE_REPEATABLE_VARIATION)
					->addParam('section-name', __('One image' ,'wien'));
						ff_load_section_options('image-block', $s );
				$s->endSection();
			$s->endSection();
		$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

	$s->addElement( ffOneElement::TYPE_TABLE_END );
$s->endSection();

################################################################################
# IMAGE SLIDER END
################################################################################


