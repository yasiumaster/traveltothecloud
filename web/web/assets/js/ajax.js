var convert = function(base64Input) {
	$.ajax('https://asyf0ysjqd.execute-api.us-east-1.amazonaws.com/tttc/calllex', {
		type: "POST",
		data: base64Input
	}).then(
	function success(data) {
		var decoded = JSON.parse(data).Payload;
		decoded = decoded.substring(1);
		decoded = decoded.substring(0, decoded.length - 1);
		// var snd = new Audio("data:audio/mpeg;base64," + decoded);
		// snd.play();
		console.log(decoded);
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
		fun();
	});
}