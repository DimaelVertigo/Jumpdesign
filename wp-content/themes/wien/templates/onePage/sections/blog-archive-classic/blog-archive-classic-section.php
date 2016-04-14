<?php
/**
 * @var $s ffOneStructure
 */

################################################################################
/* Blog Classic Archive
/**********************************************************************************************************************/

$s->startSection('blog-archive-classic', ffOneSection::TYPE_REPEATABLE_VARIATION)
	->addParam('section-name', __('Blog Archive Classic', 'wien'))
	->addParam('hide-default', true)

	->addParam('advanced-picker-menu-title', __('Blog', 'wien'))
	->addParam('advanced-picker-menu-id', 'blog')
	->addParam('advanced-picker-section-image', ff_get_section_preview_image_url('blog-archive-classic'));


	$s->addElement( ffOneElement::TYPE_TABLE_START );

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Preview', 'wien'));
			$s->addElement(ffOneElement::TYPE_HTML,'','<img src="'.ff_get_section_preview_image_url('blog-archive-classic').'" width="250">');
		$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Section Wrappers Options', 'wien'));
			ff_load_section_options('section-fullwidth-wrapper-block', $s);
			ff_load_section_options('section-boxed-wrapper-block', $s);
		$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Meta', 'wien'));
			ff_load_section_options( 'blog-meta-block', $s);
		$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('General', 'wien'));

			$s->addOption(ffOneOption::TYPE_SELECT, 'sidebar', __('Sidebar', 'wien'), 'right')
				->addSelectValue(__('None', 'wien'), 'none')
				->addSelectValue(__('Left', 'wien'), 'left')
				->addSelectValue(__('Right', 'wien'), 'right')
				;
			$s->addElement( ffOneElement::TYPE_NEW_LINE );

			$s->addOption(ffOneOption::TYPE_CHECKBOX, 'readmore-show', __('Show Read More', 'wien'), 1);
			$s->addElement( ffOneElement::TYPE_NEW_LINE );

			$s->addOption( ffOneOption::TYPE_TEXT, 'number-of-posts', __('Number of posts', 'wien'), '0');
			$s->addElement( ffOneElement::TYPE_DESCRIPTION, '', __('Set how many posts should be rendered. This does not influence WP loop (use our Fresh Custom Loops plugin for that)', 'wien'));
			$s->addElement( ffOneElement::TYPE_NEW_LINE );

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Button', 'wien'));
			ff_load_section_options('button-block', $s);
		$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Categories', 'wien'));
			ff_load_section_options('loop-influence-post-block', $s );
		$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Search', 'wien'));
				$s->addOption( ffOneOption::TYPE_TEXTAREA, 'search-not-found', __('Nothing found in search','wien'), __('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'wien') );
				$s->addElement( ffOneElement::TYPE_DESCRIPTION, '', __('This is applied only if this section is used for search.', 'wien') );
		$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

	$s->addElement( ffOneElement::TYPE_TABLE_END );




$s->endSection();
