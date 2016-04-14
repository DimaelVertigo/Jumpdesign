<?php
/**
 * @var $s ffOneStructure
 */

$s->startSection('social-links', ffOneSection::TYPE_REPEATABLE_VARIABLE );
	$s->startSection( 'link', ffOneSection::TYPE_REPEATABLE_VARIATION )->addParam('section-name', __('Social Link Button', 'wien') );

		$s->addOption( ffOneOption::TYPE_ICON, 'icon', '', 'ff-font-awesome4 icon-facebook');
		$s->addElement( ffOneElement::TYPE_NEW_LINE );
		$s->addElement( ffOneElement::TYPE_NEW_LINE );

		ff_load_section_options(
			'color-attr',
			$s, array(
				'name' => 'color'
				, 'title' => 'Color'
				, 'default' => ''
		));
		$s->addElement( ffOneElement::TYPE_NEW_LINE );

		$s->addOption( ffOneOption::TYPE_SELECT, 'shape', __('Shape', 'wien'), 'circle')
				->addSelectValue( __('No Shape', 'wien'), 'just icon' , '' )
				->addSelectValue( __('Circle', 'wien') , 'circle' )
				->addSelectValue( __('Square', 'wien') , 'square' )
			;
		$s->addElement( ffOneElement::TYPE_NEW_LINE );

		$s->addOption( ffOneOption::TYPE_CHECKBOX, 'show-tooltip', __('Show Tooltip&nbsp;', 'wien'), 1);
		$s->addOption( ffOneOption::TYPE_TEXT, 'title', __('Text', 'wien'), __('Find us on Facebook', 'wien'))
			->addParam('class', 'edit-repeatable-item-title');
		$s->addElement( ffOneElement::TYPE_NEW_LINE );

		$s->addOption( ffOneOption::TYPE_TEXT, 'url', __('URL', 'wien'), '//www.facebook.com/freshfacethemes');
		$s->addElement( ffOneElement::TYPE_NEW_LINE );

		$s->addOption(ffOneOption::TYPE_SELECT, 'target', __('Open in', 'wien'), '_blank')
			->addSelectValue(__('Same Window', 'wien'), '')
			->addSelectValue(__('New Window', 'wien'), '_blank')
		;

	$s->endSection();
$s->endSection();