var parseDate = function(eventDate, offset) {
	//eventDate: 2017-06-10 10:00:00
	//offset 2 hours 30 minutes

	var times = offset.split(" ");


	if(times.length==4) {
		var hours = times[0];
		var minutes = times[2];
	}
	else if(offset.indexOf('hour') > -1) {
		var hours = times[0];
	}
	else if(offset.indexOf('minute') > -1) {
		var minutes = times[0];

	}

	if(typeof(hours)  === undefined) {
		hours = 'zero';
	}

	if(typeof(minutes)  === undefined) {
		minutes = 'zero';
	}

	if(hours != null) {
		hours = COUNTS[hours];
	}

	if(minutes != null) {
		minutes = COUNTS[minutes];
	}
	var momentTime = moment(eventDate).subtract(hours+1, 'hours').subtract(minutes, 'minutes');
	console.log(momentTime);
	return momentTime.format('LLL');
};

var COUNTS = {
	zero: 0,
	a: 1,
	one: 1,
	first: 1,
	two: 2,
	second: 2,
	three: 3,
	third: 3,
	four: 4,
	fourth: 4,
	five: 5,
	fifth: 5,
	six: 6,
	sixth: 6,
	seven: 7,
	seventh: 7,
	eight: 8,
	eighth: 8,
	nine: 9,
	ninth: 9,
	ten: 10,
	tenth: 10,
	eleven: 11,
	eleventh: 11,
	twelve: 12,
	twelfth: 12,
	thirteen: 13,
	thirteenth: 13,
	fourteen: 14,
	fourteenth: 14,
	fifteen: 15,
	fifteenth: 15,
	sixteen: 16,
	sixteenth: 16,
	seventeen: 17,
	seventeenth: 17,
	eighteen: 18,
	eighteenth: 18,
	nineteen: 19,
	nineteenth: 19
};