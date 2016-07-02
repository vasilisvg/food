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
</head>
<body class="recipe-list">
	<header>
		<h1>Vasilis’ food</h1>
	</header>
<?php
$home = 1;
include 'recepten.php'; ?>
</body>
</html>
