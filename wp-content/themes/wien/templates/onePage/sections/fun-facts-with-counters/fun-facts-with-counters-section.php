<?php
/**
 * @var $s ffOneStructure
 */

################################################################################
# FUN FACTS WITH COUNTERS START
################################################################################

$s->startSection('fun-facts-with-counters', ffOneSection::TYPE_REPEATABLE_VARIATION)
	->addParam('section-name', __('Fun facts with counters' ,'wien'))
	->addParam('hide-default', true)
	->addParam('advanced-picker-menu-title', __('Common' ,'wien'))
	->addParam('advanced-picker-menu-id', 'common')
	->addParam('advanced-picker-section-image', ff_get_section_preview_image_url('fun-facts-with-counters'));

	$s->addElement( ffOneElement::TYPE_TABLE_START );

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Preview' ,'wien'));
			$s->addElement(ffOneElement::TYPE_HTML,'','<img src="'.ff_get_section_preview_image_url('fun-facts-with-counters').'" width="250">');
		$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Section Wrappers Options' ,'wien'));
			ff_load_section_options('section-fullwidth-wrapper-block', $s, array('color-type'=>'dark-bg'));
			ff_load_section_options('section-boxed-wrapper-block', $s);
		$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Heading' ,'wien'));
			ff_load_section_options( 'heading-wrapped-block', $s);
		$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Fun facts' ,'wien'));
			$s->startSection('facts', ffOneSection::TYPE_REPEATABLE_VARIABLE);
				$s->startSection('one-fact', ffOneSection::TYPE_REPEATABLE_VARIATION)
					->addParam('section-name', __('One fact' ,'wien'));
				ff_load_section_options( 'bootstrap-columns-block', $s, array('sm'=>4));
				$s->addOption(ffOneOption::TYPE_ICON, 'icon', __('Icon' ,'wien'), '');
				$s->addElement(ffOneElement::TYPE_NEW_LINE);
				$s->addOption(ffOneOption::TYPE_TEXT, 'title', __('Title' ,'wien'), __('Satisfied clients' ,'wien'));
				$s->addElement(ffOneElement::TYPE_NEW_LINE);
				$s->addOption(ffOneOption::TYPE_TEXT, 'quantity', __('Quantity' ,'wien'), '139');
				$s->addElement(ffOneElement::TYPE_NEW_LINE);
				$s->endSection();
			$s->endSection();
		$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

	$s->addElement( ffOneElement::TYPE_TABLE_END );
$s->endSection();

################################################################################
# FUN FACTS WITH COUNTERS END
################################################################################

