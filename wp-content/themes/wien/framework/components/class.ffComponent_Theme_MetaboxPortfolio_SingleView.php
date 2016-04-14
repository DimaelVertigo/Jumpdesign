<?php

class ffComponent_Theme_MetaboxPortfolio_SingleView extends ffOptionsHolder {
	public function getOptions() {
		$s = $this->_getOnestructurefactory()->createOneStructure( 'aaa');

		$s->startSection('general');
			$s->addElement( ffOneElement::TYPE_TABLE_START );
				$s->addElement(ffOneElement::TYPE_TABLE_DATA_START, '', __('Front Image', 'wien'));
					$s->startSection('image');
						$s->addOption( ffOneOption::TYPE_CHECKBOX, 'fullwidth', __('Front image is fulwidth (overlays sidebar)', 'wien'), 0);
						$s->addElement(ffOneElement::TYPE_NEW_LINE );
					$s->endSection();
				$s->addElement(ffOneElement::TYPE_TABLE_DATA_END );

				$s->addElement(ffOneElement::TYPE_TABLE_DATA_START, '', __('Sidebar', 'wien'));
					$s->startSection('sidebar');
						$s->addOption( ffOneOption::TYPE_CHECKBOX, 'show', __('Show sidebar', 'wien'), 1);
						$s->addElement(ffOneElement::TYPE_NEW_LINE );


						$s->startSection( 'items', ffOneSection::TYPE_REPEATABLE_VARIABLE );
							$s->startSection('about', ffOneSection::TYPE_REPEATABLE_VARIATION)->addParam('section-name', __('About', 'wien'));
								$s->addOption( ffOneOption::TYPE_TEXT, 'title', __('Title', 'wien'), __('About Project', 'wien'));
								$s->addElement(ffOneElement::TYPE_NEW_LINE );
								$text = __('<p>Culpa eu et pariatur tempor est aliquip qui anim enim culpa magna laboris sint aliqua ad excepteur mollit.</p>', 'wien');
								$s->addOption( ffOneOption::TYPE_TEXTAREA, 'text', __('Text', 'wien'), $text);
							$s->endSection();

							$s->startSection('tools', ffOneSection::TYPE_REPEATABLE_VARIATION)->addParam('section-name', __('Tools', 'wien'));
								$s->addOption( ffOneOption::TYPE_TEXT, 'title', __('Title', 'wien'), __('Tools Used', 'wien'));
								$s->addElement(ffOneElement::TYPE_NEW_LINE );

								$s->startSection( 'skills', ffOneSection::TYPE_REPEATABLE_VARIABLE );
									$s->startSection('one-skill', ffOneSection::TYPE_REPEATABLE_VARIATION )->addParam('section-name', __('One Skill', 'wien'));
										$s->addOption( ffOneOption::TYPE_TEXT, 'title', __('Title', 'wien'), __('Photoshop', 'wien'));
										$s->addElement(ffOneElement::TYPE_NEW_LINE);
										$s->addOption( ffOneOption::TYPE_TEXT, 'percentage', __('Percentage', 'wien'), '75');
									$s->endSection();
								$s->endSection();
							$s->endSection();

							 $s->startSection('details', ffOneSection::TYPE_REPEATABLE_VARIATION)->addParam('section-name', __('Project Details', 'wien'));
								$s->addOption( ffOneOption::TYPE_TEXT, 'title', __('Title', 'wien'), __('Project Details', 'wien'));
								$s->addElement(ffOneElement::TYPE_NEW_LINE );

								$s->startSection( 'details', ffOneSection::TYPE_REPEATABLE_VARIABLE );
									$s->startSection('one-detail', ffOneSection::TYPE_REPEATABLE_VARIATION )->addParam('section-name', __('One Detail', 'wien'));
										$s->addOption( ffOneOption::TYPE_ICON, 'icon', __('Icon', 'wien'), '');
										$s->addElement(ffOneElement::TYPE_NEW_LINE);
										$s->addOption( ffOneOption::TYPE_TEXT, 'type', __('Type', 'wien'), __('Client', 'wien'));
										$s->addElement(ffOneElement::TYPE_NEW_LINE);
										$s->addOption( ffOneOption::TYPE_TEXT, 'value', __('Value', 'wien'), __('Google, Inc', 'wien'));
									$s->endSection();
								$s->endSection();

								$s->addElement(ffOneElement::TYPE_TABLE_START );
									ff_load_section_options( 'buttons-block', $s);
								$s->addElement(ffOneElement::TYPE_TABLE_END);

							$s->endSection();

						$s->endSection();
					$s->endSection();
				$s->addElement(ffOneElement::TYPE_TABLE_DATA_END );

				$s->addElement(ffOneElement::TYPE_TABLE_DATA_START, '', __('Related Projects', 'wien'));
					$s->startSection('related-projects');
						$s->addOption( ffOneOption::TYPE_CHECKBOX, 'show', __('Show Related Projects', 'wien'), 1);
						$s->addElement(ffOneElement::TYPE_NEW_LINE );
					$s->endSection();
				$s->addElement(ffOneElement::TYPE_TABLE_DATA_END );

			$s->addElement( ffOneElement::TYPE_TABLE_END );
		$s->endSection();
		return $s;
	}
}

