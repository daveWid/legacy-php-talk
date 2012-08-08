/**
 * The "glue" for the presentation.
 *
 * @author    Dave Widmer <dave@davewidmer.net>
 *//*global hljs:false, jQuery:false */(function(e){e.deck(".slide",{selectors:{container:"body > article"}});e("pre code").each(function(e,t){hljs.highlightBlock(t)});e('[contenteditable="true"]').on("blur",function(){hljs.highlightBlock(this)})})(jQuery);