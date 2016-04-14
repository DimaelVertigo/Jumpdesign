<?php

class ffComponent_RecentPostsWidget_Printer extends ffBasicObject {
	public function printComponent( $args, ffOptionsQuery $query) {

/**********************************************************************************************************************/
/* DATA GATHERING
/**********************************************************************************************************************/
        $categories = $query->getMultipleSelect('recent-posts categories');
        $numberOfPosts = $query->get('recent-posts number-of-posts');
        $title = $query->get('recent-posts title');

        $postGetter = ffContainer()->getPostLayer()->getPostGetter();
        $posts = $postGetter->setFilterRelation_OR()->setNumberOfPosts($numberOfPosts)->filterByCategory( $categories )->getAllPosts();
/**********************************************************************************************************************/
/* WIDGET PRINTING
/**********************************************************************************************************************/
        echo ($args['before_widget']);

            echo ($args['before_title']).ff_wp_kses($title).($args['after_title']);

                echo '<ul>';

                    foreach( $posts as $onePost ) {

                        $category = get_the_category( $onePost->getID() );

                        if( !isset( $category[0] ) ) {
                            continue;
                        }
                        /*----------------------------------------------------------*/
                        /* FEATURED IMAGE
                        /*----------------------------------------------------------*/
                        $featuredImageNonresized = $onePost->getFeaturedImage();
                        if( $featuredImageNonresized == null ) {
                            continue;
                        }

                        $featuredImage = fImg::resize( $featuredImageNonresized, 65, 65, true);
                        /*----------------------------------------------------------*/
                        /* DATE
                        /*----------------------------------------------------------*/
                        $dateFormat = $query->get('recent-posts date-format');
                        $date = $onePost->getDateFormated( $dateFormat );
                        /*----------------------------------------------------------*/
                        /* POST META
                        /*----------------------------------------------------------*/
                        $firstCat = $category[0];
                        $firstCatName = $firstCat->cat_name;
                        $firstCatLink = get_category_link( $firstCat->term_id );

                        $author = '<a href="'.get_author_posts_url( $onePost->getAuthorID()).'">'. get_the_author_meta( 'display_name', $onePost->getAuthorID()).'</a>';
                        $category = '<a href="'.esc_url($firstCatLink).'">'.ff_wp_kses($firstCatName).'</a>';

                        $postMeta = $query->get('recent-posts post-meta');
                        $postMeta = str_replace('%author%', $author, $postMeta );
                        $postMeta = str_replace('%category%', $category, $postMeta );
                        /*----------------------------------------------------------*/
                        /* actual widget content printing
                        /*----------------------------------------------------------*/
                        echo '<li>';
                            echo '<img src="'.esc_url($featuredImage).'" alt="">';
                            echo '<a class="post-title" href="'.esc_url($onePost->getPermalink()).'">'.ff_wp_kses($onePost->getTitle()).'</a>';
                            echo '<p class="post-date">'.ff_wp_kses($date).'</p>';
                            echo '<p>'.ff_wp_kses($postMeta).'</p>';
                        echo '</li>';
                    }

                echo '</ul>';

        echo ($args['after_widget']);
	}
}