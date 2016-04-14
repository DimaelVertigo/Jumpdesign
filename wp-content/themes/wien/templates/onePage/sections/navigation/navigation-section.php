<?php
/**
 * @var $s ffOneStructure
 */

################################################################################
# NAVIGATION START
################################################################################

$s->startSection('navigation', ffOneSection::TYPE_REPEATABLE_VARIATION)
	->addParam('section-name', __('Header - Logo, Menu, Search', 'wien'))
	->addParam('hide-default', true)

	->addParam('advanced-picker-menu-title', __('Header', 'wien'))
	->addParam('advanced-picker-menu-id', 'header')
	->addParam('advanced-picker-section-image', ff_get_section_preview_image_url('navigation'));


	$s->addElement( ffOneElement::TYPE_TABLE_START );

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Preview', 'wien'));
			$s->addElement(ffOneElement::TYPE_HTML,'','<img src="'.ff_get_section_preview_image_url('navigation').'" width="250">');
		$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );


		$s->startSection('logo');

			$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Desktop Logo', 'wien'));
				$s->addOption( ffOneOption::TYPE_IMAGE, 'image', __('Desktop Logo', 'wien') );
				$s->addElement( ffOneElement::TYPE_NEW_LINE );
				$s->addOption( ffOneOption::TYPE_CHECKBOX, 'is_retina', __('This logo image is in retina resolution', 'wien'), 1);
			$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

			$s->startSection('tablet');
				$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Tablet Logo', 'wien'));
				$s->addOption( ffOneOption::TYPE_IMAGE, 'image', __('Tablet Logo', 'wien') );
				$s->addElement( ffOneElement::TYPE_NEW_LINE );
				$s->addOption( ffOneOption::TYPE_CHECKBOX, 'is_retina', __('This logo image is in retina resolution', 'wien'), 1);
				$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );
			$s->endSection();

			$s->startSection('phone');
				$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Phone Logo', 'wien'));
				$s->addOption( ffOneOption::TYPE_IMAGE, 'image', __('Phone Logo', 'wien') );
				$s->addElement( ffOneElement::TYPE_NEW_LINE );
				$s->addOption( ffOneOption::TYPE_CHECKBOX, 'is_retina', __('This logo image is in retina resolution', 'wien'), 1);
				$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );
			$s->endSection();
		$s->endSection();

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('General', 'wien'));

			$s->addOption( ffOneOption::TYPE_NAVIGATION_MENU_SELECTOR, 'navigation-menu-id', __('Navigation Menu', 'wien'));

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Search', 'wien'));
			$s->startSection('search');
				$s->addOption( ffOneOption::TYPE_CHECKBOX, 'show', __('Show', 'wien'), 0);
				$s->addElement( ffOneElement::TYPE_NEW_LINE );
				$s->addOption( ffOneOption::TYPE_TEXT, 'placeholder', __('Placeholder', 'wien'), __('Enter your keyword here and then press enter...', 'wien'));
			$s->endSection();

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

	$s->addElement( ffOneElement::TYPE_TABLE_END );
$s->endSection();

################################################################################
# NAVIGATION END
################################################################################
