<?php
$title = 'Salade de Carottes';
include '../head.php';
?>
.recipe h1 {
	font-size: 15.6vw;
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
				<li><span class="item-1">Carrots</span></li>
			</ul>
		</aside>
		<div>
			<h2>Prep</h2>
			<p>Open the bag of cleaned <span class="item-1">carrots</span>.</p>

			<h2>Cooking</h2>
			<p>Don’t cook them. Serve raw, in a bowl.</p>
		</div>
	</article>
<?php include '../footer.php'; ?>
