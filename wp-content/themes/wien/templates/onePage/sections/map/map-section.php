<?php
/**
 * @var $s ffOneStructure
 */

################################################################################
# MAP START
################################################################################

$s->startSection('map', ffOneSection::TYPE_REPEATABLE_VARIATION)
	->addParam('section-name', __('Map', 'wien'))
	->addParam('hide-default', true)
	->addParam('advanced-picker-menu-title', __('Contact', 'wien'))
	->addParam('advanced-picker-menu-id', 'contact')
	->addParam('advanced-picker-section-image', ff_get_section_preview_image_url('map'));

	$s->addElement( ffOneElement::TYPE_TABLE_START );

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Preview', 'wien'));
			$s->addElement(ffOneElement::TYPE_HTML,'','<img src="'.ff_get_section_preview_image_url('map').'" width="250">');
		$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Section Wrappers Options', 'wien'));
			ff_load_section_options('section-fullwidth-wrapper-block', $s);
			$s->addOption( ffOneOption::TYPE_CHECKBOX, 'is-boxed', __('Is Boxed Section', 'wien'), 0);
			$s->addElement( ffOneElement::TYPE_NEW_LINE );
			$s->addElement( ffOneElement::TYPE_NEW_LINE );
			ff_load_section_options('section-boxed-wrapper-block', $s);
		$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('General', 'wien'));
			$s->addOption(ffOneOption::TYPE_TEXT, 'address', __('Address', 'wien'), __('San Jose, California, USA', 'wien'));
			$s->addElement( ffOneElement::TYPE_NEW_LINE );
			$s->addOption(ffOneOption::TYPE_TEXT, 'description', __('Description', 'wien'), __('Wien Office', 'wien'));

			$s->addElement( ffOneElement::TYPE_NEW_LINE );
			$s->addOption(ffOneOption::TYPE_SELECT, 'zoom', __('Zoom', 'wien'), 11)
				->addSelectNumberRange(0,20)
				;

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );


	$s->addElement( ffOneElement::TYPE_TABLE_END );
$s->endSection();

################################################################################
# MAP END
################################################################################
