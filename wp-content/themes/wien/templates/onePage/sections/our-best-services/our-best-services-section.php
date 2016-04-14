<?php
/**
 * @var $s ffOneStructure
 */

################################################################################
# OUR BEST SERVICES START
################################################################################

$s->startSection('our-best-services', ffOneSection::TYPE_REPEATABLE_VARIATION)
	->addParam('section-name', __('Our best services', 'wien'))
	->addParam('hide-default', true)
	->addParam('advanced-picker-menu-title', __('Common', 'wien'))
	->addParam('advanced-picker-menu-id', 'common')
	->addParam('advanced-picker-section-image', ff_get_section_preview_image_url('our-best-services'));

	$s->addElement( ffOneElement::TYPE_TABLE_START );

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Preview', 'wien'));
			$s->addElement(ffOneElement::TYPE_HTML,'','<img src="'.ff_get_section_preview_image_url('our-best-services').'" width="250">');
		$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Section Wrappers Options', 'wien'));
			ff_load_section_options('section-fullwidth-wrapper-block', $s);
			ff_load_section_options('section-boxed-wrapper-block', $s);
		$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Heading', 'wien'));
			ff_load_section_options( 'heading-wrapped-block', $s);
		$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Our best services', 'wien'));
			$s->startSection('our-services', ffOneSection::TYPE_REPEATABLE_VARIABLE);
				$s->startSection('one-service', ffOneSection::TYPE_REPEATABLE_VARIATION)
					->addParam('section-name', __('One service', 'wien'));

				ff_load_section_options( 'bootstrap-columns-block', $s, array('sm'=>4));

				ff_load_section_options('animation-block', $s );
				$s->addElement(ffOneElement::TYPE_NEW_LINE);

				$s->addOption(ffOneOption::TYPE_ICON, 'icon', __('Icon', 'wien'), '');
				$s->addElement(ffOneElement::TYPE_NEW_LINE);

				$s->addOption(ffOneOption::TYPE_TEXT, 'title', __('Title', 'wien'), __('Development', 'wien'));
				$s->addElement(ffOneElement::TYPE_NEW_LINE);

				$s->addOption(ffOneOption::TYPE_TEXT, 'link', __('Link', 'wien'), '#');
				$s->addElement(ffOneElement::TYPE_NEW_LINE);

				$s->addOption(ffOneOption::TYPE_TEXTAREA, 'description', __('Description', 'wien'), __('Sed ut perspiciatis unde omnis iste natus error sit voluptatem elit doloremque omis unde, totam rem aperiam, eaque ipsa.', 'wien'));
				$s->addElement(ffOneElement::TYPE_NEW_LINE);

				$s->endSection();
			$s->endSection();
		$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

	$s->addElement( ffOneElement::TYPE_TABLE_END );
$s->endSection();

################################################################################
# OUR BEST SERVICES END
################################################################################