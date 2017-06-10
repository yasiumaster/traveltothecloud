importScripts('https://www.gstatic.com/firebasejs/3.9.0/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/3.9.0/firebase-messaging.js');

var config = {
	apiKey: "AIzaSyB8Ku-V1PGo55Qz84M7ZSUMfvk_uZfBWXI",
	authDomain: "orderassistant-d5b27.firebaseapp.com",
	messagingSenderId: "96949882488",
};
firebase.initializeApp(config);
self.tttc = {};

const messaging = firebase.messaging();


self.addEventListener('notificationclick', function (e) {
    e.notification.close();
    var promise = new Promise(function (resolve) {
        setTimeout(resolve, 1000);
    }).then(function () {
        return clients.openWindow(self._edrone.data.locator);
    });
    e.waitUntil(promise);
});
