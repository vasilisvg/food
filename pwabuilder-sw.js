//This is the service worker with the Cache-first network

var CACHE = 'pwabuilder-precache';
var precacheFiles = [
      'index.php',
      'chicken-broth',
      'chili-con-carne',
      'chocolate-mud',
      'cucumber-salad',
      'drunken-cow',
      'drunken-pig',
      'fakies-fuck-yes',
      'hamburgers',
      'mashed-potatoes',
      'mercimek-corba',
      'meringues',
      'pasta-di-papa',
      'puree-di-papa',
      'roast-chicken',
      'salade-de-carottes',
      'spaghetti-carbonara',
      'tables',
      'tender-tenderloin',
      'tsipoura'
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
