<?php
################################################################################
# PAGE START
################################################################################

$s->startSection('page', ffOneSection::TYPE_REPEATABLE_VARIATION)
	->addParam('section-name', __('Page', 'wien'))
	->addParam('hide-default', true)

	->addParam('advanced-picker-menu-title', __('Special', 'wien'))
	->addParam('advanced-picker-menu-id', 'special')
	->addParam('advanced-picker-section-image', ff_get_section_preview_image_url('page'));


	$s->addElement( ffOneElement::TYPE_TABLE_START );

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Preview', 'wien'));
			$s->addElement(ffOneElement::TYPE_HTML,'','<img src="'.ff_get_section_preview_image_url('page').'" width="250">');
		$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Page', 'wien'));

			$s->addOption( ffOneOption::TYPE_POST_SELECTOR, 'page', __('Page', 'wien'), '')
				->addParam('type', 'multiple');

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

	$s->addElement( ffOneElement::TYPE_TABLE_END );

$s->endSection();

################################################################################
# PAGE END
################################################################################
