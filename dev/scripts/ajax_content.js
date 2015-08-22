var hashes;
var ie7 = false;

function initAjaxContent(ary, is_ie7) {
	hashes = ary;
	ie7 = (is_ie7 == 1) ? true : false;
	//alert(ie7);
	
	$('.secondary_navigation_tab').click(function(e){
		e.preventDefault();
		var href = $(this).attr('href');
		location.hash = href;
	});
	
	
				//alert( window.location.toString().substring(0, 10));
	if(!ie7) { 
		$(window).bind( 'hashchange', function(e) {
			getAjaxContent(location.hash);
		});
	} else {
		$('.secondary_navigation_tab').click(function(e){
				e.preventDefault();
				loc = window.location.toString();
				window.location = loc.substring(0, loc.indexOf('#', 0)) + $(this).attr('href');
				window.location.reload();
				//$(document).load();
			});
	}
	
	getAjaxContent(location.hash);
	
}

var hash;
var blogs = {'weightloss-news':'http://inlandempireweightloss.tumblr.com', 'office-news':'http://officenewsatiewl.tumblr.com'};

function getAjaxContent() {
	//alert('loc: '+location.hash);
	hash = location.hash;
	hash = (hash.length > 0) ? hash.substr(hash.indexOf('#')+1, hash.length) : hashes[0];
	hash = (jQuery.inArray(hash, hashes) != -1) ? hash : hashes[0];

	var id = '#'+hash+'_tab';
	id = id.replace(/%20/gi, '-');
	id = id.replace(/ /gi, '-');
	
	$('.secondary_navigation_tab').each(function(index, element) {
			$(element).removeClass('current');
          });
	$(id).addClass('current');
	
	var url = './tabbed-content/'+hash + '-content.php?rand='+Math.random();
	
	if(!ie7) {
	
		$('#ajax_content').fadeOut('fast', null, function(){
				$('#ajax_content').empty();
				$('.tabbed_content').append('<div id="preloader"><p style="margin:20px 0 0 20px; font-size:18px; color:#308fbf;">Loading...</p></div>');
				$('#ajax_content').load(url, function(){
					
					$('#preloader').remove();
					
					$('.tabbed_content').stop(true, false);
					
					//alert($('#ajax_content').html());
					
					$('.tabbed_content').animate(
						{
							height:	($('#ajax_content').outerHeight() + 20)
						},
						500,
						function(){
							$('#ajax_content').fadeIn('fast', null, function(){
									doSectionBindings();
								});
						}
					);
					
					if($('#tumblr_news_link').html().length > 0) {
						$('#tumblr_news_link').attr('href', blogs[hash]);
					}
				});
			});
	} else {
		$('#ajax_content').load(url);
		$('.secondary_navigation_tab').each(function(index, element) {
			
               if($(element).attr('href').indexOf(hash) <=0) {
				$(element).parent().css('background', '#c7e1ed');
				$(element).css('color', '#fff');
			}
          });
					
		if($('#tumblr_news_link').html().length > 0) {
			$('#tumblr_news_link').attr('href', blogs[hash]);
		}
	}
}

/////////////////////////////////////
//		GENERAL
function doSectionBindings() {
	switch(hash) {
		case 'ideal-weight':
		bindIdealWeight();
		break;
		
		case 'body-fat':
		bindBFC();
		break;
	}
}

function showResult(str, ok, font_size) {
	ok = ok == undefined ? true : ok;
	font_size = font_size == undefined ? '' : ' font-size:'+font_size+'px;';
	if(ok) $('#calc_result').html('<h3 style="display:none;'+font_size+'">'+str+'</h3>');
	else $('#calc_result').html('<p>'+str+'</p>');
	
	if(Number($('#calc_result').css('opacity')) < 1) $('#calc_result').animate({opacity:1}, 'fast');
	$('#calc_result h3').fadeIn();
}
/*
function clearResult() {
	$('#calc_result p').fadeOut('fast', null, function(){
			$('#calc_result p').remove();
		});
	$('#calc_result h3').fadeOut('fast', null, function(){
			$('#calc_result h3').remove();
		});
}*/

function showInfo(obj) {
	//console.log('*');
	var id = '#'+$(obj).attr('rel');
	var top = $(obj).parent().position().top + 'px';	
	var left = $(obj).parent().position().left + 'px';
	
	$(id).css('top', top);
	$(id).css('left', left);
	$(id).css('z-index', '100');
	$(id).fadeIn('fast', null, function(){
			$(id).click(function(e){
					$(id).hide();
				});
			$('.closer').click(function(e){
					e.preventDefault();
					$(id).hide();
				});
		});
}
//		GENERAL
/////////////////////////////////////


/////////////////////////////////////
//		BMI
function calculateBMI() {
	var inches = Math.abs(Number($('#inches').val())) + feetToInches($('#feet').val());
	var pounds = Math.abs(Number($('#pounds').val()));
	
	var bmi = Number(pounds / (inches * inches) * 703).toFixed(1);
	
 	if(bmi.toString() != 'NaN') {
		showResult(bmi, true);
	} else {
		showResult('Please Enter Values', false);
	}
}
//		BMI
/////////////////////////////////////



