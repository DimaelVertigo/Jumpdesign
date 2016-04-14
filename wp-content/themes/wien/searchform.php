<form
	method="get"
	id="searchform"
	class="searchform"
	action="<?php echo esc_url( home_url( '/' ) ); ?>"
>
	<input
		name="s"
		id="s"
		type="text"
		placeholder="<?php echo esc_attr( ffThemeOptions::getQuery('translation Search_widget_input_text') ); ?>"
		value="<?php echo get_search_query(); ?>"
	/>
	<input
		type="submit"
		id="searchsubmit"
		value=""
	/>
</form>