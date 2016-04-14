<?php
/**
 * @var $s ffOneStructure
 */

################################################################################
/* PORTFOLIO ARCHIVE MASONRY START
/**********************************************************************************************************************/

$s->startSection('portfolio-archive-masonry', ffOneSection::TYPE_REPEATABLE_VARIATION)
    ->addParam('section-name', __('Portfolio Archive Masonry', 'wien'))
    ->addParam('hide-default', true)

	->addParam('advanced-picker-menu-title', __('Portfolio', 'wien'))
	->addParam('advanced-picker-menu-id', 'portfolio')
    ->addParam('advanced-picker-section-image', ff_get_section_preview_image_url('portfolio-archive-masonry'));


	$s->addElement( ffOneElement::TYPE_TABLE_START );

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Preview', 'wien'));
			$s->addElement(ffOneElement::TYPE_HTML,'','<img src="'.ff_get_section_preview_image_url('portfolio-archive-masonry').'" width="250">');
		$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Section Fullwidth Wrapper', 'wien'));
			ff_load_section_options('section-fullwidth-wrapper-block', $s);
		$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );


		$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Boxed Filterable Tags Panel', 'wien'));
			$s->addOption( ffOneOption::TYPE_CHECKBOX, 'show-filterable', __('Show Filterable panel', 'wien'), 1);
			$s->addElement( ffOneElement::TYPE_NEW_LINE );
			$s->startSection('filterset');
				ff_load_section_options('section-boxed-wrapper-block', $s);
			$s->endSection();
		$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Boxed Portfolio Items', 'wien'));
			$s->startSection('portfolioset');
				$s->addOption( ffOneOption::TYPE_CHECKBOX, 'is-boxed', __('Is Boxed Section', 'wien'), 0);
				ff_load_section_options('section-boxed-wrapper-block', $s);
			$s->endSection();
		$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Featured Image', 'wien'));

            ff_load_section_options('portfolio-featured-image-block', $s);

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('General', 'wien'));
			$s->addOption(ffOneOption::TYPE_SELECT, 'linkTitle', __('Title points to', 'wien'), 'button')
					->addSelectValue(__('Specified in portfolio single (item or external link)', 'wien'), 'button')
					->addSelectValue(__('Nowhere', 'wien'), 'nowhere')
					;
			$s->addElement( ffOneElement::TYPE_NEW_LINE );

			$s->addOption( ffOneOption::TYPE_TEXT, 'number-of-posts', __('Number of posts', 'wien'), 0);
			$s->addElement( ffOneElement::TYPE_DESCRIPTION,'', __('Leave 0 for show all posts. Adjust better via Fresh Custom Loops plugin (delivered with this theme for free) ', 'wien'));
			$s->addElement( ffOneElement::TYPE_NEW_LINE );

			$s->addOption( ffOneOption::TYPE_CHECKBOX, 'has-spaces', __('Items have padding', 'wien'), 1);
			$s->addElement( ffOneElement::TYPE_NEW_LINE );

			$s->addOption( ffOneOption::TYPE_TEXT, 'trans-button-all', __('All the work (tag filter button)', 'wien'), __('All the work', 'wien'));
			$s->addElement( ffOneElement::TYPE_NEW_LINE );

			$s->addOption( ffOneOption::TYPE_SELECT, 'number-of-columns', __('Number of columns', 'wien'), '3')
			    ->addSelectNumberRange(1,8)
			;
			$s->addElement( ffOneElement::TYPE_NEW_LINE );


		$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Categories', 'wien'));
			ff_load_section_options('loop-influence-portfolio-block', $s );
		$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

	$s->addElement( ffOneElement::TYPE_TABLE_END );
$s->endSection();
