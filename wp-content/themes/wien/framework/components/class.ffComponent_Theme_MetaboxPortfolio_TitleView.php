<?php

class ffComponent_Theme_MetaboxPortfolio_TitleView extends ffOptionsHolder {
	public function getOptions() {
		$s = $this->_getOnestructurefactory()->createOneStructure( 'aaa');



		$s->startSection('general');
			$s->addElement( ffOneElement::TYPE_TABLE_START );

				ff_load_section_options( 'section-settings-block', $s);

				ff_load_section_options( 'section-background-block', $s);


				$s->startSection('page-title');
					$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Heading Title', 'wien'));
						$s->addOption( ffOneOption::TYPE_CHECKBOX, 'show-title', __('Show Title ', 'wien'), 1);
						$s->addElement( ffOneElement::TYPE_NEW_LINE );
						$s->addOption( ffOneOption::TYPE_CHECKBOX, 'is-custom-title', __('Use custom &nbsp; ', 'wien'), 0);
						$s->addOption( ffOneOption::TYPE_TEXT, 'title', '', __('Custom Page Title', 'wien'));
						$s->addElement( ffOneElement::TYPE_NEW_LINE );
					$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );


					$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );
					$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Subheading', 'wien'));

						$s->addOption( ffOneOption::TYPE_CHECKBOX, 'show-description', __('Show Description', 'wien'), 1);
						$s->addElement( ffOneElement::TYPE_NEW_LINE );
						$s->addOption( ffOneOption::TYPE_SELECT, 'description-style', __('Description style', 'wien'), 'lead')
								->addSelectValue(__('Smaller', 'wien'), '')
								->addSelectValue(__('Bigger', 'wien'), 'lead');
						$s->addElement( ffOneElement::TYPE_NEW_LINE );
						$s->addOption( ffOneOption::TYPE_TEXTAREA, 'description', '', __('This is a sub-title placeholder, you can put your page description here.', 'wien'));

					$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );
				$s->endSection();

				$s->startSection('breadcrumbs');
					$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Breadcrumbs', 'wien'));
						$s->addOption( ffOneOption::TYPE_CHECKBOX, 'show', __('Show', 'wien'), 1);
						$s->addElement( ffOneElement::TYPE_NEW_LINE );
						$s->addOption( ffOneOption::TYPE_TEXT, 'before', __('Text before', 'wien'), __('You are here: ', 'wien'));
					$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );
				$s->endSection();

			$s->addElement( ffOneElement::TYPE_TABLE_END );
		$s->endSection();
		return $s;
	}
}

