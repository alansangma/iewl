var defaultHash;
function initTabs(_defaultHash) {
	defaultHash = _defaultHash;
	
	jQuery('.tab-nav-link').on('click', function(e){
		e.preventDefault();
		var new_hash = jQuery(this).attr('href');
		new_hash = new_hash.substr(0, new_hash.indexOf('-content'));
		window.location.hash = new_hash;
	});
	
	jQuery(window).on('hashchange', function(e){
		handleHash();
	});

	handleHash();

	// jQuery('.show-xs-tabs').on('click', function(event){
	// 	event.preventDefault();
		
	// 	jQuery('#main-container').toggleClass('xs-tabs-enabled');
	// });

	jQuery('.navbar-nav>.dropdown>.dropdown-menu>li>a').on('click', function(event){
		jQuery('.navbar-collapse').removeClass('in');
		jQuery('.navbar-collapse').attr('aria-expanded', 'false');
		jQuery('#main-container').removeClass('xs-tabs-enabled');
		// console.log('*');
	});
}

function handleHash() {
	var hash = window.location.hash.substr(1);
	hash = hash.length==0 ? defaultHash : hash;
	console.log(hash);
	jQuery('#main-container').removeClass('xs-tabs-enabled');
	jQuery('.navbar-collapse').removeClass('in');
	jQuery('.navbar-collapse').attr('aria-expanded', 'false');

	jQuery('.active').removeClass('active');
	jQuery('#'+hash+'-nav').addClass('active');
	jQuery('#'+hash+'-content').addClass('active');
}