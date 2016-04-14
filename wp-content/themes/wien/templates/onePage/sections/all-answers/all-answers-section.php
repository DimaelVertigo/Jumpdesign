<?php
/**
 * @var $s ffOneStructure
 */

################################################################################
# ALL ANSWERS START
################################################################################
$s->startSection('all-answers', ffOneSection::TYPE_REPEATABLE_VARIATION)
	->addParam('section-name', __('All answers', 'wien'))
	->addParam('hide-default', true)
	->addParam('advanced-picker-menu-title', __('Common', 'wien'))
	->addParam('advanced-picker-menu-id', 'common')
	->addParam('advanced-picker-section-image', ff_get_section_preview_image_url('all-answers'));

	$s->addElement( ffOneElement::TYPE_TABLE_START );

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Preview', 'wien'));
			$s->addElement(ffOneElement::TYPE_HTML,'','<img src="'.ff_get_section_preview_image_url('all-answers').'" width="250">');
		$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Section Wrappers Options', 'wien'));
			ff_load_section_options('section-fullwidth-wrapper-block', $s);
			ff_load_section_options('section-boxed-wrapper-block', $s);
		$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Heading', 'wien'));
			ff_load_section_options( 'heading-wrapped-block', $s);
		$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('All answers', 'wien'));
			$s->startSection('answers', ffOneSection::TYPE_REPEATABLE_VARIABLE);
				$s->startSection('one-box', ffOneSection::TYPE_REPEATABLE_VARIATION)
					->addParam('section-name', __('Text box', 'wien'));
					ff_load_section_options( 'bootstrap-columns-block', $s, array('sm'=>4));
					ff_load_section_options('animation-block', $s );
					$s->addElement( ffOneElement::TYPE_NEW_LINE);
					$s->addOption(ffOneOption::TYPE_TEXT_FULLWIDTH, 'uptitle', __('Upper title', 'wien'), __('About the project', 'wien'));
					$s->addElement(ffOneElement::TYPE_NEW_LINE);
					$s->addElement( ffOneElement::TYPE_NEW_LINE);
					$s->addOption(ffOneOption::TYPE_TEXT_FULLWIDTH, 'title', __('Title', 'wien'), 'Lorem ipsum dolor sit amet, consectetur adipis cing elit. Praesent at risus ac velit posuere lobo rtis. Vivamus aliquet eget dui non posuere.');
					$s->addElement(ffOneElement::TYPE_NEW_LINE);
					$s->addOption(ffOneOption::TYPE_TEXTAREA, 'description', __('Description', 'wien'), 'Etiam libero est, sodales eu arcu id, finibus facilisis dui. Aenean finibus fin ibus nibh, et commodo metus tempor vitae dolor.');
				$s->endSection();


				$s->startSection('one-image', ffOneSection::TYPE_REPEATABLE_VARIATION)
					->addParam('section-name', __('Image box', 'wien'));
					ff_load_section_options( 'bootstrap-columns-block', $s, array('sm'=>4));
					ff_load_section_options('animation-block', $s );
					$s->addElement( ffOneElement::TYPE_NEW_LINE);
					ff_load_section_options('image-block', $s );
				$s->endSection();

				$s->startSection('one-icon', ffOneSection::TYPE_REPEATABLE_VARIATION)
					->addParam('section-name', 'One Icon Box');
						ff_load_section_options( 'bootstrap-columns-block', $s, array('sm'=>4));
						ff_load_section_options('animation-block', $s );
						$s->addElement(ffOneElement::TYPE_NEW_LINE);
						$s->addOption(ffOneOption::TYPE_ICON, 'icon', __('Icon', 'wien'), '');
						$s->addElement(ffOneElement::TYPE_NEW_LINE);
						$s->addOption(ffOneOption::TYPE_TEXTAREA, 'description', __('Description', 'wien'), 'Etiam libero est, sodales eu arcu id, finibus facilisis dui. Aenean finibus finibus nibh, et commodo metus tempor vitae. Duis enim augue, consectetur non ipsum at, cons ectetur imperdiet tellus.');
						$s->addElement(ffOneElement::TYPE_NEW_LINE);
				$s->endSection();

				$s->startSection('one-list', ffOneSection::TYPE_REPEATABLE_VARIATION)
					->addParam('section-name', __('One Bullet List', 'wien'));
						ff_load_section_options( 'bootstrap-columns-block', $s, array('sm'=>4));
						ff_load_section_options('animation-block', $s );
						$s->startSection('lines', ffOneSection::TYPE_REPEATABLE_VARIABLE );
							$s->startSection('one-field', ffOneSection::TYPE_REPEATABLE_VARIATION )->addParam('section-name', __('One Text Line', 'wien'));
							$s->addOption( ffOneOption::TYPE_TEXT_FULLWIDTH, 'text', __('Text', 'wien'), 'Lorem ipsum dolor sit amet');
							$s->endSection();
						$s->endSection();
					$s->addElement(ffOneElement::TYPE_NEW_LINE);
				$s->endSection();
			$s->endSection();


		$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

	$s->addElement( ffOneElement::TYPE_TABLE_END );
$s->endSection();

################################################################################
# ALL ANSWERS END
################################################################################