/////////////////////////////////////
//		Ideal Weight
var frames = {
	'SMALL'		:0,
	'MEDIUM'		:1,
	'LARGE'		:2
	};

function bindIdealWeight() {
	//console.log('***');
	$('.show_info').click(function(e){
		e.preventDefault();
		showInfo($(this));
	});
	$('.select_input').change(function(e){
		e.preventDefault();
		if($('.select_input option:selected').val().indexOf('learn') >= 0) {
			showInfo($('.select_input option:selected'));
			$(this).val('select');
			
		}
	});
}

function initIdealWeightCalculation() {
	var inches = Math.abs(Number($('#inches').val())) + feetToInches($('#feet').val());
	var size = Number(frames[$('#frame_size').val()]);
	var sex = $('#sex').val();
	
	if(size != 'select' && sex != 'select') {
		if(inches.toString() != 'NaN') {
			calculateIdealWeight(inches, size, sex);
		} else {
			showResult('Please enter<br />feet &amp; inches.', false);
		}
	} else {
		showResult('Please enter all info.', false);
	}
	
}

function calculateIdealWeight(inches, size, sex) {
	var
	result = ''
	clothing_weight = (sex == 'FEMALE') ? 3 : 0;
	
	if(sex == 'FEMALE') {
		result = Number(
			109 + clothing_weight + 2.99 * (inches - 60) + Math.pow((7 * size), 1.2)
		);
		
		range = result/20;
		
	} else {									//	MALE
		var e1 = Number(inches/69);
		var e2 = Number(Math.pow(size, 1.2));
		var e3 = Number(inches/67);
		
		result = Number(
			124 + clothing_weight + 2.15 * (Math.pow((inches-60), (e1))) + Math.pow( (7.6*(e2)), e3 )
		);
		
		//range = ((result/25)*Math.pow(size, 0.6));
		var r1 = Math.pow(0.9, size);
		range = (result/29.5) * Math.pow((size+r1), 0.6);
		
	}
	
	var min = (result - range).toFixed(0);
	var max = (result + range).toFixed(0);
	
	showIdealResult(Math.round(result), min, max);
	
}

function showIdealResult(ideal, min, max) {
	$('#calc_result').html('<div class="hidden_result" style="display:none;"><h3 style="margin-top:20px;">'+ideal+'</h3><p class="min_max_result">' + min + ' - ' + max + '</p></div>');
	if(Number($('#calc_result').css('opacity')) < 1) $('#calc_result').css('opacity', '1');
	$('#calc_result').show();
	$('.hidden_result').fadeIn();
}

//		Ideal Weight
/////////////////////////////////////


/////////////////////////////////////
//		Waist / Hip
function calculateWaistHip(){
	var w = Math.abs(Number($('#waist').val()));
	var h = Math.abs(Number($('#hip').val()));
	
	var result = (w/h).toFixed(2);
	
	if(result.toString() != 'NaN') {
		showResult(result, true);
	} else {
		showResult('Please enter<br />both Hip and Waist.', false);
	}
	
	$('#warning').hide();
	
	if(result > 0.8) {
		$('#warning').fadeIn();
	}
		
}
//		Waist / Hip
/////////////////////////////////////


/////////////////////////////////////
//		BFC
var expanded = false;
function bindBFC() {
	$('.select_input').change(function(e){
		e.preventDefault();
		//expanded = true;
		var sex = $('.select_input option:selected').val();
		if(sex == 'FEMALE') {
			expanded = true;
			$('.tabbed_content').animate(
					{
						height:	($('#ajax_content').outerHeight() + 50)
					},
					500,
					null,
					function(){
							$('.female_measurement').show();
						}
					);
			//$('#measurement_h').fadeIn();
			
		} else if ((sex == 'MALE' || sex == 'select') && expanded) {
			expanded = false;
			$('.female_measurement:visible').hide()
			$('.tabbed_content').animate(
					{
						height:	($('#ajax_content').outerHeight() + 20)
					},
					500
					);
			//$('#measurement_h').fadeOut();
			
		}
			
		});
}

