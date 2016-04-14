<?php
/** @var ffOneStructure $s  */

$s->startSection('bootstrap-columns');
$s->addElement(ffOneElement::TYPE_TOGGLE_BOX_START, '', 'Bootstrap Columns Width');

// GENERAL

// xs, sm. md. lg

$xs = $sm = $md = $lg = 'no';

if( isset( $params['xs'] ) ) {
	$xs = $params['xs'];
}

if( isset( $params['sm'] ) ) {
	$sm = $params['sm'];
}

if( isset( $params['md'] ) ) {
	$md = $params['md'];
}

if( isset( $params['lg'] ) ) {
	$lg = $params['lg'];
}

$s->addElement(ffOneElement::TYPE_TABLE_START);


$s->addElement(ffOneElement::TYPE_TABLE_DATA_START, '', __('Phone (XS)', 'wien') );
$s->addOption(ffOneOption::TYPE_SELECT, 'xs', __('Column Width &nbsp;', 'wien'), $xs )
	->addSelectValue('Do not declare', 'no')
	->addSelectNumberRange(1,12)
;
$s->addElement(ffOneElement::TYPE_HTML, '', ' / 12');
$s->addElement(ffOneElement::TYPE_NEW_LINE);
$s->addOption(ffOneOption::TYPE_SELECT, 'off-xs', __('Left Offset Padding &nbsp;', 'wien'), $xs )
	->addSelectValue('Do not declare', 'no')
	->addSelectNumberRange(1,12)
;
$s->addElement(ffOneElement::TYPE_HTML, '', ' / 12');
$s->addElement(ffOneElement::TYPE_TABLE_DATA_END);


$s->addElement(ffOneElement::TYPE_TABLE_DATA_START, '', __('Tablet (SM)', 'wien'));
$s->addOption(ffOneOption::TYPE_SELECT, 'sm', __('Column Width &nbsp;', 'wien'), $sm )
	->addSelectValue('Do not declare', 'no')
	->addSelectNumberRange(1,12)
;
$s->addElement(ffOneElement::TYPE_HTML, '', ' / 12');
$s->addElement(ffOneElement::TYPE_NEW_LINE);
$s->addOption(ffOneOption::TYPE_SELECT, 'off-sm', __('Left Offset Padding &nbsp;', 'wien'), $xs )
	->addSelectValue('Do not declare', 'no')
	->addSelectNumberRange(1,12)
;
$s->addElement(ffOneElement::TYPE_HTML, '', ' / 12');
$s->addElement(ffOneElement::TYPE_TABLE_DATA_END );


$s->addElement(ffOneElement::TYPE_TABLE_DATA_START, '', __('Laptop (MD)', 'wien'));
$s->addOption(ffOneOption::TYPE_SELECT, 'md', __('Column Width &nbsp;', 'wien'), $md )
	->addSelectValue('Do not declare', 'no')
	->addSelectNumberRange(1,12)
;
$s->addElement(ffOneElement::TYPE_HTML, '', ' / 12');
$s->addElement(ffOneElement::TYPE_NEW_LINE);
$s->addOption(ffOneOption::TYPE_SELECT, 'off-md', __('Left Offset Padding &nbsp;', 'wien'), $xs )
	->addSelectValue('Do not declare', 'no')
	->addSelectNumberRange(1,12)
;
$s->addElement(ffOneElement::TYPE_HTML, '', ' / 12');
$s->addElement(ffOneElement::TYPE_TABLE_DATA_END);


$s->addElement(ffOneElement::TYPE_TABLE_DATA_START, '', __('Desktop (LG)', 'wien'));
$s->addOption(ffOneOption::TYPE_SELECT, 'lg', __('Column Width &nbsp;', 'wien'), $lg )
	->addSelectValue('Do not declare', 'no')
	->addSelectNumberRange(1,12)
;
$s->addElement(ffOneElement::TYPE_HTML, '', ' / 12');
$s->addElement(ffOneElement::TYPE_NEW_LINE);
$s->addOption(ffOneOption::TYPE_SELECT, 'off-lg', __('Left Offset Padding &nbsp;', 'wien'), $xs )
	->addSelectValue('Do not declare', 'no')
	->addSelectNumberRange(1,12)
;
$s->addElement(ffOneElement::TYPE_HTML, '', ' / 12');
$s->addElement(ffOneElement::TYPE_TABLE_DATA_END);


$s->addElement(ffOneElement::TYPE_TABLE_END);


$s->addElement(ffOneElement::TYPE_TOGGLE_BOX_END);
$s->endSection();