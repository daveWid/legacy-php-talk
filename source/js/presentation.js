/**
 * The "glue" for the presentation.
 *
 * @author    Dave Widmer <dave@davewidmer.net>
 */

/*global hljs:true, jQuery:true */
(function($){
	$.deck('.slide', {
		selectors: {
			container: 'body > article'
		}
	});

	$('pre code').each( function(i, e){
		hljs.highlightBlock(e);
	});
})(jQuery);