<?php
/**
 * @var $s ffOneStructure
 */

################################################################################
/* Blog Archive Columns
/**********************************************************************************************************************/

$s->startSection('blog-archive-columns', ffOneSection::TYPE_REPEATABLE_VARIATION)
	->addParam('section-name', __('Blog Archive Columns', 'wien'))
	->addParam('hide-default', true)

	->addParam('advanced-picker-menu-title', __('Blog', 'wien'))
	->addParam('advanced-picker-menu-id', 'blog')
	->addParam('advanced-picker-section-image', ff_get_section_preview_image_url('blog-archive-columns'));


	$s->addElement( ffOneElement::TYPE_TABLE_START );

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Preview', 'wien'));
			$s->addElement(ffOneElement::TYPE_HTML,'','<img src="'.ff_get_section_preview_image_url('blog-archive-columns').'" width="250">');
		$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Section Wrappers Options', 'wien'));
			ff_load_section_options('section-fullwidth-wrapper-block', $s);
			ff_load_section_options('section-boxed-wrapper-block', $s);
		$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Meta', 'wien'));
			ff_load_section_options( 'blog-meta-block', $s);
		$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('General', 'wien'));

			$s->addOption( ffOneOption::TYPE_TEXT, 'number-of-posts', __('Number of posts', 'wien'), '0');
			$s->addElement( ffOneElement::TYPE_DESCRIPTION, '', __('Set how many posts should be rendered. This does not influence WP loop (use our Fresh Custom Loops plugin for that)', 'wien'));
			$s->addElement( ffOneElement::TYPE_NEW_LINE );

			$s->addOption(ffOneOption::TYPE_SELECT, 'number-of-columns', __('Number of columns', 'wien'), 3)
				->addSelectNumberRange(1,8)
				;
			$s->addElement( ffOneElement::TYPE_NEW_LINE );

			$s->addOption(ffOneOption::TYPE_CHECKBOX, 'readmore-show', __('Show Read More', 'wien'), 1);
			$s->addElement( ffOneElement::TYPE_NEW_LINE );

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Button', 'wien'));
			ff_load_section_options('button-block', $s);
		$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Categories', 'wien'));
			ff_load_section_options('loop-influence-post-block', $s );
		$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Pagination', 'wien'));
		ff_load_section_options('pagination-block', $s );
		$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

	$s->addElement( ffOneElement::TYPE_TABLE_END );
$s->endSection();
