<?php
/**
 * @var $s ffOneStructure
 */

################################################################################
# WHO WE ARE START
################################################################################

$s->startSection('who-we-are-with-slider', ffOneSection::TYPE_REPEATABLE_VARIATION)
    ->addParam('section-name', __('Who we are with slider', 'wien'))
    ->addParam('hide-default', true)
    ->addParam('advanced-picker-menu-title', __('Common', 'wien'))
    ->addParam('advanced-picker-menu-id', 'common')
    ->addParam('advanced-picker-section-image', ff_get_section_preview_image_url('who-we-are-with-slider'));

    $s->addElement( ffOneElement::TYPE_TABLE_START );

    $s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Preview', 'wien'));
    $s->addElement(ffOneElement::TYPE_HTML,'','<img src="'.ff_get_section_preview_image_url('who-we-are-with-slider').'" width="250">');
    $s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

    $s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Section Wrappers Options', 'wien'));
        ff_load_section_options('section-fullwidth-wrapper-block', $s);
        ff_load_section_options('section-boxed-wrapper-block', $s);
    $s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

    $s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Heading', 'wien'));
        ff_load_section_options( 'heading-wrapped-block', $s);
    $s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

    $s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Who we are', 'wien'));

    $s->addElement(ffOneElement::TYPE_NEW_LINE);

        $s->startSection('one-text');
            $s->addOption(ffOneOption::TYPE_TEXTAREA, 'main', __('Main text', 'wien'), __('Lorem ipsum dolor sit amet, consectetur adipis cing elit. Praesent at risus ac velit posuere lobo rtis. Vivamus aliquet eget dui non posuere.', 'wien'));
            $s->addElement(ffOneElement::TYPE_NEW_LINE);
        $s->endSection();


    $s->addElement( ffOneElement::TYPE_TABLE_DATA_END);

    $s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Content Slider', 'wien'));

    $s->startSection('slider', ffOneSection::TYPE_REPEATABLE_VARIABLE);

        $s->startSection('one-icon', ffOneSection::TYPE_REPEATABLE_VARIATION)
            ->addParam('section-name', __('One Icon Box', 'wien'));

            $s->addOption(ffOneOption::TYPE_ICON, 'icon', __('Icon', 'wien'), 'ff-font-flaticon-mat icon-levels1');
            $s->addElement(ffOneElement::TYPE_NEW_LINE);
            $s->addOption(ffOneOption::TYPE_TEXTAREA, 'description', __('Description', 'wien'), __('Etiam libero est, sodales eu arcu id, finibus facilisis dui. Aenean finibus finibus nibh, et commodo metus tempor vitae. Duis enim augue, consectetur non ipsum at, cons ectetur imperdiet tellus.', 'wien'));
            $s->addElement(ffOneElement::TYPE_NEW_LINE);

        $s->endSection();

    $s->endSection();


    $s->addElement( ffOneElement::TYPE_TABLE_DATA_END);

    $s->addElement( ffOneElement::TYPE_TABLE_END );
$s->endSection();

################################################################################
# WHO WE ARE END
################################################################################