jQuery(document).ready(function(jQuery) {
	bindIdealWeight();
	bindBFC();

	jQuery('#bmi_sumit').click(function(){
		calculateBMI();
	});
	jQuery('#hipwaist_submit').click(function(){
		calculateWaistHip();
	});

	jQuery('.info-trigger').on('click', function(event){
		event.preventDefault();
		var target = '#'+jQuery(this).attr('href');
		jQuery(window).scrollTo(target);
	});

	jQuery('.scroll-to-top').on('click', function(event){
		event.preventDefault();
		jQuery(window).scrollTo(0);
	});
});

function showResult(elem, str, ok, font_size) {

	ok = ok == undefined ? true : ok;
	font_size = font_size == undefined ? '' : ' font-size:'+font_size+'px;';
	if(ok) jQuery(elem).html('<h3 style="'+font_size+'">'+str+'</h3>');
	else jQuery(elem).html('<p>'+str+'</p>');
	jQuery(elem).css('opacity', 0);
	/*if(Number(jQuery(elem).css('opacity')) < 1)*/ jQuery(elem).animate({opacity:1}, 'fast');
	jQuery('#calc_result h3').fadeIn();
}

/////////////////////////////////////
//		BMI
function calculateBMI() {
	var inches = Math.abs(Number(jQuery('#inches').val())) + feetToInches(jQuery('#feet').val());
	var pounds = Math.abs(Number(jQuery('#pounds').val()));
	
	var bmi = Number(pounds / (inches * inches) * 703).toFixed(1);
	//console.log('*'+bmi);
 	if(bmi.toString() != 'NaN') {
		showResult('#bmi_result', bmi, true);
	} else {
		showResult('#bmi_result', 'Please Enter Values', false);
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
	////console.log('***');
	jQuery('.show_info').click(function(e){
		e.preventDefault();
		showInfo(jQuery(this));
	});
	jQuery('#frame_size').change(function(e){
		e.preventDefault();
		if(jQuery('#frame_size option:selected').val().indexOf('learn') >= 0) {
			showInfo(jQuery('#frame_size option:selected'));
			jQuery(this).val('select');
			
		}
	});
	jQuery('#ideal_submit').click(initIdealWeightCalculation);
}

function initIdealWeightCalculation() {
	var inches = Math.abs(Number(jQuery('#ideal_inches').val())) + feetToInches(jQuery('#ideal_feet').val());
	var size = Number(frames[jQuery('#frame_size').val()]);
	var sex = jQuery('#ideal_sex').val();
	
	if(size != 'select' && sex != 'select') {
		if(inches.toString() != 'NaN') {
			calculateIdealWeight(inches, size, sex);
		} else {
			showResult('#ideal_result', 'Please enter<br />feet &amp; inches.', false);
		}
	} else {
		showResult('#ideal_result', 'Please enter all info.', false);
	}
	
}

function calculateIdealWeight(inches, size, sex) {
	var
	result = ''
	clothing_weight = (sex == 'FEMALE') ? 3 : 0;
	
	if(sex == 'FEMALE') {
		result = Number(
			106 + clothing_weight + 2.99 * (inches - 60) + Math.pow((7 * size), 1.2)
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
	
	showIdealResult('#ideal_result', Math.round(result), min, max);
	
}

function showIdealResult(elem, ideal, min, max) {
	jQuery(elem).html('<div class="hidden_result" style="display:none;"><h3 style="margin-top:20px;">'+ideal+'</h3><p class="min_max_result">' + min + ' - ' + max + '</p></div>');
	/*if(Number(jQuery(elem).css('opacity')) < 1) */jQuery(elem).css('opacity', '1');
	jQuery(elem).show();
	jQuery('.hidden_result').fadeIn();
}

//		Ideal Weight
/////////////////////////////////////


/////////////////////////////////////
//		Waist / Hip
function calculateWaistHip(){
	var w = Math.abs(Number(jQuery('#waist').val()));
	var h = Math.abs(Number(jQuery('#hip').val()));
	
	var result = (w/h).toFixed(2);
	
	if(result.toString() != 'NaN' && result.toString().toLowerCase() != 'infinity' && result > 0) {
		showResult('#waisthip_result', result, true);
	} else {
		showResult('#waisthip_result', 'Please enter<br />both Hip and Waist.', false);
	}
	
	jQuery('#warning').hide();
	
	if(result > 0.8 && result.toString().toLowerCase() != 'infinity') {
		jQuery('#warning').fadeIn();
	}
		
}
//		Waist / Hip
/////////////////////////////////////


/////////////////////////////////////
//		BFC
var expanded = false;
function bindBFC() {
	jQuery('.select_input').change(function(e){
		e.preventDefault();
		//expanded = true;
		var sex = jQuery('.select_input option:selected').val();
		if(sex == 'FEMALE') {
			expanded = true;
			jQuery('.tabbed_content').animate(
					{
						height:	(jQuery('#ajax_content').outerHeight() + 50)
					},
					500,
					null,
					function(){
							jQuery('.female_measurement').show();
						}
					);
			//jQuery('#measurement_h').fadeIn();
			
		} else if ((sex == 'MALE' || sex == 'select') && expanded) {
			expanded = false;
			jQuery('.female_measurement:visible').hide()
			jQuery('.tabbed_content').animate(
					{
						height:	(jQuery('#ajax_content').outerHeight() + 20)
					},
					500
					);
			//jQuery('#measurement_h').fadeOut();
			
		}
			
		});
}

function calculateBodyFatContent() {
	var sex = jQuery('#bfc_sex').val();
	//console.log('*sex '+sex);
	if(sex == 'MALE') {					//	MALE
		var data = {
			'weight' 	: Math.abs(Number(jQuery('#bfc_pounds').val())),
			'feet' 	: Math.abs(Number(jQuery('#bfc_feet').val())),
			'inches' 	: Math.abs(Number(jQuery('#bfc_inches').val())),
			'waist'	: Math.abs(Number(jQuery('#bfc_waist').val())),
			'neck' 	: Math.abs(Number(jQuery('#bfc_neck').val()))
		};
		//console.log(data.weight);
		var error = checkData(data);
			console.log('e : ' + error);
		if(!error) {
			//doMaleBFC(weight, waist);
			doMaleBFC('#bodyfat_result', data);
		} else {
			//console.log('male fail');
			showResult('#bodyfat_result', 'Please enter all info.', false);
		}
		
	} else if (sex == 'FEMALE') {				//	FEMALE
		var data = {
			'weight' 	: Math.abs(Number(jQuery('#bfc_pounds').val())),
			'feet' 	: Math.abs(Number(jQuery('#bfc_feet').val())),
			'inches' 	: Math.abs(Number(jQuery('#bfc_inches').val())),
			'waist'	: Math.abs(Number(jQuery('#bfc_waist').val())),
			'neck' 	: Math.abs(Number(jQuery('#bfc_neck').val())),
			'hip' 	: Math.abs(Number(jQuery('#bfc_hip').val()))
		};
		
		var error = checkData(data);
		/*
		var wrist = Math.abs(Number(jQuery('#wrist').val()));
		var hip = Math.abs(Number(jQuery('#hip').val()));
		var forearm = Math.abs(Number(jQuery('#forearm').val()));
		*/
		if(error !== true) {
			//doFemaleBFC(weight, waist, wrist, hip, forearm);
			doFemaleBFC('#bodyfat_result', data);
		} else {
			//console.log('female fail');
			showResult('#bodyfat_result', 'Please enter all info.', false);
		}
		
	} else {
		//console.log('all fail');
		showResult('#bodyfat_result', 'Please enter all info.', false);
	}
	
	
	
	/*
	if(weight == 'NaN' || waist == 'NaN' || sex == 'select') {
		showResult('Please enter all info.', false);
	} else {
		if(sex == 'MALE') {
			doMaleBFC(weight, waist);
		} else {
			
			var wrist = Math.abs(Number(jQuery('#wrist').val()));
			var hip = Math.abs(Number(jQuery('#hip').val()));
			var forearm = Math.abs(Number(jQuery('#forearm').val()));
			
			
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

function doMaleBFC(elem, data) {
	//console.log('do male');
	var height = data.inches + feetToInches(data.feet);
	////console.log('h : ' + height);
	var fat_per = ((86.010 * Math.log(data.waist - data.neck) / Math.log(10)  - 70.041 * Math.log(height) / Math.log(10) + 36.76)/100).toFixed(2);
	////console.log(fat_per);
	
	var fat = Math.round(data.weight * fat_per);
	var lean = data.weight - fat;
	
	
	showBFCResult(elem, lean, fat, (fat_per*100).toFixed(0));
}

/*function doMaleBFC(weight, waist) {
	////console.log('do male');
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
function doFemaleBFC(elem, data) {	//weight, waist, wrist, hip, forearm) {
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
	
	showBFCResult(elem, lean, fat, (fat_per*100).toFixed(0));
}

function showBFCResult(elem, lean, fat, per, ok) {
	ok = ok == undefined ? true : ok;
	
	//font_size = font_size == undefined ? '' : ' font-size:'+font_size+'px;';
	//console.log('elem');
	if(ok) {
		
		jQuery(elem).html('<div class="hidden_result" style="display:none;"><table><tbody><tr><td class="label_d">Lean Body Mass</td><td>: '+lean.toString() + ' lbs.'+'</td></tr><tr><td class="label_d">Body Fat Weight</td><td>: '+fat.toString() + ' lbs.'+'</td></tr><tr><td class="label_d">Body Fat Percentage</td><td>: '+per+'%</td></tr></tbody></table></div>');
	} else {
		jQuery(elem).html('<div class="hidden_result" style="display:none;"><p>'+str+'</p></div>');
	}
	
	// if(Number(jQuery(elem).css('opacity')) < 1) jQuery(elem).css('opacity', '1');
	jQuery(elem).show();
	jQuery('.hidden_result').fadeIn();
}

//		BFC
/////////////////////////////////////

function feetToInches(val) {
	return Math.abs(Number(val) * 12);
}

function checkData(data) {
	var e = false;
	jQuery.each(data, function(i, v){
		console.log('*:'+v.toString());
		if(v.toString() == 'NaN' || v.toString() == '0') {
			e = true;
			
		}
	});
	
	return e;
}




function showInfo(obj) {
	//console.log('*');
	var id = '#'+jQuery(obj).attr('rel');
	var top = jQuery(obj).parent().position().top + 'px';	
	var left = jQuery(obj).parent().position().left + 'px';
	
	jQuery(id).css('top', top);
	jQuery(id).css('left', left);
	jQuery(id).css('z-index', '100');
	jQuery(id).fadeIn('fast', null, function(){
			jQuery(id).click(function(e){
					jQuery(id).hide();
				});
			jQuery('.closer').click(function(e){
					e.preventDefault();
					jQuery(id).hide();
				});
		});
}