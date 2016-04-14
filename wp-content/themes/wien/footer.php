<?php


ffContainer()->getThemeFrameworkFactory()->getLayoutsNamespaceFactory()->getLayoutPrinter()
	->printLayoutAfterContent()
	->printLayoutFooter();


echo '</div>';


if( !ffThemeOptions::getQuery('layout disable-scrolltop-button')) {
	echo '<a id="go-top"><i class="fa fa-angle-up"></i></a>';
}


wp_footer();


echo '</body></html>';
