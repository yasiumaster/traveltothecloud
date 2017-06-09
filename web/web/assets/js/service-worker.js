importScripts('https://www.gstatic.com/firebasejs/3.9.0/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/3.9.0/firebase-messaging.js');

var config = {
	apiKey: "AIzaSyB8Ku-V1PGo55Qz84M7ZSUMfvk_uZfBWXI",
	authDomain: "orderassistant-d5b27.firebaseapp.com",
	messagingSenderId: "96949882488",
};
firebase.initializeApp(config);


const messaging = firebase.messaging();

messaging.setBackgroundMessageHandler(function(payload) {
	console.log('Received background message ', payload);
	const notificationTitle = 'Background Message Title';
	const notificationOptions = {
		body: 'Background Message body.'
	};

	return self.registration.showNotification(notificationTitle,
		notificationOptions);
});
