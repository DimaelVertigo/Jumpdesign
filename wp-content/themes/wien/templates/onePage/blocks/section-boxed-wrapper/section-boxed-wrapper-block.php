<?php
/**
 * @var $s ffOneStructure
 */

$s->startSection('section-boxed-wrapper');
	$s->addElement(ffOneElement::TYPE_TOGGLE_BOX_START, '', __('Section Boxed Wrapper', 'wien'));

		$s->addElement( ffOneElement::TYPE_TABLE_START );

			$s->addElement(ffOneElement::TYPE_TABLE_DATA_START, '', __('Padding', 'wien'));
				$s->startSection('padding');

						$s->addOption( ffOneOption::TYPE_SELECT, 'top', __('Top &nbsp;', 'wien'), 'default')
							->addSelectValue(__('Default', 'wien'), 'default')
							->addSelectValue('0', '0')
							->addSelectNumberRange(5, 150, 5)
							;
						$s->addElement( ffOneElement::TYPE_HTML, '', __(' px', 'wien') );

						$s->addElement( ffOneElement::TYPE_NEW_LINE );

						$s->addOption( ffOneOption::TYPE_SELECT, 'bottom', __('Bottom &nbsp;', 'wien'), 'default')
							->addSelectValue(__('Default', 'wien'), 'default')
							->addSelectValue('0', '0')
							->addSelectNumberRange(5, 150, 5)
							;
						$s->addElement( ffOneElement::TYPE_HTML, '', ' px' );

					$s->endSection();
				$s->addElement(ffOneElement::TYPE_TABLE_DATA_END);

			ff_load_section_options( 'section-background-block', $s);

		$s->addElement( ffOneElement::TYPE_TABLE_END );

	$s->addElement(ffOneElement::TYPE_TOGGLE_BOX_END);
$s->endSection();