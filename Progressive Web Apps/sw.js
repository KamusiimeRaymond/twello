//load files into cache
self.addEventListener('install', event => {
    console.log('Service worker install event!');
    event.waitUntil(                //waits for the last promise to be fulfilled
        cache.open(cacheName)               //open cache    returns a promise
            .then(cache => {
                return cache.addAll(resourcesToPrecache);   //list of resources to load to cache
        })
    );
});


self.addEventListener('activate', event => {
    console.log('Activate event!');
});



self.addEventListener('fetch', event => {
    console.log('Fetch intercepted for:', event.request.url);
});



//files to be cached
const cacheName = 'cache-v1';
const resourcesToPrecache = [
    '/',
    'index.html',
    'styles/main.css',
    'images/DiaKonia.png',
    'images/r1.jpg',
    'images/r2.png',
    'images/r3.png',
];