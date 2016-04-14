<?php
/**
 * @var ffOptionsQuery $query
 *
 * @link http://milothemes.com/wien/blog-post.html
 */
?><section<?php
ff_load_section_printer(
	'section-fullwidth-wrapper'
	, $query->get('section-fullwidth-wrapper')
	, array(
		'class' => 'clearfix',
		'section'=>'blog-single'
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

		if( $query->get('sidebar') == 'left' ) {
			$postContentClass = 'col-md-9 col-sm-8 col-xs-12 pull-right';
			$sidebarClass = 'col-md-3 col-sm-4 col-xs-12 pull-left';
		} else if ($query->get('sidebar') == 'right') {
			$postContentClass = 'col-md-9 col-sm-8 col-xs-12 pull-left';
			$sidebarClass = 'col-md-3 col-sm-4 col-xs-12 pull-right';
		} else {
			$postContentClass = 'col-md-12';
		}

		?>

		<div class="row">
			<div class="<?php echo esc_attr($postContentClass); ?>">
				<div id="post-<?php the_ID(); ?>" <?php post_class("blog-article"); ?>>
					<?php
						ff_load_section_printer(
							'blog-meta'
							, $query
							, array('section'=>'blog-classic')
						);
						ff_load_section_printer(
							'blog-featured-area'
							, $query->get('blog-meta featured-image')
							, array('section'=>'blog-classic')
						);
					?>
					<?php
						the_content('');
						wp_link_pages();
					?>
				</div>
				<?php
					if( $query->get('author-box show') ) {
						$postMetaGetter = ffContainer()->getThemeFrameworkFactory()->getPostMetaGetter();
						?>
						<div class="blog-article-author">

							<p>
								<?php echo ff_wp_kses($postMetaGetter->getPostAuthorImage(80)); ?>
								<?php echo ff_wp_kses($postMetaGetter->getPostAuthorName()); ?>
							</p>

							<div class="blog-article-author-details">

								<h4><?php echo ff_wp_kses($query->get('author-box title')); ?></h4>
								<p>
									<?php echo ff_wp_kses($postMetaGetter->getPostAuthorDescription()); ?>
								</p>

							</div>


						</div>
					<?php
					}
				?>
				<?php
					ffTemporaryQueryHolder::setQuery('comments-form', $query->get('comments-form'));
					ffTemporaryQueryHolder::setQuery('comments-list', $query->get('comments-list'));
					comments_template();
					ffTemporaryQueryHolder::deleteQuery('comments-form');
					ffTemporaryQueryHolder::deleteQuery('comments-list');
				?>

			</div>
			<?php if( $query->get('sidebar') != 'none' ) { ?>
				<div class="<?php echo esc_attr($sidebarClass); ?>">
					<?php dynamic_sidebar('sidebar-content'); ?>
				</div>
			<?php } ?>
		</div>
	</div>
</section>