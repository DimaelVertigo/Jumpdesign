<?php

class ffComponent_Theme_MetaboxPortfolio_CategoryView extends ffOptionsHolder {
	public function getOptions() {
		$s = $this->_getOnestructurefactory()->createOneStructure( 'category');

		$s->startSection('general');
			$s->addElement( ffOneElement::TYPE_TABLE_START );

				$s->addElement(ffOneElement::TYPE_TABLE_DATA_START, '', __('Date', 'wien'));
					$s->startSection('date');
						$s->addOption( ffOneOption::TYPE_CHECKBOX, 'different', __('Use this date instead of date when portfolio has been created', 'wien'), 0);
						$s->addElement(ffOneElement::TYPE_NEW_LINE );
						$s->addOption( ffOneOption::TYPE_TEXT, 'date', __('Date', 'wien'), __('05 March 2015', 'wien'));
						$s->addElement(ffOneElement::TYPE_NEW_LINE );
					$s->endSection();
				$s->addElement(ffOneElement::TYPE_TABLE_DATA_END );


				$s->addElement(ffOneElement::TYPE_TABLE_DATA_START, '', __('Title', 'wien'));
					$s->startSection('title');
						$s->addOption( ffOneOption::TYPE_CHECKBOX, 'different', __('Use this Title instead of portfolio title', 'wien'), 0);
						$s->addElement(ffOneElement::TYPE_NEW_LINE );
						$s->addOption( ffOneOption::TYPE_TEXT, 'title', __('Title', 'wien'), __('Conceptual industrial design', 'wien'));
						$s->addElement(ffOneElement::TYPE_NEW_LINE );
					$s->endSection();
				$s->addElement(ffOneElement::TYPE_TABLE_DATA_END );

				$s->addElement(ffOneElement::TYPE_TABLE_DATA_START, '', __('Sub Title', 'wien'));
					$s->startSection('subtitle');
						$s->addOption( ffOneOption::TYPE_CHECKBOX, 'different', __('Use this Sub Title instead of first portfolio tag', 'wien'), 0);
						$s->addElement(ffOneElement::TYPE_NEW_LINE );
						$s->addOption( ffOneOption::TYPE_TEXT, 'subtitle', __('Sub Title', 'wien'), __('Packaging design', 'wien'));
						$s->addElement(ffOneElement::TYPE_NEW_LINE );
					$s->endSection();
				$s->addElement(ffOneElement::TYPE_TABLE_DATA_END );

				$s->addElement(ffOneElement::TYPE_TABLE_DATA_START, '', __('Description', 'wien'));
					$s->startSection('description');
						$default = __('Lorem ipsum dolor sit amet, consectetur enim ad minim elit, sed do eiusmod tempor omis unde ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.', 'wien');
						$s->addOption( ffOneOption::TYPE_TEXTAREA, 'description', __('Description', 'wien'), $default);
						$s->addElement(ffOneElement::TYPE_NEW_LINE );
					$s->endSection();
				$s->addElement(ffOneElement::TYPE_TABLE_DATA_END );

				$s->addElement(ffOneElement::TYPE_TABLE_DATA_START, '', __('Button (if presented)', 'wien'));
					$s->startSection('button');
						$s->addOption( ffOneOption::TYPE_CHECKBOX, 'different-caption', __('Use this caption instead of settings from Portfolio Classic Arhcive', 'wien'), 0);
						$s->addElement(ffOneElement::TYPE_NEW_LINE );
						$s->addOption( ffOneOption::TYPE_TEXT, 'caption', __('Caption', 'wien'), __('Caption', 'wien'));
						$s->addElement(ffOneElement::TYPE_NEW_LINE );


						$s->addOption( ffOneOption::TYPE_CHECKBOX, 'different-url', __('Use this URL for button instead of linking to Single Portfolio', 'wien'), 0);
						$s->addElement(ffOneElement::TYPE_NEW_LINE );
						$s->addOption( ffOneOption::TYPE_TEXT, 'url', __('Packaging design', 'wien'), 'http://www.yoururl.com/');
						$s->addElement(ffOneElement::TYPE_NEW_LINE );
					$s->endSection();
				$s->addElement(ffOneElement::TYPE_TABLE_DATA_END );


			$s->addElement( ffOneElement::TYPE_TABLE_END );
		$s->endSection();
		return $s;
	}
}

