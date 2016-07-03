<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Security-Policy" content="default-src 'self'; style-src 'unsafe-inline' https://fonts.typotheque.com/; font-src *.amazonaws.com/">
	<title><?php echo $title; ?> — Vasilis’ Recipes</title>
	<!-- <link rel="manifest" href="../manifest.json"> -->
	<link rel="stylesheet" href="https://fonts.typotheque.com/WF-023273-009420.css">
	<style>
<?php
include '../css.css';
$h = mt_rand(0,259);
while($i < 15) {
	$h += 83;
	$s = mt_rand(50,60);
	$l = 89;
	echo ".item-$i { background: hsl($h, $s%, $l%); }";
	$i++;
}
?>
