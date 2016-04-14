<?php

class ffWidgetRecentPosts extends ffWidgetDecoratorAbstract {
	protected $_widgetAdminTitle =       'Recent Posts (with image) - Custom Widget';
	protected $_widgetAdminDescription = 'Displays your recent posts';
	protected $_widgetWrapperClasses =   '';
	protected $_widgetName = 'RecentPostsWidget';
    protected $_widgetAdditionalClasses = 'widget_recent_entries';
	protected $_widgetFormSize = ffWidgetDecoratorAbstract::WIDGET_FORM_SIZE_WIDE;
}