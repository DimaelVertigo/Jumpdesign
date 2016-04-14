<?php

class ffComponent_Theme_MetaboxPage_TitleView extends ffOptionsHolder {
	public function getOptions() {
		$s = $this->_getOnestructurefactory()->createOneStructure( 'page_title');

		$s->startSection('general');
			$s->addElement( ffOneElement::TYPE_TABLE_START );
				$s->addElement(ffOneElement::TYPE_TABLE_DATA_START, '', __('Show Page Title', 'wien'));
					$s->addOption( ffOneOption::TYPE_CHECKBOX, 'show', __('Show Page Title', 'wien'), 1 );
				$s->addElement(ffOneElement::TYPE_TABLE_DATA_END );
			$s->addElement( ffOneElement::TYPE_TABLE_END );
		$s->endSection();
		return $s;
	}
}

