<?php
/**
 * @var $s ffOneStructure
 * @var $params array
 */

$color_type = 'section-w';
if( isSet( $params['color-type']) ){
	$color_type = $params['color-type'];
}

$s->startSection('section-fullwidth-wrapper');
	$s->addElement(ffOneElement::TYPE_TOGGLE_BOX_START, '', __('Section Fullwidth Wrapper', 'wien'));

		$s->addElement( ffOneElement::TYPE_TABLE_START );

/**********************************************************************************************************************/
/* GENERAL - ID, DARK / WHITE
/**********************************************************************************************************************/

			$s->addElement(ffOneElement::TYPE_TABLE_DATA_START, '', __('General', 'wien'));
				$s->startSection('general');
					$s->addOption( ffOneOption::TYPE_TEXT, 'id', __('Section ID ', 'wien'), '' );
					$s->addElement( ffOneElement::TYPE_HTML, '', __(' <span class="description">Option is used for linking. Leave blank for no ID.</span>', 'wien'));

					$s->addElement( ffOneElement::TYPE_NEW_LINE );
					$s->addOption( ffOneOption::TYPE_SELECT, 'color-type', __('Color type', 'wien'), $color_type)
						->addSelectValue(__('Light BG / Dark text', 'wien'), '')
						->addSelectValue(__('Dark BG / Light text', 'wien'), 'dark-bg')
						;
				$s->endSection();
			$s->addElement(ffOneElement::TYPE_TABLE_DATA_END);


/**********************************************************************************************************************/
/* MARGIN
/**********************************************************************************************************************/

			$s->addElement(ffOneElement::TYPE_TABLE_DATA_START, '', __('Margin', 'wien'));
				$s->startSection('margin');

					$s->addOption( ffOneOption::TYPE_SELECT, 'top', __('Top &nbsp;', 'wien'), '')
						->addSelectValue('Default', '')
						->addSelectValue('0', '0')
						->addSelectNumberRange(5, 150, 5)
						;
					$s->addElement( ffOneElement::TYPE_HTML, '', __(' px', 'wien') );

					$s->addElement( ffOneElement::TYPE_NEW_LINE );

					$s->addOption( ffOneOption::TYPE_SELECT, 'bottom', __('Bottom &nbsp;', 'wien'), '')
						->addSelectValue('Default', '')
						->addSelectValue('0', '0')
						->addSelectNumberRange(5, 150, 5)
						;
					$s->addElement( ffOneElement::TYPE_HTML, '', __(' px', 'wien') );

				$s->endSection();
			$s->addElement(ffOneElement::TYPE_TABLE_DATA_END);

/**********************************************************************************************************************/
/* PADDING
/**********************************************************************************************************************/

			$s->addElement(ffOneElement::TYPE_TABLE_DATA_START, '', __('Padding', 'wien'));
				$s->startSection('padding');

					$s->addOption( ffOneOption::TYPE_SELECT, 'top', __('Top &nbsp;', 'wien'), '')
						->addSelectValue('Default', '')
						->addSelectValue('0', '0')
						->addSelectNumberRange(5, 150, 5)
						->addSelectNumberRange(160, 300, 10)
						;
					$s->addElement( ffOneElement::TYPE_HTML, '', __(' px', 'wien') );

					$s->addElement( ffOneElement::TYPE_NEW_LINE );

					$s->addOption( ffOneOption::TYPE_SELECT, 'bottom', __('Bottom &nbsp;', 'wien'), '')
						->addSelectValue('Default', '')
						->addSelectValue('0', '0')
						->addSelectNumberRange(5, 150, 5)
						->addSelectNumberRange(160, 300, 10)
						;
					$s->addElement( ffOneElement::TYPE_HTML, '', __(' px', 'wien') );

				$s->endSection();
			$s->addElement(ffOneElement::TYPE_TABLE_DATA_END);

/**********************************************************************************************************************/
/* BACKGROUND
/**********************************************************************************************************************/

			ff_load_section_options( 'section-background-block', $s);

		$s->addElement( ffOneElement::TYPE_TABLE_END );

	$s->addElement(ffOneElement::TYPE_TOGGLE_BOX_END);
$s->endSection();