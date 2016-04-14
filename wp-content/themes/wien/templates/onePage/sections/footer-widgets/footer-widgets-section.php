<?php
/**
 * @var $s ffOneStructure
 */

################################################################################
# FOOTER SOCIAL START
################################################################################

$s->startSection('footer-widgets', ffOneSection::TYPE_REPEATABLE_VARIATION)
	->addParam('section-name', __('Footer Widgets', 'wien'))
	->addParam('hide-default', true)
	->addParam('advanced-picker-menu-title', __('Footer', 'wien'))
	->addParam('advanced-picker-menu-id', 'footer')
	->addParam('advanced-picker-section-image', ff_get_section_preview_image_url('footer-widgets'));

	$s->addElement( ffOneElement::TYPE_TABLE_START );

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Preview', 'wien'));
			$s->addElement(ffOneElement::TYPE_HTML,'','<img src="'.ff_get_section_preview_image_url('footer-widgets').'" width="250">');
		$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Section Wrappers Options', 'wien'));
			ff_load_section_options('section-fullwidth-wrapper-block', $s, array('color-type'=>'dark-bg'));
			ff_load_section_options('section-boxed-wrapper-block', $s);
		$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

		for( $i = 1; $i <= 4; $i ++ ) {

			$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', 'Footer #'.absint($i).' options');
				$s->startSection('footer-'.absint($i));
					$s->addOption(ffOneOption::TYPE_CHECKBOX, 'show-footer', 'Show Footer #'.absint($i), 1);
					$s->addElement( ffOneElement::TYPE_NEW_LINE );
					ff_load_section_options('bootstrap-columns-block', $s, array('sm' => 3));
				$s->endSection();



			$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );
		}

	$s->addElement( ffOneElement::TYPE_TABLE_END );
$s->endSection();

################################################################################
# FOOTER SOCIAL END
################################################################################


