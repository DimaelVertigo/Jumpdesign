<?php
/**
 * @var $s ffOneStructure
 */

$s->startSection('pagination');
	$s->addOption( ffOneOption::TYPE_TEXT, 'trans-first', __('First', 'wien'), '&laquo;');
	$s->addElement( ffOneElement::TYPE_NEW_LINE );
	$s->addOption( ffOneOption::TYPE_TEXT, 'trans-last', __('Last', 'wien'), '&raquo;');
$s->endSection();