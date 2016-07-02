<?php
$title = 'Cucumber Salad';
include '../head.php';
?>
.recipe h1 {
	font-size: 17.6vw;
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
				<li><span class="item-1">Cucumber</span></li>
			</ul>
		</aside>
		<div>
			<h2>Prep</h2>
			<p>Peel the <span class="item-1">cucumber</span>. Cut it into thick slices.</p>

			<h2>Cooking</h2>
			<p>Don’t cook it. Serve raw, in a bowl.</p>

		</div>
	</article>
<?php include '../footer.php'; ?>
