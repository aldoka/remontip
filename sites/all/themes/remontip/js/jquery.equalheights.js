(function($){$.fn.equalHeights=function(minHeight,maxHeight){tallest=(minHeight)?minHeight:0;this.each(function(){if($(this).height()>tallest){tallest=$(this).height()}});if((maxHeight)&&tallest>maxHeight)tallest=maxHeight;return this.each(function(){$(this).height(tallest)})}})(jQuery)
jQuery(window).load(function(){
	if(jQuery(".maxheight").length){
	jQuery(".maxheight").equalHeights()}
})

jQuery(window).load(function(){
	if(jQuery(".maxheight2").length){
	jQuery(".maxheight2").equalHeights()}
})