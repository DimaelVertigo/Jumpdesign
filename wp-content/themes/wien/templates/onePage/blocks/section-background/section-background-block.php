<?php
/** @var ffOneStructure $s */
$s->startSection('background');
	$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Background', 'wien'));

		$s->addOption( ffOneOption::TYPE_CHECKBOX, 'show', __('Show', 'wien'), 0);
		$s->addElement( ffOneElement::TYPE_NEW_LINE );
		$s->addElement( ffOneElement::TYPE_NEW_LINE );

		$s->startSection('backgrounds', ffOneSection::TYPE_REPEATABLE_VARIABLE );

			$s->startSection( 'background-color', ffOneSection::TYPE_REPEATABLE_VARIATION )->addParam('section-name', __('Background Color', 'wien'));
				$s->addElement( ffOneElement::TYPE_TABLE_START );

					$s->addOption( ffOneOption::TYPE_TEXT, 'color', '', '#FFFFFF')
						->addParam('class', 'ff-default-wp-color-picker');

					$s->addElement( ffOneElement::TYPE_NEW_LINE );

					$opt= $s->addOption( ffOneOption::TYPE_SELECT, 'opacity', __('Opacity', 'wien'), '');
					$opt->addSelectValue(__('Transparent (invisible)', 'wien'), '0');
					$opt->addSelectNumberRange( 0.1, 0.9, 0.1 );
					$opt->addSelectValue(__('No transparency', 'wien'), '');

				$s->addElement( ffOneElement::TYPE_TABLE_END );
			$s->endSection();

			$s->startSection( 'background-image', ffOneSection::TYPE_REPEATABLE_VARIATION )->addParam('section-name', __('Background Image', 'wien'))->addParam('hide-default', true);
				$s->addElement( ffOneElement::TYPE_TABLE_START );

					$s->addOption( ffOneOption::TYPE_IMAGE, 'image', __('Image', 'wien'));
					$s->addElement( ffOneElement::TYPE_NEW_LINE );

					$s->addOption( ffOneOption::TYPE_SELECT, 'fixed', __('Background attachment', 'wien'), '')
						->addSelectValue(__('Normal', 'wien'), '')
						->addSelectValue(__('Fixed background', 'wien'), '1');
					$s->addElement( ffOneElement::TYPE_NEW_LINE );

					$opt= $s->addOption( ffOneOption::TYPE_SELECT, 'opacity', __('Opacity', 'wien'), '');
					$opt->addSelectValue(__('Transparent (invisible)', 'wien'), '0');
					$opt->addSelectNumberRange( 0.1, 0.9, 0.1 );
					$opt->addSelectValue(__('No transparency', 'wien'), '');

				$s->addElement( ffOneElement::TYPE_TABLE_END );
			$s->endSection();

			$s->startSection( 'background-pattern', ffOneSection::TYPE_REPEATABLE_VARIATION )->addParam('section-name', __('Background Pattern Image', 'wien'))->addParam('hide-default', true);
				$s->addElement( ffOneElement::TYPE_TABLE_START );

					$s->addOption( ffOneOption::TYPE_IMAGE, 'image', __('Pattern Image', 'wien'));
					$s->addElement( ffOneElement::TYPE_NEW_LINE );

					$s->addOption( ffOneOption::TYPE_SELECT, 'fixed', __('Background attachment', 'wien'), '')
						->addSelectValue(__('Normal', 'wien'), '')
						->addSelectValue(__('Fixed background', 'wien'), '1');
					$s->addElement( ffOneElement::TYPE_NEW_LINE );

					$opt= $s->addOption( ffOneOption::TYPE_SELECT, 'opacity', __('Opacity', 'wien'), '');
					$opt->addSelectValue(__('Transparent (invisible)', 'wien'), '0');
					$opt->addSelectNumberRange( 0.1, 0.9, 0.1 );
					$opt->addSelectValue(__('No transparency', 'wien'), '');

				$s->addElement( ffOneElement::TYPE_TABLE_END );
			$s->endSection();

			$s->startSection( 'background-youtube-video', ffOneSection::TYPE_REPEATABLE_VARIATION )->addParam('section-name', __('Background YouTube Video', 'wien'))->addParam('hide-default', true);
				$s->addElement( ffOneElement::TYPE_TABLE_START );

					$s->addOption( ffOneOption::TYPE_TEXT_FULLWIDTH, 'url', __('URL', 'wien'), '');
					$s->addElement( ffOneElement::TYPE_HTML, '', __('<p class="description">In format: <code>https://www.youtube.com/watch?v=L83cTan6ESk</code></p>', 'wien'));
					$s->addElement( ffOneElement::TYPE_NEW_LINE );

					$opt= $s->addOption( ffOneOption::TYPE_SELECT, 'opacity', __('Opacity', 'wien'), '');
					$opt->addSelectValue(__('Transparent (invisible)', 'wien'), '0');
					$opt->addSelectNumberRange( 0.1, 0.9, 0.1 );
					$opt->addSelectValue(__('No transparency', 'wien'), '');

				$s->addElement( ffOneElement::TYPE_TABLE_END );
			$s->endSection();

		$s->endSection();

	$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );
$s->endSection();
