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
		$('#gensound')[0].play();
		$('#gensound')[0].onended= function(){
			console.log('ok');
			fun();
		}
		
	});
}