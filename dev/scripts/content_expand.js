function bindContents(open_class, close_class, container_base) {
	$(open_class).click(function(){
							  closeContents();
							  openContent(this, container_base);
							  });
	$(close_class).click(function(){
							   closeContents();
							   });
}
function closeContents(){
		$('.close:visible').hide();
		$('.full_text:visible').slideUp(250);//, function(){
			$('.short_text:hidden').slideDown(500);//.delay(125).fadeIn(500);
			//});
		
		$('.open:hidden').delay(500).fadeIn();
}

function openContent(obj, container_base) {
	var id = $(obj).attr('id');
	$(container_base+id).children('.open').hide();
	$(container_base+id).children('.short_text').slideUp(250, function(){
		$(container_base+id).children('.full_text').slideDown(250, function(){
			$(container_base+id).children('.close').fadeIn(500);});
	});
			//});
		//});
	
}