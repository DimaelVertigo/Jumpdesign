<?php

class ffThemeAssetsIncluder extends ffThemeAssetsIncluderAbstract {

	protected $google_fonts_list = array();

	public function isAdmin() {
		$styleEnqueuer = $this->_getStyleEnqueuer();
		$scriptEnqueuer = $this->_getScriptEnqueuer();

		$styleEnqueuer->addStyleTheme( 'wp-color-picker' );
		$scriptEnqueuer->addScript( 'wp-color-picker');
	}

	private function _includeCss() {
	}

	private function _includeJs() {
		$scriptEnqueuer = $this->_getScriptEnqueuer();


		$scriptEnqueuer->addScriptFramework(
			'ff-frslib',
			'/framework/frslib/src/frslib.js',
			array( 'jquery' ),
			array('jquery'),
			true
		);

	}

	public function isNotAdmin() {
		$this->_includeCss();
		$this->_includeJs();
	}
}




