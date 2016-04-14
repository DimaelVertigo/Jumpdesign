<?php
/**
 * @var $s ffOneStructure
 */

################################################################################
# FUN FACTS START
################################################################################

$s->startSection('fun-facts', ffOneSection::TYPE_REPEATABLE_VARIATION)
	->addParam('section-name', __('Fun facts' ,'wien'))
	->addParam('hide-default', true)
	->addParam('advanced-picker-menu-title', __('Common' ,'wien'))
	->addParam('advanced-picker-menu-id', 'common')
	->addParam('advanced-picker-section-image', ff_get_section_preview_image_url('fun-facts'));

	$s->addElement( ffOneElement::TYPE_TABLE_START );

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Preview' ,'wien'));
			$s->addElement(ffOneElement::TYPE_HTML,'','<img src="'.ff_get_section_preview_image_url('fun-facts').'" width="250">');
		$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Section Wrappers Options' ,'wien'));
			ff_load_section_options('section-fullwidth-wrapper-block', $s, array('color-type'=>'dark-bg'));
			ff_load_section_options('section-boxed-wrapper-block', $s);
		$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Heading' ,'wien'));
		ff_load_section_options( 'heading-wrapped-block', $s);
		$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

		$s->startSection('colors');
		$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Colors' ,'wien'));
			$s->addOption( ffOneOption::TYPE_CHECKBOX, 'different-color', __('Use different color than theme skin','wien'));

			$s->addElement( ffOneElement::TYPE_NEW_LINE );

			$s->addOption( ffOneOption::TYPE_TEXT, 'color', '', '#FFFFFF')
							->addParam('class', 'ff-default-wp-color-picker');

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );
		$s->endSection();

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Fun facts' ,'wien'));
			$s->startSection('facts', ffOneSection::TYPE_REPEATABLE_VARIABLE);
			$s->startSection('one-fact', ffOneSection::TYPE_REPEATABLE_VARIATION)
				->addParam('section-name', __('One fact' ,'wien'));
				ff_load_section_options( 'bootstrap-columns-block', $s, array('sm'=>3));
				$s->addOption(ffOneOption::TYPE_TEXT, 'title', 'Title', __('Pure love' ,'wien'));
				$s->addElement(ffOneElement::TYPE_NEW_LINE);
				$s->addOption(ffOneOption::TYPE_TEXT, 'percentage', __('Percentage' ,'wien'), '75');
				$s->addElement(ffOneElement::TYPE_NEW_LINE);
			$s->endSection();
			$s->endSection();
		$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

	$s->addElement( ffOneElement::TYPE_TABLE_END );
$s->endSection();

################################################################################
# FUN FACTS END
################################################################################