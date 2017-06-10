var rx = null;
var convert = function(base64Input) {
	$.ajax('https://asyf0ysjqd.execute-api.us-east-1.amazonaws.com/tttc/calllex', {
		type: "POST",
		data: base64Input
	}).then(
	function success(data) {
		/*var decoded = JSON.parse(data).Payload;
		decoded = decoded.substring(1);
		decoded = decoded.substring(0, decoded.length - 1);
		console.log(decoded.inputTranscript);*/
		data= JSON.parse(data);
		console.log(data.inputTranscript);
		console.log(answers);
		if(( answers.length <= 0 )){
			gcall(data.inputTranscript);
			return;
		}
		if(answers.indexOf(data.inputTranscript) != -1){
			gcall(data.inputTranscript);
			console.log('in answers');
		}else{
			console.log('not in answers');
			startRecTime(gtime,answers,gcall);
		}

	},
	function fail(data, status) {
		console.log('Request failed.  Returned status of ' + status);
	}
	);
};



var polly = function(text,fun){
	$.ajax({
		url : 'https://asyf0ysjqd.execute-api.us-east-1.amazonaws.com/tttc/polly',
		type: "GET",
		data: { speakText : text }
	}).done(function(msg){
		var sound = (msg.presignedUrl);
		$('#gensound')[0].pause();
		$('#gensound')[0].src = sound;
		var playPromise = $('#gensound')[0].play();
		if (playPromise !== undefined) {
			  playPromise.then(function() {
			    // Automatic playback started!
			  }).catch(function(error) {
			    // Automatic playback failed.
			    // Show a UI element to let the user manually start playback.
			  });
		}
		$('#gensound')[0].onended= function(){
			console.log('ok');
			fun();
		}

	});
}

var globAnswes = [];

var globAskes = [];



function finalizationForm(){
	polly('Please confirm if everything is ok',function(){
		startRecTime(2000,['yes','no'],function(option){
			if(option = "yes"){
				polly('Yeach',function(){

				});
			}
		});
	});
}

function checkAll(ida){

	if(typeof(ida)== "undefined"){
		polly('Ok then',function(){
			checkAll(1);
		});
		return;
	}

	if(ida == 1){
		if(globAnswes[1]=='yes'){
			polly('You have ordered an assist on airport',function(){
				checkAll(2);
			});
		}else{
			checkAll(2);
		}
		return;
	}

	if(ida == 2){
		if(globAnswes[2]=='yes'){
			polly('You have ordered the transport at  to '+globAnswes[4],function(){
				checkAll(5);
			});
		}else{
			finalizationForm();
		}
		return;
	}

	if(ida == 5){
		if(globAnswes[5]=='yes'){
			polly('Your dirver will help you get into the car and also with your luggage',function(){
				finalizationForm();
			});
		}else{
			finalizationForm();
		}
		return;
	}


}


$(document).ready(function() {
	polly('Would you like assistance with your ',function(){
		startRecTime(2000,['yes','no'],function(option){
			if(option == 'yes'){
				$('html, body').animate({
        scrollTop: $("#be-the-first").offset().top
    	}, 2000);
				polly('What kind of disability u have?',function(){
					startRecTime(2000,["yes","i'm visually impaired","i'm blind","I'm mute"],function(option){
							if( (option == "i'm blind") || (option == "yes") || (option == "i'm visually impaired")){
								jQuery('#disabilities').val(1);
									polly('Would you like to order an assist on airport',function(){

										startRecTime(2000,['yes','no'],function(option){
											globAnswes[1] = option;
											if(option == 'yes'){
												jQuery('#radio-1').prop('checked', true);
											}else{
												jQuery('#radio-2').prop('checked', true);
											}
												polly('Would you like to order the transport?',function(){
													startRecTime(2000,['yes','no'],function(option){
														globAnswes[2] = option;
														if(option == 'yes'){
															jQuery('#radio-3').prop('checked', true);
															polly('How much earlier you want to be there?',function(){
															startRecTime(2000,[],function(option){
																globAnswes[3] = option;
																jQuery('#nottime').val(parseDate('2017-06-10 10:00',option));
																_getPreciseLocation().then(function(loc){
																	$('#transport-address').val(loc);
																	polly('Your localization is '+loc+'. Would you like to order transport here ?',function(){
																		startRecTime(2000,['yes','no'],function(option){
												                                if(option == 'no'){
												                                  polly('Where would you like to order the transport then?',function(){
																						startRecTime(2000,[],function(option){
																							$('#transport-address').val(option);
																							globAnswes[4] = option;
																							polly('Would you need help with get into vehicle or with your luggage?',function(){
																								startRecTime(2000,['yes','no'],function(option){
																									globAnswes[5] = option;
																									if(option=='yes'){
																										jQuery('#radio-5').prop('checked', true);
																									}else{
																										jQuery('#radio-6').prop('checked', true);
																									}
																									checkAll();
																								});
																							});
																						});
																					});
												                                }else{
												                                	globAnswes[4] = loc;
												                                	polly('Would you need help with get into vehicle or with your luggage?',function(){
																						startRecTime(2000,['yes','no'],function(option){
																							globAnswes[5] = option;
																							if(option=='yes'){
																								jQuery('#radio-5').prop('checked', true);
																							}else{
																								jQuery('#radio-6').prop('checked', true);
																							}
																							checkAll();
																						})
												                                	});

												                                }

																			});
																	});
																});



															});
														});
														}else{
															jQuery('#radio-4').prop('checked', true);
															checkAll();
														}


													});
												});
										});
									});
							}
					});
				});
			}else{
				polly('Alright. See you later',function(){});
			}
		});
	});


});
