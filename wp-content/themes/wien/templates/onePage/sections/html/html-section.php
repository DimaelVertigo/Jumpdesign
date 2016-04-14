<?php
################################################################################
# HTML START
################################################################################
/** @var $s ffOneStructure */
$s->startSection('html', ffOneSection::TYPE_REPEATABLE_VARIATION)
	->addParam('section-name', __('HTML' ,'wien'))
	->addParam('hide-default', true)

	->addParam('advanced-picker-menu-title', __('Special' ,'wien'))
	->addParam('advanced-picker-menu-id', 'special')
	->addParam('advanced-picker-section-image', ff_get_section_preview_image_url('html'));


$s->addElement( ffOneElement::TYPE_TABLE_START );

$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Preview' ,'wien'));
$s->addElement(ffOneElement::TYPE_HTML,'','<img width="250" src="'.ff_get_section_preview_image_url('html').'">');
$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Section Wrappers Options' ,'wien'));
$s->addOption( ffOneOption::TYPE_CHECKBOX, 'is-wrapped-by', __('Wrap by these settings:' ,'wien'), 1 );
$s->addElement( ffOneElement::TYPE_NEW_LINE );
$s->addElement( ffOneElement::TYPE_NEW_LINE );
ff_load_section_options('section-fullwidth-wrapper-block', $s );

$s->addOption( ffOneOption::TYPE_CHECKBOX, 'is-boxed', __('Is boxed section' ,'wien'), 1 );
$s->addElement( ffOneElement::TYPE_NEW_LINE );
$s->addElement( ffOneElement::TYPE_NEW_LINE );
ff_load_section_options('section-boxed-wrapper-block', $s);
$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('HTML' ,'wien'));

$s->addOption( ffOneOption::TYPE_TEXTAREA, 'html', __('HTML' ,'wien'), '');

$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );
$s->addElement( ffOneElement::TYPE_TABLE_END );
$s->endSection();

################################################################################
# HTML END
################################################################################