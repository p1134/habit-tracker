// public/sw.js

const CACHE_NAME = 'habitify-cache-v1';
const urlsToCache = [
  '/',                         // start_url
  '/manifest.json',            // manifest
  '/build/runtime.js',         // runtime chunk z Encore
  '/style/main.css',           // Twój ręcznie ładowany CSS
  '/icons/logo_habitify.png',  // ikona 192×192
  '/icons/logo_habitify_512.png'
];

// 1) Install – dodajemy zasoby do cache
self.addEventListener('install', event => {
  event.waitUntil(
    caches.open(CACHE_NAME)
      .then(cache => cache.addAll(urlsToCache))
      .then(() => self.skipWaiting())
  );
});

// 2) Activate – usuwamy stare cache’e
self.addEventListener('activate', event => {
  event.waitUntil(
    caches.keys().then(cacheNames =>
      Promise.all(
        cacheNames.map(name => {
          if (name !== CACHE_NAME) {
            return caches.delete(name);
          }
        })
      )
    ).then(() => self.clients.claim())
  );
});

// 3) Fetch – cache-first, a w tle aktualizujemy
self.addEventListener('fetch', event => {
  event.respondWith(
    caches.match(event.request).then(cached => {
      if (cached) {
        return cached;
      }
      return fetch(event.request).then(networkResponse => {
        if (!networkResponse || networkResponse.status !== 200 || networkResponse.type !== 'basic') {
          return networkResponse;
        }
        const responseToCache = networkResponse.clone();
        caches.open(CACHE_NAME).then(cache => cache.put(event.request, responseToCache));
        return networkResponse;
      });
    }).catch(() => {
      // fallback offline—możesz tu podmienić np. '/offline.html'
      return caches.match('/');
    })
  );
});
