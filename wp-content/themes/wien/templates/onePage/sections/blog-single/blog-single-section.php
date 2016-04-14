<?php
/**
 * @var $s ffOneStructure
 */

################################################################################
/* Blog Single
/**********************************************************************************************************************/

$s->startSection('blog-single', ffOneSection::TYPE_REPEATABLE_VARIATION)
	->addParam('section-name', __('Blog Single', 'wien'))
	->addParam('hide-default', true)

	->addParam('advanced-picker-menu-title', __('Blog', 'wien'))
	->addParam('advanced-picker-menu-id', 'blog')
	->addParam('advanced-picker-section-image', ff_get_section_preview_image_url('blog-single'));


	$s->addElement( ffOneElement::TYPE_TABLE_START );

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Preview', 'wien'));
			$s->addElement(ffOneElement::TYPE_HTML,'','<img src="'.ff_get_section_preview_image_url('blog-single').'" width="250">');
		$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Section Wrappers Options', 'wien'));
			ff_load_section_options('section-fullwidth-wrapper-block', $s);
			ff_load_section_options('section-boxed-wrapper-block', $s);
		$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Meta', 'wien'));
			ff_load_section_options( 'blog-meta-block', $s);
		$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Author Box', 'wien'));
			$s->startSection('author-box');
				$s->addOption(ffOneOption::TYPE_CHECKBOX, 'show', __('Show author box', 'wien'), 1);
				$s->addElement(ffOneElement::TYPE_NEW_LINE );

				$s->addOption(ffOneOption::TYPE_TEXT, 'title', __('Title', 'wien'), __('About the Author', 'wien'));
				$s->addElement(ffOneElement::TYPE_NEW_LINE );

			$s->endSection();
		$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Sidebar', 'wien'));
				$s->addOption(ffOneOption::TYPE_SELECT, 'sidebar', __('Sidebar', 'wien'), 'right')
					->addSelectValue(__('None', 'wien'), 'none')
					->addSelectValue(__('Left', 'wien'), 'left')
					->addSelectValue(__('Right', 'wien'), 'right')
				;
		$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Comments List', 'wien'));
			ff_load_section_options( 'comments-list-block', $s);
		$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Comments Form', 'wien'));
			ff_load_section_options( 'comments-form-block', $s);
		$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );


	$s->addElement( ffOneElement::TYPE_TABLE_END );
$s->endSection();
