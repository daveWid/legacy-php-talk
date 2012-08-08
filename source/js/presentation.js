/**
 * The "glue" for the presentation.
 *
 * @author    Dave Widmer <dave@davewidmer.net>
 */

/*global hljs:false, jQuery:false */
(function($){
	$.deck('.slide', {
		selectors: {
			container: 'body > article'
		}
	});

	$('pre code').each( function(i, e){
		hljs.highlightBlock(e);
	});

	$('[contenteditable="true"]').on('blur', function(){
		hljs.highlightBlock(this);
	});
})(jQuery);