<?php

class ffMetaBoxPortfolioSingleView extends ffMetaBoxView {
	protected function _requireAssets() {
		ffContainer::getInstance()->getScriptEnqueuer()->getFrameworkScriptLoader()->requireFfAdmin();
        ffContainer::getInstance()->getScriptEnqueuer()->getFrameworkScriptLoader()->requireFfAdmin()->requireFrsLibOptions()->requireSelect2();
        ffContainer::getInstance()->getScriptEnqueuer()->addScriptTheme('ff-portfolio-single-ajax-loader', '/framework/adminScreens/metaBoxes/metaBoxPortfolioSingle/ajaxLoader.js');
	}

	public function requireModalWindows() {
		ffContainer::getInstance()->getModalWindowFactory()->printModalWindowManagerLibraryColor();
		ffContainer::getInstance()->getModalWindowFactory()->printModalWindowManagerLibraryIcon();
		return;
	}

    protected function _render( $post )
    {
        ffContainer()->getOptionsFactory()->createOptionsPrinterDataboxGenerator()->printAll();
        echo '<div class="ff-repeatable-spinner"></div>';
        echo '<div class="ff-post-id-holder" style="display:none;">'.ff_wp_kses($post->ID).'</div>';
    }

    public function ajaxRequest( ffAjaxRequest $ajaxRequest ) {
        $this->_renderAjax( $ajaxRequest->data['postId'] );
    }

	protected function _renderAjax( $postId ) {
		ffContainer::getInstance()->getWPLayer()->add_action('admin_footer', array($this,'requireModalWindows'), 1);

		$fwc = ffContainer::getInstance();

		$s = $fwc->getOptionsFactory()->createOptionsHolder('ffComponent_Theme_LayoutOptions')->getOptions();


		$value = $fwc->getDataStorageFactory()->createDataStorageWPPostMetas_NamespaceFacade(  $postId )->getOption('onepage');
		$value = unserialize( base64_decode( $value ));

		$printer = $fwc->getOptionsFactory()->createOptionsPrinterJavascriptConvertor( $value, $s );
		$printer->setNameprefix('onepage');
		echo  $printer->walk();
	}

	protected function _save( $postId ) {

		$fwc = ffContainer::getInstance();
		$saver = $fwc->getDataStorageFactory()->createDataStorageWPPostMetas_NamespaceFacade( $postId );

		$s = $fwc->getOptionsFactory()->createOptionsHolder('ffComponent_Theme_LayoutOptions')->getOptions();
		$postReader = $fwc->getOptionsFactory()->createOptionsPostReader($s);
		$value = $postReader->getData('onepage');

		$valueNew = base64_encode(( serialize( $value ) ) );

		$saver->setOption( 'onepage' , $valueNew );
	}
}