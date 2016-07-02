<?php
$title = 'Chicken Broth';
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
				<li><span class="item-1">1 leftover chicken</span></li>
				<li><span class="item-2">1 big onion</span></li>
				<li><span class="item-3">Some carrots</span></li>
				<li><span class="item-4">Laurel leaves</span></li>
				<li><span class="item-5">Thyme</span></li>
				<li><span class="item-6">Chicken drippings</span></li>
				<li><span class="item-7">Pepper</span></li>
			</ul>
		</aside>
		<div>
			<h2>What?</h2>
			<p>Instead of throwing away the leftovers from a nice <a href="../roast-chicken/">roast chicken</a>, you can cook it into a broth. This saves you one stock cube.</p>
			<h2>Prep</h2>
			<p>Eat the <a href="../roast-chicken/"><span class="item-1">chicken</span></a> until only the bones are left.</p>

			<p>Cut a large <span class="item-2">onion</span> in half. Cut some <span class="item-3">carrots</span> into pieces.</p>

			<h2>Cooking</h2>
			<p>Put <span class="item-6">everything</span> into a big pan with enough water to cover the chicken. Stir. Wait. Stir again. Enjoy the aroma. After three to four hours I’m usually left with 1.5—2 liters of excellent broth. I pour it trough a filter into one or two mason jars.</p>

			<p>You can use this broth as a base for your <a href="../chili-con-carne/">Chili con Carne</a>, or your <a href="../mercimek-corba/">Merçimek Çorba</a></p>
		</div>
	</article>
<?php include '../footer.php'; ?>
