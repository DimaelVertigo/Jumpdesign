<?php
/**
 * @var ffOptionsQuery $query
 *
 * @link http://milothemes.com/wien/blog-masonry.html
 */

wp_enqueue_script('ff-isotope-pkg');

?><section<?php
ff_load_section_printer(
	'section-fullwidth-wrapper'
	, $query->get('section-fullwidth-wrapper')
	, array(
		'class' => 'clearfix',
		'section'=>'blog-archive-masonry'
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
		$postLimited = $query->get('number-of-posts');

		?>
		<div class="row">
			<div class="col-sm-12">
				<div class="isotope col-<?php echo esc_attr($numberOfPostsInColumn);?> gutter clearfix" style="margin-top:0;">
				<?php
				$postCounter = 0;
				if ( have_posts() ) {
					while (have_posts()) {
						$postCounter++;
						the_post();
						$url = get_the_permalink();
				?>
					<div class="isotope-item">

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
					}
				}
					?>
				</div>
			</div>
		</div>
		<?php
		ff_load_section_printer('pagination', $query);
		?>
	</div>
</section>