<?php
/** @var ffOneStructure $s */
$s->startSection('loop-influence-portfolio-block');
	$s->addElement( ffOneElement::TYPE_HTML, '', __('<strong>Please not, this option will be applied only if you are outside Portfolio Category archive</strong> Also please note that posts per page are inherited from WP Admin -> Settings -> Reading', 'wien'));

	$s->addOption( ffOneOption::TYPE_TAXONOMY, 'categories', __('Categories', 'wien'), 'all')
		->addParam('tax_type', 'ff-portfolio-category')
		->addParam('type', 'multiple')
	;
$s->endSection();