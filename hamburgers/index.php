<?php
$title = 'Hamburgers';
include '../head.php';
?>
header h1 {
	font-size: 23.7vw;
}
	</style>
</head>
<body>
	<article class="recipe">
		<header>
			<h1><?php echo $title; ?></h1>
		</header>

		<aside>
			<h2>Ingredients</h2>
			<ul>
				<li><span class="item-1">600 gr ground beef</span></li>
				<li><span class="item-2">1 finely chopped onion</span></li>
				<li><span class="item-3">Quite some thyme</span></li>
				<li><span class="item-4">Quite some oregano</span></li>
				<li><span class="item-5">1 egg yolk</span></li>
				<li><span class="item-6">1 tablespoon of paprika powder</span></li>
				<li><span class="item-7">Pepper and salt</span></li>
				<li><span class="item-8">Bread</span></li>
				<li><span class="item-9">Stuff</span></li>
			</ul>
		</aside>
		<div>
			<h2>Prep</h2>
			<p>Put everything (except for the <span class="item-8">bread</span> and the <em class="item-9">stuff</em>) into a bowl and mix thoroughly with your hands. Roll a few (four to six) balls, and throw them onto a plate. Flatten them some more until they are about 1.5 to 2 cm thick.</p>

			<p>Select and prepare the <span class="item-9">stuff</span> you want on your hamburger, like salad, tomatoes, mustard, rucola, pickles, or whatever.</p>

			<h2>Cooking</h2>
			<p>Turn on the grill. Or the barbecue. On my grill, with the door a bit open, the hamburgers will need about 14 minutes per side. On a hot barbecue they’re done much faster. Maybe four minutes per side, not much more.</p>

			<p>Eat with or without <span class="item-8">bread</span>, with or without <span class="item-9">stuff</span>, with or without Flemish fries. Remember to use the leftover <span class="item-5">egg white</span> to create some <a href="../meringues/">meringues</a></p>
		</div>
	</article>
<?php include '../footer.php'; ?>
