<?php
/**
 * @var ffOptionsQuery $query
 *
 * @link http://milothemes.com/wien/blog-classic.html
 */
?><section<?php
ff_load_section_printer(
	'section-fullwidth-wrapper'
	, $query->get('section-fullwidth-wrapper')
	, array(
		'class' => 'clearfix',
		'section'=>'blog-archive-classic'
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

		$contentClass = 'col-sm-9';

		if( $query->get('sidebar') == 'none' ) {
		$contentClass = '';
		}

		$numberOfPosts = $query->get('number-of-posts');
		?>
		<div class="row">
			<?php
			if( $query->get('sidebar') == 'left' ) {
				?>
				<div class="col-sm-3">
					<?php
					dynamic_sidebar('sidebar-content');
					?>
				</div>
			<?php
			}
			?>
			<div class="<?php echo esc_attr($contentClass); ?>">
			<?php
			$postCounter = 0;
			if ( have_posts() ) {
				while (have_posts()) {
					the_post();
					$postCounter++;
					$url = get_the_permalink();

					if( $numberOfPosts > 0 && $postCounter > $numberOfPosts ) {
						break;
					}
			?>
				<div id="post-<?php the_ID(); ?>" <?php post_class("blog-article"); ?>>

					<?php
					ff_load_section_printer("blog-meta", $query);
					ff_load_section_printer('blog-featured-area', $query->get('blog-meta featured-image'));
					?>

					<div class="post-content">
						<?php
						the_content('');
						?>
					</div>

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
			<?php
				}
			}else{ // search - nothing found
				echo '<p>';
				echo ff_wp_kses( $query->get('search-not-found') );
				echo '</p>';
				echo '<div class="widget_search">';
				get_search_form();
				echo '</div>';
			}

			?>
			</div>
			<?php
			if( $query->get('sidebar') == 'right' ) {
				?>
				<div class="col-sm-3">
					<?php
					dynamic_sidebar('sidebar-content');
					?>
				</div>
			<?php
			}
			?>
		</div>
		<?php
		ff_load_section_printer('pagination', $query );
		?>
	</div>
</section>

