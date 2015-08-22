var css = {};

function bindSubNavs() {
	$('.sub_nav_anchor').mouseenter(function(e){
			e.preventDefault();
			$('.drop_down').hide();
			
			var trigger = $(this);
			var id = '#'+$(this).attr('rel');
			
			css.id = {background:$(trigger).css('background'), color:$(trigger).css('color')};
			
			stopTimer(trigger);
			
			$(trigger).css('background', '#308fbf');//rgba(48, 143, 191, 0.75)');
			$(trigger).css('color', '#fff');
			
			var left = $(trigger).position().left;
			var top = $(trigger).position().top + $(this).height() + 4;
			
			$(id).css('left', left+'px');
			$(id).css('top', top+'px') ;
			$(id).css('z-index', '200');
			$(id).slideDown('fast', null, function(){
					/*$(trigger).css('background', 'rgba(48, 143, 191, 0.75)');
					$(trigger).css('color', '#fff');*/
				});
			
			$(this).mouseout(function(){
				stopTimer(trigger);
				startTimer(trigger);
				});
			$(id).mouseover(function(){
					stopTimer(trigger);
				});
				
			$(id).mouseout(function(){
					stopTimer(trigger);
					startTimer(trigger);
				});
		});
}


var curr_obj = null;

function startTimer(obj) {
	stopTimer(obj);
	curr_obj = obj;
	$(obj).animate(
		{
			dummy:0
		},
		125,
		null,
		function(){
			hideSubnav(obj);
			}
		);
}

function stopTimer(obj) {
	if(obj != null) $(obj).stop(true, false);
}

function hideSubnav(obj) {
	var id = '#'+$(obj).attr('rel');
	
	$(id).css('z-index', '2');
	$(id).slideUp(120, null, function(){	
		$(obj).css('background', 'none');//css.id.background);
		$(obj).css('color', '#308fbf');//css.id.color);
		});
}