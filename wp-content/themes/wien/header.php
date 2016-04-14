<?php
/**
 * Hi there!
 *
 * As opposite of other themes (where you usually find here navigation code and other), in this theme, you'll
 * find only code for printing layouts of placement "Header" and "Before Content". These layouts could be
 * created in WP Admin -> Layouts.
 *
 * Typically here will be printed (but it depends at you of course)
 * - Header navigation
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<div id="page-wrapper">

	<?php

    ffContainer()->getThemeFrameworkFactory()->getLayoutsNamespaceFactory()->getLayoutPrinter()
        ->printLayoutHeader()
        ->printLayoutBeforeContent();
	?>
