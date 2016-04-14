<?php
/**
 * @var $s ffOneStructure
 */

################################################################################

# BOXES WITH ICONS START
################################################################################
$s->startSection('boxes-with-icons', ffOneSection::TYPE_REPEATABLE_VARIATION)
	->addParam('section-name', __('Boxes with icons', 'wien'))
	->addParam('hide-default', true)
	->addParam('advanced-picker-menu-title', __('Common', 'wien'))
	->addParam('advanced-picker-menu-id', 'common')
	->addParam('advanced-picker-section-image', ff_get_section_preview_image_url('boxes-with-icons'));

	$s->addElement( ffOneElement::TYPE_TABLE_START );

	$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Preview', 'wien'));
		$s->addElement(ffOneElement::TYPE_HTML,'','<img src="'.ff_get_section_preview_image_url('boxes-with-icons').'" width="250">');
	$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

	$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Section Wrappers Options', 'wien'));
		ff_load_section_options('section-fullwidth-wrapper-block', $s);
		ff_load_section_options('section-boxed-wrapper-block', $s);
	$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

	$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Heading', 'wien'));
		ff_load_section_options( 'heading-wrapped-block', $s);
	$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

	$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Boxes with icons on the left side', 'wien'));

	$s->startSection('boxesLeft', ffOneSection::TYPE_REPEATABLE_VARIABLE);
		$s->startSection('one-box', ffOneSection::TYPE_REPEATABLE_VARIATION)
			->addParam('section-name', __('One box', 'wien'));
		ff_load_section_options('animation-block', $s );
		$s->addElement(ffOneElement::TYPE_NEW_LINE);
		$s->addOption(ffOneOption::TYPE_ICON, 'icon', __('Icon', 'wien'), '');
		$s->addElement(ffOneElement::TYPE_NEW_LINE);
		$s->addOption(ffOneOption::TYPE_TEXT, 'title', __('Title', 'wien'), __('Developement', 'wien'));
		$s->addElement(ffOneElement::TYPE_NEW_LINE);
		$s->addOption(ffOneOption::TYPE_TEXTAREA, 'description', __('Description', 'wien'), __('Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.', 'wien'));
		$s->addElement(ffOneElement::TYPE_NEW_LINE);
		$s->addOption(ffOneOption::TYPE_TEXT, 'link', __('Link', 'wien'), '#');
		$s->endSection();
		$s->endSection();
	$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

	$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Image', 'wien'));
	$s->addOption(ffOneOption::TYPE_IMAGE, 'image', __('Image', 'wien'), '');
	$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

	$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Boxes with icons on the right side', 'wien'));

		$s->startSection('boxesRight', ffOneSection::TYPE_REPEATABLE_VARIABLE);
			$s->startSection('one-box', ffOneSection::TYPE_REPEATABLE_VARIATION)
				->addParam('section-name', __('One box', 'wien'));
			ff_load_section_options('animation-block', $s );
			$s->addElement(ffOneElement::TYPE_NEW_LINE);
			$s->addOption(ffOneOption::TYPE_ICON, 'icon', __('Icon', 'wien'), '');
			$s->addElement(ffOneElement::TYPE_NEW_LINE);
			$s->addOption(ffOneOption::TYPE_TEXT, 'title', __('Title', 'wien'), __('Developement', 'wien'));
			$s->addElement(ffOneElement::TYPE_NEW_LINE);
			$s->addOption(ffOneOption::TYPE_TEXTAREA, 'description', __('Description', 'wien'), __('Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.', 'wien'));
			$s->addElement(ffOneElement::TYPE_NEW_LINE);
			$s->addOption(ffOneOption::TYPE_TEXT, 'link', __('Link', 'wien'), '#');
			$s->endSection();
		$s->endSection();
	$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

	$s->addElement( ffOneElement::TYPE_TABLE_END );
$s->endSection();

################################################################################
# BOXES WITH ICONS END
################################################################################

