// JavaScript Document
﻿
function initHomeSlides() {
	$("#slideshow").cycle({
		fx					:"fade",
		speed				:1000,
		timeout				:5000,
		delay				:2000,
		pause				:true,
		fastOnEvent			:250,
		requeueOnImageNotLoaded	:true,
		pager				:"#slideshow_nav",
		pagerAnchorBuilder		:anchorBuilder,
		pauseOnPagerHover		:true//,
		//activePagerClass		:"slides_anchor_active"
	});
}

function anchorBuilder(ind, elem) {
	var ret = '<a href="javascript:;" title="'+$(elem).attr('title')+'" class="slides_anchor">&nbsp;</a>';
	
	return ret;
}