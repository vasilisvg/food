<?php
$title = 'Chili con Carne';
include '../head.php';
?>
header h1 {
	font-size: 18.9vw;
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
				<li><span class="item-2">2 finely chopped onions</span></li>
				<li><span class="item-3">1 red pepper</span></li>
				<li><span class="item-4">A few garlic cloves, pressed</span></li>
				<li><span class="item-5">Quite some paprika powder</span></li>
				<li><span class="item-6">A bit less ground cumin</span></li>
				<li><span class="item-7">600 gr minced beef</span></li>
				<li><span class="item-8">300 ml broth (chicken, or use a beef slock cube)</span></li>
				<li><span class="item-9">1 can of tomatoes, chopped</span></li>
				<li><span class="item-10">Oregano</span></li>
				<li><span class="item-11">Some tomato puree</span></li>
				<li><span class="item-12">A can of kidney beans (+/- 400 gr)</span></li>
				<li><span class="item-13">Soured cream</span></li>
				<li><span class="item-14">Rice</span></li>
			</ul>
		</aside>
		<div>
			<h2>Prep</h2>
			<p>Finely chop the <span class="item-2">onions</span>, cut the <span class="item-3">pepper</span> into small cubes, peel the <span class="item-5">garlic</span> and squash it using a press.</p>

			<h2>Cooking</h2>
			<p>Put <span class="item-1">olive oil</span> in a pan over medium heat. After a minute or so, add the <span class="item-2">onions</span>.</p>
			<p>After five minutes or so add the <span class="item-3">pepper</span>, the <span class="item-4">garlic</span>, the <span class="item-5">paprika powder</span> and the <span class="item-6">cumin</span>. <em>Stir regularly</em>. This would be about the right time to start heating the broth. If you don’t have some <a href="../chicken-broth/">home made <span class="item-8">chicken broth</span></a>: dissolve a beef stock cube into 300 ml of water.</p>
			<p>After five minutes, turn up the heat and add the <span class="item-7">meat</span>. Keep on stirring it until is brown.</p>
			<p>When the meat is brown, add the <span class="item-8">broth</span>, the <span class="item-9">tomatoes</span>, the <span class="item-10">oregano</span> and the <span class="item-11">tomato puree</span>. Add some pepper and salt, put on the lid and let it simmer for 20 minutes.</p>
			<p><em>It smells nice.</em></p>
			<p>Wash the <span class="item-12">beans</span> and add them. Let it simmer for another 10 minutes without the lid. It shouldn’t need extra water, but if it does, indeed add some.</p>
			<p>Put the lid back on, turn off the heat, and let it rest for 20 minutes. Which is not enough to cook <span class="item-14">rice</span>, so you probably want to start that a bit earlier. Serve the rice with the chili con carne with a spoonful of <span class="item-13">soured cream</span> on top.</p>
		</div>
	</article>
<?php include '../footer.php'; ?>
