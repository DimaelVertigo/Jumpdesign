<?php
/**
 * @var $s ffOneStructure
 */

################################################################################
/* PORTFOLIO ARCHIVE CLASSIC START
/**********************************************************************************************************************/

$s->startSection('portfolio-archive-classic', ffOneSection::TYPE_REPEATABLE_VARIATION)
	->addParam('section-name', __('Portfolio Archive Classic', 'wien'))
	->addParam('hide-default', true)

	->addParam('advanced-picker-menu-title', __('Portfolio', 'wien'))
	->addParam('advanced-picker-menu-id', 'portfolio')
	->addParam('advanced-picker-section-image', ff_get_section_preview_image_url('portfolio-archive-classic'));


	$s->addElement( ffOneElement::TYPE_TABLE_START );

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Preview', 'wien'));
			$s->addElement(ffOneElement::TYPE_HTML,'','<img src="'.ff_get_section_preview_image_url('portfolio-archive-classic').'" width="250">');
		$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Section Wrappers Options', 'wien'));
			ff_load_section_options('section-fullwidth-wrapper-block', $s );
			ff_load_section_options('section-boxed-wrapper-block', $s);
		$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Featured Image', 'wien'));

			ff_load_section_options('portfolio-featured-image-block', $s);

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('General', 'wien'));
			$s->addOption(ffOneOption::TYPE_SELECT, 'linkTitle', __('Title points to', 'wien'), 'button')
					->addSelectValue(__('Specified in portfolio single (item or external link)', 'wien'), 'button')
					->addSelectValue(__('Nowhere', 'wien'), 'nowhere')
					;
			$s->addElement( ffOneElement::TYPE_NEW_LINE );
		$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );


		$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Button', 'wien'));
			ff_load_section_options('button-block', $s);
		$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );



	$s->addElement( ffOneElement::TYPE_TABLE_END );
$s->endSection();
