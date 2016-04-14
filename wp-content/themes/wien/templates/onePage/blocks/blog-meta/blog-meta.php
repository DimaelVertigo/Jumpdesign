<?php

global $post;
$postMetaGetter = ffContainer()->getThemeFrameworkFactory()->getPostMetaGetter();
$metaQuery = $query->get('blog-meta');
?>

<div class="blog-article-details">

	<?php
	$basicMeta = array();

	if( $metaQuery->get('categories show') ) {
		$categoryMeta = '';

		$categoryMeta .= '<i class="miu-icon-editor_folder_add_outline_stroke"></i> ';
		$categoryMeta .= $postMetaGetter->getPostCategoriesHtml();

		$basicMeta[] = $categoryMeta;

	}

	if( $metaQuery->get('tags show') ) {
		if( has_tag() ) {
			$categoryMeta = $postMetaGetter->getPostTagsHtml();
			$basicMeta[] = $categoryMeta;
		}

	}

	if( $metaQuery->get('date show') ) {
		$dateMeta  = '<a href="'.get_the_permalink().'">';
		$dateMeta .= get_the_date( $metaQuery->get('date format') );
		$dateMeta .= '</a>';
		$basicMeta[] = $dateMeta;
	}

	if( $metaQuery->get('author show') ) {
		$authorMeta = '';
		$authorMeta .= '<i class="miu-icon-business_namecard_contact_info_outline_stroke"></i> ';
		$authorMeta .= '<a href="'.esc_url($postMetaGetter->getPostAuthorUrl()).'">';
		$authorMeta .= $postMetaGetter->getPostAuthorName();
		$authorMeta .= '</a>';

		$basicMeta[] = $authorMeta;
	}

	if( $metaQuery->get('comments show') ) {
		$commentsMeta = '';

		$commentsMeta .= '<i class="miu-icon-other_conversation_review_comment_bubble_talk_outline_stroke"></i> ';
		$commentsMeta .= $postMetaGetter->getPostCommentsLinkText('0','1','%s');

		$basicMeta[] = $commentsMeta;
	}

	if( !empty ( $basicMeta ) ) {
		echo "<h6>".( implode(' / ', $basicMeta ) )."</h6>";
	}
	?>

	<h3><a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a></h3>
</div>
