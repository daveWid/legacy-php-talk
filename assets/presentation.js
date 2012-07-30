/**
 * The "glue" for the presentation.
 *
 * @author    Dave Widmer <dave@davewidmer.net>
 *//*global hljs:true, jQuery:true */(function(e){e.deck(".slide",{selectors:{container:"body > article"}});e("pre code").each(function(e,t){hljs.highlightBlock(t)})})(jQuery);