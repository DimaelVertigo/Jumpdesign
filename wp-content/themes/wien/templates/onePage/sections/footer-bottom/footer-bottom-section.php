<?php
/**
 * @var $s ffOneStructure
 */

################################################################################
# FOOTER SOCIAL START
################################################################################

$s->startSection('footer-bottom', ffOneSection::TYPE_REPEATABLE_VARIATION)
	->addParam('section-name', __('Footer Bottom', 'wien'))
	->addParam('hide-default', true)
	->addParam('advanced-picker-menu-title', __('Footer', 'wien'))
	->addParam('advanced-picker-menu-id', 'footer')
	->addParam('advanced-picker-section-image', ff_get_section_preview_image_url('footer-bottom'));

	$s->addElement( ffOneElement::TYPE_TABLE_START );

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Preview', 'wien'));
			$s->addElement(ffOneElement::TYPE_HTML,'','<img src="'.ff_get_section_preview_image_url('footer-bottom').'" width="250">');
		$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Section Wrappers Options', 'wien'));
			ff_load_section_options('section-fullwidth-wrapper-block', $s, array('color-type'=>'dark-bg'));
			$s->addOption( ffOneOption::TYPE_CHECKBOX, 'is-boxed', __('Is Boxed Section', 'wien'), 0);
			$s->addElement( ffOneElement::TYPE_NEW_LINE );
			$s->addElement( ffOneElement::TYPE_NEW_LINE );
			ff_load_section_options('section-boxed-wrapper-block', $s);
		$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('General', 'wien'));

			$textContent = __('2015 Wien, All rights reserved','wien');
			$s->addOption(ffOneOption::TYPE_TEXTAREA, 'content', __('Text', 'wien'), $textContent);
			$s->addOption(ffOneOption::TYPE_CHECKBOX, 'show-image', __('Image', 'wien'), 0);
			$s->addElement( ffOneElement::TYPE_NEW_LINE);
			$s->addOption(ffOneOption::TYPE_IMAGE, 'image', __('Footer image', 'wien'));

			$s->addOption(ffOneOption::TYPE_TEXTAREA, 'social', __('Social links', 'wien'), '');

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

	$s->addElement( ffOneElement::TYPE_TABLE_END );
$s->endSection();

################################################################################
# FOOTER SOCIAL END
################################################################################


