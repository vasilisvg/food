<?php
$title = 'Puree di Papa';
include '../head.php';
?>
header h1 {
	font-size: 20.4vw;
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
				<li><span class="item-1">Olive oil</span></li>
				<li><span class="item-2">Mashed potatoes</span></li>
				<li><span class="item-3">Di Papa saus</span></li>
				<li><span class="item-4">Grated cheese</span></li>
			</ul>
		</aside>
		<div>
			<h2>Prep</h2>
			<p>Make <a href="../mashed-potatoes/"><span class="item-2">mashed potatoes</span></a>. Make <a href="../pasta-di-papa/"><span class="item-3">Di Papa saus</span></a>.</p>

			<h2>Cooking</h2>
			<p>Preheat the oven on 180-200°C.</p>
			<p>Grease a big oven dish with <span class="item-1">olive oil</span>. Add a layer of <span class="item-2">mashed potatoes</span>. Add a layer of <span class="item-1">Di Papa saus</span>, using a spatula with holes. The meat saus should not be too watery. Add a layer of <span class="item-4">grated cheese</span>. Add a final layer of <span class="item-2">mashed potatoes</span>.</p>
			<p>Put it in the over for an hour</p>
			<p>It will need some time to cool down before you eat it, which is frustrating. But you should, you will burn your mouth.</p>
		</div>
	</article>
<?php include '../footer.php'; ?>
