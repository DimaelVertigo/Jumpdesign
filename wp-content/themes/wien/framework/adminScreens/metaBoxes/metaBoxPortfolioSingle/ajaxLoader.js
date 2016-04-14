(function($){
	jQuery(document).ready(function($){

		var specification = {};
		specification.metaboxClass = 'ffMetaBoxPortfolioSingle';
		var data = {};
		data.action = 'getOptions';
		data.postId = $('.ff-post-id-holder').html();
		frslib.ajax.frameworkRequest( 'ffMetaBoxManager', specification, data, function( response ){
			$('.ff-repeatable-spinner').hide(500);

			setTimeout(function() {
				$('#PortfolioSingleViewSettings .ff-metabox-normalize-options').html(response);
				frslib.options.functions.initOptionsJS();
			}, 500);
		});

	});
})(jQuery);