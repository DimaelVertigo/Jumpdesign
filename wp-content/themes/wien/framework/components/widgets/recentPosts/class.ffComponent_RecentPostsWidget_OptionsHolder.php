<?php

class ffComponent_RecentPostsWidget_OptionsHolder extends ffOptionsHolder {
	public function getOptions() {
		$s = $this->_getOnestructurefactory()->createOneStructure( 'latest-news-structure' );
		$s->startSection('recent-posts', 'Latest News');

			$s->addElement( ffOneElement::TYPE_HTML, '', '<p>' );
				$s->addOption(ffOneOption::TYPE_TEXT, 'title', 'Title', 'Recent Posts');
			$s->addElement( ffOneElement::TYPE_HTML, '', '</p>' );


			$s->addElement( ffOneElement::TYPE_HTML, '', '<p>' );
				$s->addElement( ffOneElement::TYPE_HTML,'','Categories');
				$s->addOption( ffOneOption::TYPE_TAXONOMY, 'categories', 'Categories', 'all')
					->addParam('tax_type', 'category')
					->addParam('type', 'multiple')
					;
			$s->addElement( ffOneElement::TYPE_HTML, '', '</p>' );

			$s->addElement( ffOneElement::TYPE_HTML, '', '<p>' );
				$s->addElement( ffOneElement::TYPE_HTML,'','Date Format');
				$s->addOption(ffOneOption::TYPE_TEXT, 'date-format', 'Date Format', 'F j, Y');
			$s->addElement( ffOneElement::TYPE_HTML, '', '</p>' );

			$s->addElement( ffOneElement::TYPE_HTML, '', '<p>' );
				$s->addElement( ffOneElement::TYPE_HTML,'','Post Meta');
				$s->addOption(ffOneOption::TYPE_TEXT, 'post-meta', 'Post Meta', 'by %author% in %category%');
			$s->addElement( ffOneElement::TYPE_HTML, '', '</p>' );


			$s->addElement( ffOneElement::TYPE_HTML, '', '<p>' );
				$s->addOption(ffOneOption::TYPE_TEXT, 'number-of-posts', 'Number of Posts', '3');
			$s->addElement( ffOneElement::TYPE_HTML, '', '</p>' );
		$s->endSection();
		return $s;
	}
}

