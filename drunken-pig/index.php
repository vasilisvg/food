<?php
$title = 'Drunken Pig';
include '../head.php';
?>
.recipe h1 {
	font-size: 22.9vw;
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
				<li><span class="item-1">1 or more pork tenderloins</span></li>
				<li><span class="item-2">Enough wine</span></li>
				<li><span class="item-3">Garlic</span></li>
				<li><span class="item-4">Thyme</span></li>
				<li><span class="item-5">Pepper and salt</span></li>
				<li><span class="item-6">Mustard</span></li>
			</ul>
		</aside>
		<div>
			<h2>Prep</h2>
			<p>Mix the <span class="item-2">wine</span>, the pressed <span class="item-3">garlic</span>, the <span class="item-4">thyme</span>, the <span class="item-6">mustard</span>, the <span class="item-5">pepper and the salt</span>. Put it in a marinade bag and add the <span class="item-1">pork tenderloin</span>. Close it. I always massage it a little bit before I put it in the fridge. Try to do this 24 hours before the party, but usually I remember it 8 hours before. Both are fine. </p>

			<h2>Cooking</h2>
			<p>Put the <span class="item-1">pork tenderloins</span> on the bbq and rotate them every now and then until they’re done. Enjoy.</p>
		</div>
	</article>
<?php include '../footer.php'; ?>
