<?php
/**
 * Template Name: One Page
 *
 * @package WordPress
 * @subpackage Wien
 * @since Wien 1.0
 */

get_header();

	$fwc = ffContainer::getInstance();
	$postMeta = $fwc->getDataStorageFactory()->createDataStorageWPPostMetas_NamespaceFacade( $post->ID );
	$onePage = $postMeta->getOption( 'onepage' );

	$onePage = unserialize( base64_decode( $onePage ));
	$sectionQuery = ffContainer::getInstance()->getOptionsFactory()->createQuery( $onePage, 'ffComponent_Theme_OnePageOptions');


    foreach( $sectionQuery->get('sections') as $oneSection ) {
        /** @var ffOptionsQuery $oneSection */
        $variation = $oneSection->getVariationType();
        ff_print_section_callback( $oneSection, $variation );
    }

get_footer();