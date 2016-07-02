<?php
$title = 'Mashed Potatoes';
include '../head.php';
?>
header h1 {
	font-size: 17.1vw;
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
				<li><span class="item-1">2 kg peeled potatoes</span></li>
				<li><span class="item-2">1 liter milk</span></li>
				<li><span class="item-3">125 gr of real butter</span></li>
				<li><span class="item-4">Pepper and salt</span></li>
				<li><span class="item-5">3 egg yolks</span></li>
			</ul>
		</aside>
		<div>
			<h2>Prep</h2>
			<p>There is no preparation if you buy <span class="item-1">peeled potatoes</span>.</p>

			<h2>Cooking</h2>
			<p>Cook the <span class="item-1">potatoes</span> in water. Add quite some <span class="item-4">salt</span> to the water. Cook for 15 minutes or so. Drain.</p>

			<p>Put the <span class="item-2">milk</span> on the heat. Add the <span class="item-3">butter</span>. Take care, your kitchen will turn into a mess when the milk starts cooking without your attention.</p>

			<p>Use a mixer or a masher to mash the <span class="item-1">potatoes</span>. Take your time to mash it as finely as possible. You do not want any lumps. <em>Puree</em> sounds smooth, and it should be smooth. Keep an eye on the <span class="item-2">milk</span>! Add the <span class="item-5">egg yolks</span>, <span class="item-4">pepper and salt</span>, and keep mashing.</p>

			<p>When the <span class="item-3">butter</span> has melted, and the <span class="item-2">milk</span> started cooking, slowly pour it into the potatoes while you keep mashing. The amount of milk you want to add depends on what you want to do with it. If you want to create <a href="../puree-di-papa">Puree di Papa</a> you'll need less than when you want to eat it with <a href="../drunken-cow/">Drunken Cow</a>. Taste it, you probably need to add more <span class="item-4">salt</span>.</p>

			<p>Use the leftover egg whites to create <a href="../meringues/">meringues</a>.</p>
		</div>
	</article>
<?php include '../footer.php'; ?>
