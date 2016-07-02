<style>
<?php
$h = mt_rand(0,259);
$i=0;
while($i < 14) {
	$h += 83;
	$s = mt_rand(50,60);
	$l = 89;
	echo ".recipe-list article:nth-of-type(".$i."n) a:hover, .recipe-list article:nth-of-type(".$i."n) a:focus { background: hsl($h, $s%, $l%); }";
	$i++;
}
if ($home !== 1) {
	$path = '../';
}
?>
</style>
<div>
	<article>
		<a href="<?php echo $path; ?>chicken-broth/">
			<h2>Chicken Broth</h2>
			<p>From the leftovers of the roast chicken</p>
		</a>
	</article>
	<article>
		<a href="<?php echo $path; ?>chili-con-carne/">
			<h2>Chili con Carne</h2>
			<p>Stew with red wine, served with tiny pasta (or whatever you like with stew)</p>
		</a>
	</article>
	<article>
		<a href="<?php echo $path; ?>chocolate-mud/">
			<h2>Dark Stracciatella Mud</h2>
			<p>Dark chocolate ice cream with extra bits of dark chocolate</p>
		</a>
	</article>
	<article>
		<a href="<?php echo $path; ?>drunken-cow/">
			<h2>Drunken Cow</h2>
			<p>Stew with red wine, served with tiny pasta (or whatever you like with stew)</p>
		</a>
	</article>
	<article>
		<a href="<?php echo $path; ?>drunken-pig/">
			<h2>Drunken Pig</h2>
			<p>Pork tenderloin marinaded in wine.</p>
		</a>
	</article>
	<article>
		<a href="<?php echo $path; ?>fakies-fuck-yes/">
			<h2>Fakiès? Fuck Yes!</h2>
			<p>Greek lentil soup. Perfect for the end of the month.</p>
		</a>
	</article>
	<article>
		<a href="<?php echo $path; ?>hamburgers/">
			<h2>Hamburgers</h2>
			<p>Hand made.</p>
		</a>
	</article>
	<article>
		<a href="<?php echo $path; ?>mashed-potatoes/">
			<h2>Mashed Potatoes</h2>
			<p>Simple but so, so nice.</p>
		</a>
	</article>
	<article>
		<a href="<?php echo $path; ?>mercimek-corba/">
			<h2>Mercimek Çorba</h2>
			<p>Turkish red lentil soup.</p>
		</a>
	</article>
	<article>
		<a href="<?php echo $path; ?>meringues/">
			<h2>Meringues</h2>
			<p>What to do with your leftover egg white.</p>
		</a>
	</article>
	<article>
		<a href="<?php echo $path; ?>pasta-di-papa/">
			<h2>Pasta di Papa</h2>
			<p>My take on pasta al ragu</p>
		</a>
	</article>
	<article>
		<a href="<?php echo $path; ?>puree-di-papa/">
			<h2>Puree di Papa</h2>
			<p>Mashed potatoes with Di Papa Saus in the oven.</p>
		</a>
	</article>
	<article>
		<a href="<?php echo $path; ?>roast-chicken/">
			<h2>Roast Chicken</h2>
			<p>With thyme. Excellent base for chicken stock.</p>
		</a>
	</article>
	<article>
		<a href="<?php echo $path; ?>spaghetti-carbonara/">
			<h2>Spaghetti Carbonara</h2>
			<p>No cream, just eggs.</p>
		</a>
	</article>
	<article>
		<a href="<?php echo $path; ?>tsipoura/">
			<h2>Tsipoúra</h2>
			<p>Dorade in a crust of salt for your barbecue pleasure.</p>
		</a>
	</article>
</div>
