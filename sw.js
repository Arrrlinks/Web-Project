// Service worker script
const cacheName = 'CesiEnFait';
const staticAssets = [
    '/',
    '/index.php',
    '/style.css',
    '/imgs/logo.png',
    '/manifest.json'
];

self.addEventListener('install', async function () {
    const cache = await caches.open(cacheName);
    cache.addAll(staticAssets);
});

self.addEventListener('fetch', event => {
    const request = event.request;
    event.respondWith(cacheFirst(request));
});

async function cacheFirst(request) {
    const cache = await caches.open(cacheName);
    const cachedResponse = await cache.match(request);
    if (cachedResponse) {
        return cachedResponse;
    } else {
        const xhr = new XMLHttpRequest();
        xhr.open('GET', request.url, true);
        xhr.onload = () => {
            if (xhr.status === 200) {
                cache.put(request, new Response(xhr.responseText));
                return new Response(xhr.responseText);
            }
        };
        xhr.send();
    }
}
