// JavaScript Document
function setModuleHeights() {
	//		For each .row
	$('.row').each(function(){
		var h = 0;
		//		Check each child for a taller height
		$(this).children().each(function(i){
			test_h = $(this).height();
			h = Math.max(test_h, h);
		});
		
		//		Set each child in the row to the max height.
		$(this).children().each(function(i){
			$(this).height(h);
		});
	});
}