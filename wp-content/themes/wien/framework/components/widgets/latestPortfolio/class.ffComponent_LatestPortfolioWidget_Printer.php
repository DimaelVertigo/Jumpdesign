<?php

class ffComponent_LatestPortfolioWidget_Printer extends ffBasicObject {
	public function printComponent( $args, ffOptionsQuery $query) {

		$categories = $query->getMultipleSelect('latest-portfolio categories');

		$categoriesCheck = ( $query->get('latest-portfolio categories'));

		if( empty( $categoriesCheck  ) || $categoriesCheck == 'all' ) {
			$categories = null;
		}

		$numberOfPosts = $query->get('latest-portfolio number-of-posts');

		$postGetter = ffContainer()->getPostLayer()->getPostGetter();

		$posts = $postGetter
			->setFilterRelation_OR()
			->setNumberOfPosts($numberOfPosts)
			->filterByTaxonomy($categories, 'ff-portfolio-category')
			->addArgHasFeatured()
			->getPostsByType('portfolio');

		if( $posts == null ) {
			echo '<strong>No posts found</strong>';
		}

		echo  $args['before_widget'];

			echo  $args['before_title'];
			echo ff_wp_kses( $query->get('latest-portfolio title') );
			echo  $args['after_title'];

			if( !empty( $posts ) ) {

				echo '<div class="latest_portfolio_photos">';

					foreach( $posts as $onePost ) {
						$featuredImage = $onePost->getFeaturedImage();

						if( empty( $featuredImage ) ) {
							continue;
						}
						echo '<div class="latest_portfolio_badge_image">';
							echo '<a href="'.get_permalink( $onePost->getID() ).'">';
								echo '<img width="75" height="75" title="" alt="" src="'.esc_url( fImg::resize($featuredImage, 75,75,true) ).'">';
							echo '</a>';
						echo '</div>';
					}

				echo '</div>';

				if( $query->get('latest-portfolio show-description') ) {
					echo '<br><div><p>'.ff_wp_kses( $query->get('latest-portfolio description') ).'</p></div>';
				}

			}
		echo  $args['after_widget'];
	}
}