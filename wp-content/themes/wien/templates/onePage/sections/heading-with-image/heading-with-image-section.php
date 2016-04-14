<?php
/**
 * @var $s ffOneStructure
 */

################################################################################
# HEADING WITH IMAGE START
################################################################################

$s->startSection('heading-with-image', ffOneSection::TYPE_REPEATABLE_VARIATION)
	->addParam('section-name', __('Heading with image' ,'wien'))
	->addParam('hide-default', true)
	->addParam('advanced-picker-menu-title', __('Common' ,'wien'))
	->addParam('advanced-picker-menu-id', 'common')
	->addParam('advanced-picker-section-image', ff_get_section_preview_image_url('heading-with-image'));

$s->addElement( ffOneElement::TYPE_TABLE_START );

	$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Preview' ,'wien'));
		$s->addElement(ffOneElement::TYPE_HTML,'','<img src="'.ff_get_section_preview_image_url('heading-with-image').'" width="250">');
	$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

	$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Section Wrappers Options' ,'wien'));
			ff_load_section_options('section-fullwidth-wrapper-block', $s);
			ff_load_section_options('section-boxed-wrapper-block', $s);
	$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

	$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Content' ,'wien') );

		$s->startSection('columns', ffOneSection::TYPE_REPEATABLE_VARIABLE );
			$s->startSection('one-column-image', ffOneSection::TYPE_REPEATABLE_VARIATION) ->addParam('section-name', __('One Column Image' ,'wien'));
				ff_load_section_options('bootstrap-columns-block', $s, array('sm'=>4));

					ff_load_section_options('animation-block', $s);
					$s->addElement( ffOneElement::TYPE_NEW_LINE);

					ff_load_section_options('image-block', $s );
			$s->endSection();

			$s->startSection('one-column-heading', ffOneSection::TYPE_REPEATABLE_VARIATION) ->addParam('section-name', __('One Column Heading' ,'wien'));
				ff_load_section_options('bootstrap-columns-block', $s, array('sm'=>8));

				ff_load_section_options('heading-content-block', $s);
			$s->endSection();

		$s->endSection();

	$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );


$s->addElement( ffOneElement::TYPE_TABLE_END );
$s->endSection();

################################################################################
# HEADING WITH IMAGE END
################################################################################
