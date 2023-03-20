// Description: Service worker registration
if ('serviceWorker' in navigator) {
    window.addEventListener('load', function () {
        navigator.serviceWorker.register('/sw.js')
            .then(function (registration) {
                console.log('Service worker registered with scope:', registration.scope);
            }, function (error) {
                console.log('Service worker registration failed:', error);
            });
    });
}
