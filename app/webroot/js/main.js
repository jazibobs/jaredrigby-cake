$(document).ready(function() {
	$(function(){
	  $('#content').masonry({
	    // options
	    itemSelector : '.post-box',
	    columnWidth : 440,
	    isFitWidth: true,
	    isAnimated: true
	  });
	});
});