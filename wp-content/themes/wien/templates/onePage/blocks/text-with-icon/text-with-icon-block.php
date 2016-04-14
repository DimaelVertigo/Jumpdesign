<?php
/**
 * @var $s ffOneStructure
 */

$s->addElement( ffOneElement::TYPE_TABLE_START );
	$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Icon', 'wien'));

		$s->addOption( ffOneOption::TYPE_ICON, 'icon', '', '');
		$s->addElement( ffOneElement::TYPE_NEW_LINE );

		ff_load_section_options(
			'color-attr',
			$s, array(
				'name' => 'icon-background'
				, 'title' => 'Background'
				, 'default' => 'blue'
		));

		$s->addElement( ffOneElement::TYPE_NEW_LINE );

		$s->addOption( ffOneOption::TYPE_SELECT, 'icon-size', __('Size', 'wien'), '')
				->addSelectValue( __('Small', 'wien') , 'small' )
				->addSelectValue( __('Default', 'wien') , '' )
				->addSelectValue( __('Medium', 'wien') , 'medium' )
				->addSelectValue( __('Large', 'wien') , 'large' )
			;

		$s->addElement( ffOneElement::TYPE_NEW_LINE );

		$s->addOption( ffOneOption::TYPE_SELECT, 'shape', __('Shape', 'wien'), 'circle')
				->addSelectValue( __('No Shape, just icon', 'wien') , '' )
				->addSelectValue( __('Circle', 'wien') , 'circle' )
				->addSelectValue( __('Square', 'wien') , 'square' )
			;

	$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

	$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Text', 'wien'));

		$s->addOption( ffOneOption::TYPE_TEXT, 'title', __('Title', 'wien'), __('Global Company', 'wien'))
			->addParam('class', 'edit-repeatable-item-title');
		$s->addElement( ffOneElement::TYPE_NEW_LINE );

		$s->addOption( ffOneOption::TYPE_SELECT, 'title-size', __('Title Size', 'wien'), '4')
				->addSelectValue( __('Small h5', 'wien') , '5' )
				->addSelectValue( __('Default h4', 'wien') , '4' )
				->addSelectValue( __('Medium h3', 'wien') , '3' )
				->addSelectValue( __('Large h2', 'wien') , '2' )
			;

		$s->addOption( ffOneOption::TYPE_TEXTAREA, 'description', __('Description', 'wien'), __('Lorem ipsum Eu tempor anim Excepteur consectetur cillum tempor id exercitation nostrud do consequat sunt in consectetur commodo in exercitation.', 'wien') );

	$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

	$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Button', 'wien'));
		$s->addOption( ffOneOption::TYPE_CHECKBOX, 'show-button', __('Show button', 'wien'), 1);
	$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );


	ff_load_section_options( 'button-block', $s);

$s->addElement( ffOneElement::TYPE_TABLE_END );

