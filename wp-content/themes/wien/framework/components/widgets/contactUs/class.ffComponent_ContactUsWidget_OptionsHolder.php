<?php

class ffComponent_ContactUsWidget_OptionsHolder extends ffOptionsHolder {
	public function getOptions() {
		$s = $this->_getOnestructurefactory()->createOneStructure( 'contact-us-structure' );
		$s->startSection('contact-us', 'Contact Us');

			$s->addElement( ffOneElement::TYPE_HTML, '', '<p>' );
				$s->addOption(ffOneOption::TYPE_TEXT, 'title', 'Title', 'Contact Us');
			$s->addElement( ffOneElement::TYPE_HTML, '', '</p>' );

			$s->addElement( ffOneElement::TYPE_NEW_LINE );

				$s->startSection('lines', ffOneSection::TYPE_REPEATABLE_VARIABLE );
					$s->startSection('one-line', ffOneSection::TYPE_REPEATABLE_VARIATION )->addParam('section-name', 'One Line');
						$s->addOption( ffOneOption::TYPE_SELECT, 'type', 'Type', 'Address')
							->addSelectValue('Address', 'address')
							->addSelectValue('Phone', 'phone')
							->addSelectValue('Email', 'email')
							;

						$s->addElement(ffOneElement::TYPE_NEW_LINE );

						$textContent = '654 Medical Center Drive <br> St Armands Key, <br class="hidden-sm"> FL 34236';
						$s->addOption( ffOneOption::TYPE_TEXTAREA, 'text', 'Text',  $textContent );
					$s->endSection();

				$s->endSection();


			$s->addElement( ffOneElement::TYPE_NEW_LINE );

		$s->endSection();
		return $s;
	}
}

