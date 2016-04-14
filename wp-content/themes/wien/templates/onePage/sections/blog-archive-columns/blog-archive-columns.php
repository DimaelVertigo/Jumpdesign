<?php
/**
 * @var ffOptionsQuery $query
 *
 * @link http://milothemes.com/wien/blog-columns.html
 */
?><section<?php
ff_load_section_printer(
	'section-fullwidth-wrapper'
	, $query->get('section-fullwidth-wrapper')
	, array(
		'class' => 'clearfix',
		'section'=>'blog-archive-columns'
	)
);
?>>
	<?php
	ff_load_section_printer(
		'section-background'
		, $query->get('section-fullwidth-wrapper background')
	);
	?>
	<div<?php
	ff_load_section_printer(
		'section-boxed-wrapper'
		, $query->get('section-boxed-wrapper')
		, array(
			'boxed' => 1,
		)
	);
	?>>
		<?php
		ff_load_section_printer( 'section-background', $query->get('section-boxed-wrapper background') );

		$numberOfPostsInColumn = $query->get('number-of-columns');

		$oneColumnNumber = ff_boostrap_grid_translator( $numberOfPostsInColumn );
		$oneColumnCss = 'col-sm-'.absint($oneColumnNumber);

		global $wp_query;
		global $post;
		$postsFound = $wp_query->found_posts;

		$postLimited = $query->get('number-of-posts');

		?>
		<div class="row">
			<?php
			$postCounter = 0;
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post();
					$postCounter++;
					$url = get_the_permalink();

			?>
			<div class="<?php echo esc_attr($oneColumnCss); ?>">
				<div id="post-<?php the_ID(); ?>" <?php post_class("blog-article"); ?>>

					<div class="blog-article-details">

						<?php
						ff_load_section_printer("blog-meta", $query);
						ff_load_section_printer('blog-featured-area', $query->get('blog-meta featured-image'));
						?>

					</div>

					<?php
					the_content('');
					?>

					<?php
					if( ff_has_read_more() && $query->get('readmore-show') ) {
						ff_load_section_printer(
							'button'
							, $query
							, array('url'=>$url)
						);
					}
					?>

				</div>
			</div>
			<?php
				if( $postLimited == $postCounter ) break;
					if( ($postCounter % $numberOfPostsInColumn == 0 )&& ( $wp_query->current_post < ($wp_query->found_posts-1) || $postCounter < $postLimited )  ) {
						echo '</div></div>';
						echo '<div class="container"><div class="row">';
					}
				}
			}
			?>
		</div>
		<?php
			ff_load_section_printer('pagination', $query);
		?>
	</div>
</section>
