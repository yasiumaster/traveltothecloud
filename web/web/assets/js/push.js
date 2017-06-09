var pushEndpoint;

var config = {
	apiKey: "AIzaSyB8Ku-V1PGo55Qz84M7ZSUMfvk_uZfBWXI",
	authDomain: "orderassistant-d5b27.firebaseapp.com",
	messagingSenderId: "96949882488",
};
firebase.initializeApp(config);
/*navigator.serviceWorker.register('assets/js/service-worker.js')
.then((registration) => {
	const messaging = firebase.messaging();
	messaging.useServiceWorker(registration);
	messaging.requestPermission()
	.then(function() {
		console.log('Notification permission granted.');
		return messaging.getToken();
	})
	.then(function(token) {
		console.log(token);

		$.ajax({
			url : 'save_device_token',
			type: "GET",
			data: { deviceToken : token }
		}).done(function(msg){
			console.log(msg);
		});


		pushEndpoint = token;
	})
	.catch(function(err) {
		console.log('Unable to get permission to notify.', err);
	});

	messaging.onMessage(function(payload) {
		console.log("Message received. ", payload.notification);
		const notificationTitle = payload.notification.title;
		const notificationOptions = {
			body: payload.notification.body
		};
		var notification = new Notification(notificationTitle, notificationOptions);
	});

});*/
