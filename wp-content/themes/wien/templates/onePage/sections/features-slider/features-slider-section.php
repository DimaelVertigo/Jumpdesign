<?php
/**
 * @var $s ffOneStructure
 */

################################################################################
# FEATURES SLIDER START
################################################################################

$s->startSection('features-slider', ffOneSection::TYPE_REPEATABLE_VARIATION)
	->addParam('section-name', __('Features Slider', 'wien'))
	->addParam('hide-default', true)
	->addParam('advanced-picker-menu-title', __('Common', 'wien'))
	->addParam('advanced-picker-menu-id', 'common')
	->addParam('advanced-picker-section-image', ff_get_section_preview_image_url('features-slider'));

	$s->addElement( ffOneElement::TYPE_TABLE_START );

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Preview', 'wien'));
			$s->addElement(ffOneElement::TYPE_HTML,'','<img src="'.ff_get_section_preview_image_url('features-slider').'" width="250">');
		$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Section Wrappers Options', 'wien'));
			ff_load_section_options('section-fullwidth-wrapper-block', $s);
			ff_load_section_options('section-boxed-wrapper-block', $s);
		$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Heading', 'wien'));
			ff_load_section_options( 'heading-wrapped-block', $s);
		$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Features Slider', 'wien'));
			$s->startSection('slider', ffOneSection::TYPE_REPEATABLE_VARIABLE);
				$s->startSection('one-slide', ffOneSection::TYPE_REPEATABLE_VARIATION)
					->addParam('section-name', __('One slide', 'wien'));
				$s->addOption(ffOneOption::TYPE_IMAGE, 'image', __('Slide image', 'wien'));
				$s->addElement(ffOneElement::TYPE_NEW_LINE);
				$s->addOption(ffOneOption::TYPE_TEXT, 'title', __('Title', 'wien'), __('Retina ready & responsive', 'wien'));
				$s->addElement(ffOneElement::TYPE_NEW_LINE);
				$s->addOption(ffOneOption::TYPE_TEXTAREA, 'description', __('Description', 'wien'), __('Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas.Nam tincidunt eget purus eu pharetra. Pellentesque habitant morbi tristique.', 'wien'));
				$s->addElement(ffOneElement::TYPE_NEW_LINE);
				ff_load_section_options( 'button-block', $s);
				$s->endSection();
			$s->endSection();
		$s->addElement( ffOneElement::TYPE_TABLE_DATA_END);

	$s->addElement( ffOneElement::TYPE_TABLE_END );
$s->endSection();

################################################################################
# FEATURES SLIDER END
################################################################################


