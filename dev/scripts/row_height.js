function evenRowHeight() {
	$('.row').each(function(index, element) {
		var max_h = 0;
		$(element).children('div').each(function(index, element) {
			max_h = Math.max($(element).height(), max_h);
		});
		$(element).children('div').css('height', max_h+'px');
     });
}