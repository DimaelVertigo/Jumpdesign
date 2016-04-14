<?php
if( ! post_password_required() ) {
	if ( comments_open() or ( get_comments_number() > 0 ) ) {
		require locate_template('templates/onePage/blocks/comments-list/comments-list.php');
		require locate_template('templates/onePage/blocks/comments-form/comments-form.php');
	}
}
?>