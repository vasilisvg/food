<?php
include 'headers.php';
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Vasilis likes cooking</title>
	<link rel="stylesheet" href="https://fonts.typotheque.com/WF-023273-009420.css">
	<style>
<?php
include 'css.css';
?>
.recipe-list h1 {
	font-size: 25vw;
}
	</style>
	<!-- <link rel="manifest" href="manifest.json"> -->
</head>
<body class="recipe-list">
	<header>
		<h1>Vasilis’ food</h1>
	</header>
<?php
$home = 1;
include 'recepten.php'; ?>
<script>
//This is the service worker with the Cache-first network

//Add this below content to your HTML page, or add the js file to your page at the very top to register sercie worker
if (navigator.serviceWorker.controller) {
  console.log('[PWA Builder] active service worker found, no need to register')
} else {

//Register the ServiceWorker
  navigator.serviceWorker.register('pwabuilder-sw.js').then(function(reg) {
    console.log('Service worker has been registered for scope:'+ reg.scope);
  });
}
</script>
</body>
</html>
