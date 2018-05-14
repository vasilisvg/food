//This is the service worker with the Cache-first network

var CACHE = '/likes/food/pwabuilder-precache';
var precacheFiles = [
      '/likes/food/',
      '/likes/food/chicken-broth/',
      '/likes/food/chili-con-carne/',
      '/likes/food/chocolate-mud/',
      '/likes/food/cucumber-salad/',
      '/likes/food/drunken-cow/',
      '/likes/food/drunken-pig/',
      '/likes/food/fakies-fuck-yes/',
      '/likes/food/hamburgers/',
      '/likes/food/mashed-potatoes/',
      '/likes/food/mercimek-corba/',
      '/likes/food/meringues/',
      '/likes/food/pasta-di-papa/',
      '/likes/food/puree-di-papa/',
      '/likes/food/roast-chicken/',
      '/likes/food/salade-de-carottes/',
      '/likes/food/spaghetti-carbonara/',
      '/likes/food/tables/',
      '/likes/food/tender-tenderloin/',
      '/likes/food/tsipoura/',
      'https://fonts.typotheque.com/WF-023273-009420.css',
      'https://s3-eu-west-1.amazonaws.com/fonts-ireland.typotheque.com/WF-023273-009420-000375-0fa0db4de6d3b06cd6a909a01ecd678c.woff2',
      'https://s3-eu-west-1.amazonaws.com/fonts-ireland.typotheque.com/WF-023273-009420-000378-83ed50d0e53490f88b5abcc94999252e.woff2',
      'https://s3-eu-west-1.amazonaws.com/fonts-ireland.typotheque.com/WF-023273-009420-000377-68802e48f8a1f1198bf71ef58ec0e295.woff2',
      'https://s3-eu-west-1.amazonaws.com/fonts-ireland.typotheque.com/WF-023273-009420-000375-0fa0db4de6d3b06cd6a909a01ecd678c.woff',
      'https://s3-eu-west-1.amazonaws.com/fonts-ireland.typotheque.com/WF-023273-009420-000378-83ed50d0e53490f88b5abcc94999252e.woff',
      'https://s3-eu-west-1.amazonaws.com/fonts-ireland.typotheque.com/WF-023273-009420-000377-68802e48f8a1f1198bf71ef58ec0e295.woff'
    ];

//Install stage sets up the cache-array to configure pre-cache content
self.addEventListener('install', function(evt) {
  console.log('The service worker is being installed.');
  evt.waitUntil(precache().then(function() {
    console.log('[ServiceWorker] Skip waiting on install');
      return self.skipWaiting();

  })
  );
});


//allow sw to control of current page
self.addEventListener('activate', function(event) {
console.log('[ServiceWorker] Claiming clients for current page');
      return self.clients.claim();

});

self.addEventListener('fetch', function(evt) {
  console.log('The service worker is serving the asset.'+ evt.request.url);
  evt.respondWith(fromCache(evt.request).catch(fromServer(evt.request)));
  evt.waitUntil(update(evt.request));
});


function precache() {
  return caches.open(CACHE).then(function (cache) {
    return cache.addAll(precacheFiles);
  });
}


function fromCache(request) {
  //we pull files from the cache first thing so we can show them fast
  return caches.open(CACHE).then(function (cache) {
    return cache.match(request).then(function (matching) {
      return matching || Promise.reject('no-match');
    });
  });
}


function update(request) {
  //this is where we call the server to get the newest version of the 
  //file to use the next time we show view
  return caches.open(CACHE).then(function (cache) {
    return fetch(request).then(function (response) {
      return cache.put(request, response);
    });
  });
}

function fromServer(request){
  //this is the fallback if it is not in the cahche to go to the server and get it
return fetch(request).then(function(response){ return response})
}
