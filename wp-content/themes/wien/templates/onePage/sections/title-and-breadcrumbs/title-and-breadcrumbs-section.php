<?php
/**
 * @var $s ffOneStructure
 */

################################################################################
# TITLE AND BREADCRUMBS START
################################################################################

$s->startSection('title-and-breadcrumbs', ffOneSection::TYPE_REPEATABLE_VARIATION)
    ->addParam('section-name', __('Title and Breadcrumbs', 'wien'))
    ->addParam('hide-default', true)
    ->addParam('advanced-picker-menu-title', __('Header', 'wien'))
    ->addParam('advanced-picker-menu-id', 'header')
    ->addParam('advanced-picker-section-image', ff_get_section_preview_image_url('title-and-breadcrumbs'));

    $s->addElement( ffOneElement::TYPE_TABLE_START );

    $s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Section Wrappers Options', 'wien'));
        ff_load_section_options('section-fullwidth-wrapper-block', $s, array('color-type'=>'dark-bg'));
        ff_load_section_options('section-boxed-wrapper-block', $s);
    $s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

    $s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Preview', 'wien'));
    $s->addElement(ffOneElement::TYPE_HTML,'','<img src="'.ff_get_section_preview_image_url('title-and-breadcrumbs').'" width="250">');
    $s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

    $s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Title', 'wien'));
        $s->addOption( ffOneOption::TYPE_CHECKBOX, 'show-title', __('Show title', 'wien'), 1);
        $s->addElement( ffOneElement::TYPE_NEW_LINE );

        $s->startSection('translation');

            $s->addOption( ffOneOption::TYPE_TEXT, 'title-front-page', __('Front Page', 'wien'), get_bloginfo('name') );
            $s->addElement( ffOneElement::TYPE_NEW_LINE );
            $s->addOption( ffOneOption::TYPE_TEXT, 'title-posts-page', __('Posts Page', 'wien'), __('Blog', 'wien') );
            $s->addElement( ffOneElement::TYPE_NEW_LINE );
            $s->addOption( ffOneOption::TYPE_TEXT, 'title-404', '404', __('404 Not Found', 'wien') );
            $s->addElement( ffOneElement::TYPE_NEW_LINE );
            $s->addElement( ffOneElement::TYPE_NEW_LINE );

            $s->addOption( ffOneOption::TYPE_TEXT, 'title-post', __('Post', 'wien'), '%s' );
            $s->addElement( ffOneElement::TYPE_NEW_LINE );
            $s->addOption( ffOneOption::TYPE_TEXT, 'title-category', __('Category', 'wien'), __('Category %s', 'wien') );
            $s->addElement( ffOneElement::TYPE_NEW_LINE );
            $s->addOption( ffOneOption::TYPE_TEXT, 'title-tag', 'Tag', __('Tagged as %s', 'wien') );
            $s->addElement( ffOneElement::TYPE_NEW_LINE );

            $s->addOption( ffOneOption::TYPE_TEXT, 'title-author', __('Author', 'wien'), __('Author %s', 'wien') );
            $s->addElement( ffOneElement::TYPE_NEW_LINE );
            $s->addOption( ffOneOption::TYPE_TEXT, 'title-search', __('Search', 'wien'), __('Search results for: %s', 'wien') );
            $s->addElement( ffOneElement::TYPE_NEW_LINE );
            $s->addElement( ffOneElement::TYPE_NEW_LINE );

            $s->addOption( ffOneOption::TYPE_TEXT, 'title-day', __('Day', 'wien'), __('Day %s', 'wien') );
            $s->addOption( ffOneOption::TYPE_TEXT, 'title-day-format', __('Day Format', 'wien'), 'F j, Y' );
            $s->addElement( ffOneElement::TYPE_DESCRIPTION, '', __('For right date format please see <a href="//php.net/manual/en/function.date.php" target="_blank">Date PHP function manual</a>.', 'wien') );
            $s->addElement( ffOneElement::TYPE_NEW_LINE );

            $s->addOption( ffOneOption::TYPE_TEXT, 'title-month', __('Month', 'wien'), __('Month %s', 'wien') );
            $s->addOption( ffOneOption::TYPE_TEXT, 'title-month-format', __('Month Format', 'wien'), 'F Y' );
            $s->addElement( ffOneElement::TYPE_DESCRIPTION, '', __('For right date format please see <a href="//php.net/manual/en/function.date.php" target="_blank">Date PHP function manual</a>.', 'wien') );
            $s->addElement( ffOneElement::TYPE_NEW_LINE );

            $s->addOption( ffOneOption::TYPE_TEXT, 'title-year', __('Year', 'wien'), __('Year %s', 'wien') );
            $s->addOption( ffOneOption::TYPE_TEXT, 'title-year-format', __('Year Format', 'wien'), 'Y' );
            $s->addElement( ffOneElement::TYPE_DESCRIPTION, '', __('For right date format please see <a href="//php.net/manual/en/function.date.php" target="_blank">Date PHP function manual</a>.', 'wien') );

        $s->endSection();
    $s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

    $s->startSection('breadcrumbs');
        $s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Breadcrumbs', 'wien'));
            $s->addOption( ffOneOption::TYPE_CHECKBOX, 'show', __('Show', 'wien'), 1);
            $s->addElement( ffOneElement::TYPE_NEW_LINE );
            $s->addOption( ffOneOption::TYPE_TEXT, 'homepage', __('Text Homepage', 'wien'), __('Home', 'wien'));
        $s->addElement( ffOneElement::TYPE_TABLE_DATA_END );
    $s->endSection();

    $s->addElement( ffOneElement::TYPE_TABLE_END );
$s->endSection();

################################################################################
# GENERAL SERVICE END
################################################################################