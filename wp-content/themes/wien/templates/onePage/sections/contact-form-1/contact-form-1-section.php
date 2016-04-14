<?php
/**
 * @var $s ffOneStructure
 */

################################################################################
# CONTACT FORM 1 START
################################################################################

$s->startSection('contact-form-1', ffOneSection::TYPE_REPEATABLE_VARIATION)
	->addParam('section-name', __('Contact Form 1', 'wien'))
	->addParam('hide-default', true)
	->addParam('advanced-picker-menu-title', __('Contact', 'wien'))
	->addParam('advanced-picker-menu-id', 'contact')
	->addParam('advanced-picker-section-image', ff_get_section_preview_image_url('contact-form-1'));

	$s->addElement( ffOneElement::TYPE_TABLE_START );

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Preview', 'wien'));
			$s->addElement(ffOneElement::TYPE_HTML,'','<img src="'.ff_get_section_preview_image_url('contact-form-1').'" width="250">');
		$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Section Wrappers Options', 'wien'));
			ff_load_section_options('section-fullwidth-wrapper-block', $s);
			ff_load_section_options('section-boxed-wrapper-block', $s);
		$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Heading', 'wien'));
		ff_load_section_options( 'heading-wrapped-block', $s);
		$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Contact Form', 'wien'));
			$s->startSection('contact-form');
				$s->addOption(ffOneOption::TYPE_TEXT, 'name', __('Name', 'wien'), __('Name', 'wien'));
				$s->addElement( ffOneElement::TYPE_NEW_LINE );

				$s->addOption(ffOneOption::TYPE_TEXT, 'email', __('Email', 'wien'), __('Email', 'wien'));
				$s->addElement( ffOneElement::TYPE_NEW_LINE );

				$s->addOption(ffOneOption::TYPE_TEXT, 'subject', __('Subject', 'wien'), __('Subject', 'wien'));
				$s->addElement( ffOneElement::TYPE_NEW_LINE );

				$s->addOption(ffOneOption::TYPE_TEXT, 'message', __('Message', 'wien'), __('Your comment', 'wien'));
				$s->addElement( ffOneElement::TYPE_NEW_LINE );

				$s->addOption(ffOneOption::TYPE_TEXT, 'button', __('Button', 'wien'), __('Submit comment', 'wien'));
				$s->addElement( ffOneElement::TYPE_NEW_LINE );

			$s->endSection();
		$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );


		$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Contact Form User Data', 'wien'));
			$s->startSection('contact-form-user-input');

				$s->addOption(ffOneOption::TYPE_TEXT, 'email', __('Your email address (where to receive emails)', 'wien'), __('your@email.com', 'wien'));
				$s->addElement( ffOneElement::TYPE_NEW_LINE );

				$s->addOption(ffOneOption::TYPE_TEXT, 'subject', __('Subject of the emails received', 'wien'), __('Wien contact form', 'wien'));
				$s->addElement( ffOneElement::TYPE_NEW_LINE );

			$s->endSection();
		$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

		$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Contact Form Messages', 'wien'));
			$s->startSection('contact-form-messages');

				$s->addOption(ffOneOption::TYPE_TEXT, 'validation-name', __('Validation Name', 'wien'), __('Please enter your name!', 'wien'));
				$s->addElement( ffOneElement::TYPE_NEW_LINE );

				$s->addOption(ffOneOption::TYPE_TEXT, 'validation-email', __('Validation Email (empty)', 'wien'), __('Please enter your email!', 'wien'));
				$s->addElement( ffOneElement::TYPE_NEW_LINE );

				$s->addOption(ffOneOption::TYPE_TEXT, 'validation-email-format', __('Validation Email (format)', 'wien'), __('Please enter a valid email address', 'wien'));
				$s->addElement( ffOneElement::TYPE_NEW_LINE );


				$s->addOption(ffOneOption::TYPE_TEXT, 'validation-subject', __('Validation subject', 'wien'), __('Please enter the subject!', 'wien'));
				$s->addElement( ffOneElement::TYPE_NEW_LINE );


				$s->addOption(ffOneOption::TYPE_TEXT, 'validation-message', __('Validation Message (empty)', 'wien'), __('Please enter your message!', 'wien'));
				$s->addElement( ffOneElement::TYPE_NEW_LINE );

				$s->addOption(ffOneOption::TYPE_TEXT, 'validation-message-minlength', __('Validation Message (minlength)', 'wien'), __('At least {0} characters required', 'wien'));
				$s->addElement( ffOneElement::TYPE_NEW_LINE );


				$s->addOption(ffOneOption::TYPE_TEXT, 'message-send-ok', __('Message has been sent', 'wien'), __('Your message was successfully sent!', 'wien'));
				$s->addElement( ffOneElement::TYPE_NEW_LINE );

				$s->addOption(ffOneOption::TYPE_TEXT, 'message-send-wrong', __('Message has NOT been sent', 'wien'), __('There was an error sending the message!', 'wien'));
				$s->addElement( ffOneElement::TYPE_NEW_LINE );

			$s->endSection();
		$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );


		$s->addElement( ffOneElement::TYPE_TABLE_DATA_START, '', __('Description', 'wien'));
			$s->startSection('description');
				$s->addOption(ffOneOption::TYPE_CHECKBOX, 'show', __('Show', 'wien'), 1);
				$s->addElement( ffOneElement::TYPE_NEW_LINE );

				$s->addOption(ffOneOption::TYPE_TEXT, 'title', __('Title', 'wien'), __('Contact Info', 'wien'));
				$s->addElement( ffOneElement::TYPE_NEW_LINE );

				$s->startSection('description-boxes', ffOneSection::TYPE_REPEATABLE_VARIABLE );
					$s->startSection('one-box', ffOneSection::TYPE_REPEATABLE_VARIATION)->addParam('section-name', __('One Box', 'wien'));
						$s->startSection('lines', ffOneSection::TYPE_REPEATABLE_VARIABLE );
							$s->startSection('one-line', ffOneSection::TYPE_REPEATABLE_VARIATION )->addParam('section-name', __('One Text Line', 'wien'));
								$s->addOption( ffOneOption::TYPE_TEXT, 'text', __('Text', 'wien'), __('654 Medical Center Drive, St. Armands Key, FL 34236', 'wien'));
							$s->endSection();

							$s->startSection('one-heading', ffOneSection::TYPE_REPEATABLE_VARIATION )->addParam('section-name', __('One Heading', 'wien'));
								$s->addOption( ffOneOption::TYPE_TEXT, 'text', __('Text', 'wien'), __('941-388-7775', 'wien'));
							$s->endSection();

							$s->startSection('one-email', ffOneSection::TYPE_REPEATABLE_VARIATION )->addParam('section-name', __('One Email', 'wien'));
								$s->addOption( ffOneOption::TYPE_TEXT, 'text', __('Text', 'wien'), __('your@email.com', 'wien'));
							$s->endSection();
						$s->endSection();
					$s->endSection();
				$s->endSection();

		$s->addOption(ffOneOption::TYPE_TEXTAREA, 'social', __('Social links', 'wien'), '');

			$s->endSection();
		$s->addElement( ffOneElement::TYPE_TABLE_DATA_END );

	$s->addElement( ffOneElement::TYPE_TABLE_END );
$s->endSection();

################################################################################
# CONTACT FORM 1 END
################################################################################