function calculateBodyFatContent() {
	var sex = $('#sex').val();
	
	if(sex == 'MALE') {					//	MALE
		var data = {
			'weight' 	: Math.abs(Number($('#pounds').val())),
			'feet' 	: Math.abs(Number($('#feet').val())),
			'inches' 	: Math.abs(Number($('#inches').val())),
			'waist'	: Math.abs(Number($('#waist').val())),
			'neck' 	: Math.abs(Number($('#neck').val()))
		};
		
		var error = checkData(data);
			//console.log('e : ' + error);
		if(error !== true) {
			//doMaleBFC(weight, waist);
			doMaleBFC(data);
		} else {
			showResult('Please enter all info.', false);
		}
		
	} else if (sex == 'FEMALE') {				//	FEMALE
		var data = {
			'weight' 	: Math.abs(Number($('#pounds').val())),
			'feet' 	: Math.abs(Number($('#feet').val())),
			'inches' 	: Math.abs(Number($('#inches').val())),
			'waist'	: Math.abs(Number($('#waist').val())),
			'neck' 	: Math.abs(Number($('#neck').val())),
			'hip' 	: Math.abs(Number($('#hip').val()))
		};
		
		var error = checkData(data);
		/*
		var wrist = Math.abs(Number($('#wrist').val()));
		var hip = Math.abs(Number($('#hip').val()));
		var forearm = Math.abs(Number($('#forearm').val()));
		*/
		if(error !== true) {
			//doFemaleBFC(weight, waist, wrist, hip, forearm);
			doFemaleBFC(data);
		} else {
			showResult('Please enter all info.', false);
		}
		
	} else {
		showResult('Please enter all info.', false);
	}
	
	
	
	/*
	if(weight == 'NaN' || waist == 'NaN' || sex == 'select') {
		showResult('Please enter all info.', false);
	} else {
		if(sex == 'MALE') {
			doMaleBFC(weight, waist);
		} else {
			
			var wrist = Math.abs(Number($('#wrist').val()));
			var hip = Math.abs(Number($('#hip').val()));
			var forearm = Math.abs(Number($('#forearm').val()));
			
			
			if(wrist == 'NaN' || hip == 'Nan' || forearm == 'NaN') {
				showResult('Please enter all info.', false);
			} else {
				doFemaleBFC(weight, waist, wrist, hip, forearm);
			}
		}
	}*/
}


/*
For men (in inches):
%Fat = 86.010*LOG(abdomen - neck) - 70.041*LOG(height) + 36.76
*/

function doMaleBFC(data) {
	//console.log('do male');
	var height = data.inches + feetToInches(data.feet);
	//console.log('h : ' + height);
	var fat_per = ((86.010 * Math.log(data.waist - data.neck) / Math.log(10)  - 70.041 * Math.log(height) / Math.log(10) + 36.76)/100).toFixed(2);
	//console.log(fat_per);
	
	var fat = Math.round(data.weight * fat_per);
	var lean = data.weight - fat;
	
	
	showBFCResult(lean, fat, (fat_per*100).toFixed(0));
}

/*function doMaleBFC(weight, waist) {
	//console.log('do male');
	var f1 = (weight * 1.082) + 94.42;
	var f2 = waist * 4.15;
	
	var lean = (f1 - f2).toFixed(0);
	var fat = (weight - lean).toFixed(0);
	var per = (fat*100/lean).toFixed(0);
	
	showBFCResult(lean, fat, per);
}*/


/*
For women, all measurements in inches:
%Fat = 163.205*LOG(abdomen + hip - neck) - 97.684*LOG(height) - 78.387*/
function doFemaleBFC(data) {	//weight, waist, wrist, hip, forearm) {
	/*var f1 = (weight * 0.732) + 8.987
	var f2 = wrist/3.14;
	var f3 = waist * 0.157;
	var f4 = hip * 0.294;
	var f5 = forearm * 0.434;
	
	var lean = (f1 + f2 - f3 - f4 + f5).toFixed(0);
	var fat = (weight - lean).toFixed(0);
	var per = (fat*100/lean).toFixed(0);*/
	
	var height = data.inches + feetToInches(data.feet);
	var fat_per = ((163.205 * Math.log(data.waist + data.hip - data.neck) / Math.log(10) - 97.684 * Math.log(height) / Math.log(10) - 78.387)/100).toFixed(2);
	
	var fat = Math.round(data.weight * fat_per);
	var lean = data.weight - fat;
	
	showBFCResult(lean, fat, (fat_per*100).toFixed(0));
}

function showBFCResult(lean, fat, per, ok) {
	ok = ok == undefined ? true : ok;
	
	//font_size = font_size == undefined ? '' : ' font-size:'+font_size+'px;';
	
	if(ok) {
		
		$('#calc_result').html('<div class="hidden_result" style="display:none;"><table><tbody><tr><td class="label_d">Lean Body Mass</td><td>: '+lean.toString() + ' lbs.'+'</td></tr><tr><td class="label_d">Body Fat Weight</td><td>: '+fat.toString() + ' lbs.'+'</td></tr><tr><td class="label_d">Body Fat Percentage</td><td>: '+per+'%</td></tr></tbody></table></div>');
	} else {
		$('#calc_result').html('<div class="hidden_result" style="display:none;"><p>'+str+'</p></div>');
	}
	
	if(Number($('#calc_result').css('opacity')) < 1) $('#calc_result').css('opacity', '1');
	$('#calc_result').show();
	$('.hidden_result').fadeIn();
}

//		BFC
/////////////////////////////////////

function feetToInches(val) {
	return Math.abs(Number(val) * 12);
}

function checkData(data) {
	var e = false;
	$.each(data, function(i, v){
		//console.log(i + ' : ' + v);
		if(v.toString() == 'NaN') {
			e = true;
			
		}
	});
	
	return e;
}