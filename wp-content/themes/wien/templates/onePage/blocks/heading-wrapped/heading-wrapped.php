<?php
/**
 * @var ffOptionsQuery $query
 */

$query = $query->get('heading-wrapped');
if($query->get('show-heading')) {
	?>
		<div class="row">
			<div class="col-sm-12">
				<div class="headline <?php echo esc_attr( $query->get('wrapper-type') ) . ' ' . esc_attr( $query->get('position') ); ?>">
					<?php ff_load_section_printer('heading-content', $query); ?>
				</div>
			</div>
		</div>
<?php
}
?>