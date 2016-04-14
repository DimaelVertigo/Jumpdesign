<?php

class ffComponent_LatestNewsWidget_Printer extends ffBasicObject {
	public function printComponent( $args, ffOptionsQuery $query) {

		$categories = $query->getMultipleSelect('latest-news categories');
		$numberOfPosts = $query->get('latest-news number-of-posts');
		$title = $query->get('latest-news title');

		$postGetter = ffContainer()->getPostLayer()->getPostGetter();
		$posts = $postGetter->setFilterRelation_OR()->setNumberOfPosts($numberOfPosts)->filterByCategory( $categories )->getAllPosts();

		echo ($args['before_widget']);

		echo ($args['before_title']).ff_wp_kses($title).($args['after_title']);

		echo '<ul>';

		foreach( $posts as $onePost ) {

			$category = get_the_category( $onePost->getID() );

			if( !isset( $category[0] ) ) {
				continue;
			}
			/*----------------------------------------------------------*/
			/* data for one single post
			/*----------------------------------------------------------*/
			$firstCat = $category[0];
			$firstCatName = $firstCat->cat_name;
			$firstCatLink = get_category_link( $firstCat->term_id );

			$year = $onePost->getDateFormated('Y');
			$month = $onePost->getDateFormated('n');

			$dateArchiveLink = get_month_link( $year, $month );
			/*----------------------------------------------------------*/
			/* actual widget content printing
			/*----------------------------------------------------------*/
			echo '<li>';
			echo '<p><a href="'.  $firstCatLink.'">'.  $firstCatName.'</a> / <a href="'.  $dateArchiveLink.'">'.  $onePost->getDateFormated( 'F d, Y' ).'</a></p>';
			echo '<a href="'.  $onePost->getPermalink().'">'.  $onePost->getTitle().'</a>';
			echo '</li>';
		}
		echo '</ul>';
		echo ($args['after_widget']);
	}
}