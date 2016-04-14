<?php
/**
 * @var $s ffOneStructure
 */

################################################################################
# TESTIMONIAL WITHOUT PICTURE START
################################################################################

$s->startSection('testimonial-without-picture', ffOneSection::TYPE_REPEATABLE_VARIATION)
	->addParam('section-name', __('Testimonials without picture', 'wien'))
	->addParam('hide-default', true)
	->addParam('advanced-picker-menu-title', __('Common', 'wien'))
	->addParam('advanced-picker-menu-id', 'common')
	->addParam('advanced-picker-section-image', ff_get_section_preview_image_url('testimonial-without-picture'));

	$s->addElement( ffOneElement::TYPE_TABLE_START );

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Preview', 'wien'));
			$s->addElement(ffOneElement::TYPE_HTML,'','<img src="'.ff_get_section_preview_image_url('testimonial-without-picture').'" width="250">');
		$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Section Wrappers Options', 'wien'));
			ff_load_section_options('section-fullwidth-wrapper-block', $s);
			ff_load_section_options('section-boxed-wrapper-block', $s);
		$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Testimonials', 'wien'));
			$s->startSection('testimonials', ffOneSection::TYPE_REPEATABLE_VARIABLE);
				$s->startSection('one-testimonial', ffOneSection::TYPE_REPEATABLE_VARIATION)
					->addParam('section-name', __('One testimonial', 'wien'));
				$s->addOption(ffOneOption::TYPE_TEXTAREA, 'text', __('Text', 'wien'), __('Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae.', 'wien'));
				$s->addElement(ffOneElement::TYPE_NEW_LINE);
				$s->addOption(ffOneOption::TYPE_TEXT, 'author', __('Author', 'wien'), __('Janifer Smith', 'wien'));
				$s->addElement(ffOneElement::TYPE_NEW_LINE);
				$s->addOption(ffOneOption::TYPE_TEXT, 'company', __('Company', 'wien'), __('Companyname Inc', 'wien'));
				$s->endSection();
			$s->endSection();
		$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );
	$s->addElement( ffOneElement::TYPE_TABLE_END );
$s->endSection();

################################################################################
# TESTIMONIAL WITHOUT PICTURE END
################################################################################