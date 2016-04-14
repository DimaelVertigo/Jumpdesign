<?php
/**
 * @var $s ffOneStructure
 */

################################################################################
# PRICING MODELS START
################################################################################
$s->startSection('pricing-tables', ffOneSection::TYPE_REPEATABLE_VARIATION)
	->addParam('section-name', __('Pricing tables', 'wien'))
	->addParam('hide-default', true)
	->addParam('advanced-picker-menu-title', __('Common', 'wien'))
	->addParam('advanced-picker-menu-id', 'common')
	->addParam('advanced-picker-section-image', ff_get_section_preview_image_url('pricing-tables'));

	$s->addElement( ffOneElement::TYPE_TABLE_START );

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Preview', 'wien'));
			$s->addElement(ffOneElement::TYPE_HTML,'','<img src="'.ff_get_section_preview_image_url('pricing-tables').'" width="250">');
		$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Section Wrappers Options', 'wien'));
			ff_load_section_options('section-fullwidth-wrapper-block', $s);
			ff_load_section_options('section-boxed-wrapper-block', $s);
		$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Heading', 'wien'));
		ff_load_section_options( 'heading-wrapped-block', $s);
		$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Pricing table', 'wien'));
			$s->startSection('tables', ffOneSection::TYPE_REPEATABLE_VARIABLE);
				$s->startSection('one-table', ffOneSection::TYPE_REPEATABLE_VARIATION)
					->addParam('section-name', __('One table', 'wien'));
						ff_load_section_options( 'bootstrap-columns-block', $s, array('sm'=>4));
						$s->addElement(ffOneElement::TYPE_NEW_LINE);
						ff_load_section_options('animation-block', $s);
						$s->addElement(ffOneElement::TYPE_NEW_LINE);
						$s->addOption(ffOneOption::TYPE_ICON, 'icon', __('Icon', 'wien'), '');
						$s->addElement(ffOneElement::TYPE_NEW_LINE);
						$s->addOption(ffOneOption::TYPE_TEXT, 'title', __('Title', 'wien'), __('Starter', 'wien'));
						$s->addElement(ffOneElement::TYPE_NEW_LINE);
						$s->addOption(ffOneOption::TYPE_TEXT, 'price', __('Price', 'wien'), '25');
						$s->addElement(ffOneElement::TYPE_NEW_LINE);
						$s->addOption(ffOneOption::TYPE_TEXT, 'currency', __('Currency', 'wien'), '$');
						$s->addElement(ffOneElement::TYPE_NEW_LINE);
						$s->addOption(ffOneOption::TYPE_TEXT, 'time-period', __('Time period', 'wien'), __('per month', 'wien'));
						$s->addElement(ffOneElement::TYPE_NEW_LINE);
						$s->startSection('rows', ffOneSection::TYPE_REPEATABLE_VARIABLE);
							$s->startSection('one-row', ffOneSection::TYPE_REPEATABLE_VARIATION)
								->addParam('section-name', __('One row', 'wien'));
								$s->addOption(ffOneOption::TYPE_TEXT, 'item', __('Item', 'wien'), __('2 domain names', 'wien'));
							$s->endSection();
						$s->endSection();

						$s->addElement(ffOneElement::TYPE_NEW_LINE);

						$s->addElement(ffOneElement::TYPE_TOGGLE_BOX_START, '', __('Button', 'wien'));
						ff_load_section_options('button-block', $s);
						$s->addElement(ffOneElement::TYPE_TOGGLE_BOX_END );

				$s->endSection();
			$s->endSection();
		$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );
	$s->addElement( ffOneElement::TYPE_TABLE_END );
$s->endSection();

################################################################################
# PRICING MODELS END
################################################################################
