<?php


///////////////////////////////////////////////////////////////////////////////////////////////////
// Add wrappers to comment input fields
///////////////////////////////////////////////////////////////////////////////////////////////////
	$query = ffTemporaryQueryHolder::getQuery('comments-form');



	$commentFormPrinter = ffContainer()->getThemeFrameworkFactory()->getCommentsFormPrinter();

if( $commentFormPrinter->commentsOpen() ) {

	$commentFormPrinter->addFieldAuthorLine('<p class="commentform-author">');
	$commentFormPrinter->addFieldAuthorLine('<label for="name">'.ff_wp_kses( $query->get('name') ).' <span class="required">*</span></label>');
	$commentFormPrinter->addFieldAuthorLine('<input class="ff-field-author" id="name" name="author" type="text">');
	$commentFormPrinter->addFieldAuthorLine('</p>');

	$commentFormPrinter->addFieldEmailLine('<p class="commentform-email">');
	$commentFormPrinter->addFieldEmailLine('<label for="email">'.ff_wp_kses($query->get('email')).' <span class="required">*</span></label>');
	$commentFormPrinter->addFieldEmailLine('<input class="ff-field-email" id="email" name="email" type="text">');
	$commentFormPrinter->addFieldEmailLine('</p>');

	$commentFormPrinter->addFieldWebsiteLine('<p class="commentform-url">');
	$commentFormPrinter->addFieldWebsiteLine('<label for="url">'.ff_wp_kses( $query->get('website') ).' </label>');
	$commentFormPrinter->addFieldWebsiteLine('<input class="ff-field-url" id="url" name="url" type="text" >');
	$commentFormPrinter->addFieldWebsiteLine('</p>');

	$commentFormPrinter->addFieldCommentLine('<p>');
	$commentFormPrinter->addFieldCommentLine('<label for="comment">'.ff_wp_kses( $query->get('comment-form') ).' </label>');
	$commentFormPrinter->addFieldCommentLine('<textarea class="ff-field-comment" id="comment" name="comment" rows="8" cols="25"></textarea>');
	$commentFormPrinter->addFieldCommentLine('</p>');

	$commentFormPrinter->setClassSubmitButton('btn btn-default');

	$commentFormPrinter->addFieldLoggedInLine('<p class="col-1 logged-in-as">');
	$commentFormPrinter->addFieldLoggedInLine($query->get('logged-in'));
	$commentFormPrinter->addFieldLoggedInLine('</p>');

	$commentFormPrinter->setTextHeading($query->get('heading'));
	$commentFormPrinter->setTextSubmit($query->get('submit-button'));

	$commentFormPrinter->addReplaceRule('comment-reply-title', 'comment-reply-title commentform-title');

	$commentFormPrinter->printForm();

}