<?php

class ffTheme extends ffThemeAbstract {


	protected function _setDependencies() {

	}

	protected function _registerAssets() {
		$fwc = $this->_getContainer()->getFrameworkContainer();
		$fwc->getAdminScreenManager()->addAdminScreenClassName('ffAdminScreenThemeOptions');
		$fwc->getMetaBoxes()->getMetaBoxManager()->addMetaBoxClassName('ffMetaBoxPortfolio');
		$fwc->getMetaBoxes()->getMetaBoxManager()->addMetaBoxClassName('ffMetaBoxPortfolioSingle');
		$fwc->getMetaBoxes()->getMetaBoxManager()->addMetaBoxClassName('ffMetaBoxOnePage');
		$fwc->getMetaBoxes()->getMetaBoxManager()->addMetaBoxClassName('ffMetaBoxPageTitle');
		$fwc->getMetaBoxes()->getMetaBoxManager()->addMetaBoxClassName('ffMetaBoxPostSingle');

		$fwc->getWidgetManager()->addWidgetClassName('ffWidgetTwitter');
		$fwc->getWidgetManager()->addWidgetClassName('ffWidgetContactUs');
		$fwc->getWidgetManager()->addWidgetClassName('ffWidgetLatestNews');
		$fwc->getWidgetManager()->addWidgetClassName('ffWidgetRecentPosts');
		$fwc->getWidgetManager()->addWidgetClassName('ffWidgetLatestPortfolio');
	}

	protected function _run() {
	}

	protected function _ajax() {

	}
}