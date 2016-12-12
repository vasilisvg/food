<?php
function ftoc($a) {
	$a = explode(' ', $a);
	$l = count($a);
	$i = 0;
	while ($i < $l) {
		if ( $a[$i][0] == "(" ) {
			$c = explode("(",$a[$i]);
			$a[$i] = $c[1];
			$b = "(";
		}
		if (is_numeric($a[$i])) {
			$a[$i] = round(($a[$i] - 32) / 1.8,1);
		}
		$html .= $b . $a[$i] . " ";
		$b = '';
		$i++;
	}
	return $html;
}
function ounceToGram($a) {
	$a = explode(' ', $a);
	$l = count($a);
	$i = 0;
	while ($i < $l) {
		if ( $a[$i][0] == "(" ) {
			$c = explode("(",$a[$i]);
			$a[$i] = $c[1];
			$b = "(";
		}
		if (is_numeric($a[$i])) {
			$a[$i] = round($a[$i] * 28.349,1);
		}
		$html .= $b . $a[$i] . " ";
		$b = '';
		$i++;
	}
	return $html;
}
function tspToMl($a) {
	$a = explode(' ', $a);
	$l = count($a);
	$i = 0;
	while ($i < $l) {
		if ( $a[$i][0] == "(" ) {
			$c = explode("(",$a[$i]);
			$a[$i] = $c[1];
			$b = "(";
		}
		if (is_numeric($a[$i])) {
			$a[$i] = round($a[$i] * 4.929,1);
		}
		$html .= $b . $a[$i] . " ";
		$b = '';
		$i++;
	}
	return $html . ' millimeters';
}
function tbspToMl($a) {
	$a = explode(' ', $a);
	$l = count($a);
	$i = 0;
	while ($i < $l) {
		if ( $a[$i][0] == "(" ) {
			$c = explode("(",$a[$i]);
			$a[$i] = $c[1];
			$b = "(";
		}
		if (is_numeric($a[$i])) {
			$a[$i] = round($a[$i] * (4.929 * 3),1);
		}
		$html .= $b . $a[$i] . " ";
		$b = '';
		$i++;
	}
	return $html . ' millimeters';
}
function cupToMl($a) {
	$a = explode(' ', $a);
	$l = count($a);
	$i = 0;
	while ($i < $l) {
		if ( $a[$i][0] == "(" ) {
			$c = explode("(",$a[$i]);
			$a[$i] = $c[1];
			$b = "(";
		}
		if (is_numeric($a[$i])) {
			$a[$i] = round($a[$i] * (4.929 * 48),1);
		}
		$html .= $b . $a[$i] . " ";
		$b = '';
		$i++;
	}
	return $html . ' millimeters';
}
function roundDown($number){
    return round($number * 2) / 2;
}
$title = 'Cooking Tables';
include '../head.php';
?>
header h1 {
	font-size: 19.2vw;
}
tr:nth-of-type
	</style>
</head>
<body>
	<article class="recipe">
		<header>
			<h1><?php echo $title; ?></h1>
		</header>

		<div class="tables">
			<table>
				<caption>
					Donneness of food
				</caption>
				<thead>
					<tr>
						<th>Ingredient</th>
						<th>Temperature</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th colspan="2">Beef/Lamb</th>
					</tr>
					<tr>
						<th>Rare</th>
						<td><?php echo ftoc("115 to 120 degrees (120 to 125 degrees after resting)"); ?></td>
					</tr>
					<tr>
						<th>Medium-Rare</th>
						<td><?php echo ftoc("120 to 125 degrees (125 to 130 degrees after resting)"); ?></td>
					</tr>
					<tr>
						<th>Medium</th>
						<td><?php echo ftoc("130 to 135 degrees (135 to 140 degrees after resting)"); ?></td>
					</tr>
					<tr>
						<th>Medium-Well</th>
						<td><?php echo ftoc("140 to 145 degrees (145 to 150 degrees after resting)"); ?></td>
					</tr>
					<tr>
						<th>Well-Done</th>
						<td><?php echo ftoc("150 to 155 degrees (155 to 160 degrees after resting)"); ?></td>
					</tr>
					<tr>
						<th colspan="2">Pork</th>
					</tr>
					<tr>
						<th>Medium</th>
						<td><?php echo ftoc("140 to 145 degrees (145 to 150 degrees after resting)"); ?></td>
					</tr>
					<tr>
						<th>Well-Done</th>
						<td><?php echo ftoc("150 to 155 degrees (155 to 160 degrees after resting)"); ?></td>
					</tr>
					<tr>
						<th colspan="2">Chicken</th>
					</tr>
					<tr>
						<th>White meat</th>
						<td><?php echo ftoc("160 degrees"); ?></td>
					</tr>
					<tr>
						<th>Dark meat</th>
						<td><?php echo ftoc("175 degrees"); ?></td>
					</tr>
					<tr>
						<th colspan="2">Fish</th>
					</tr>
					<tr>
						<th>Rare</th>
						<td><?php echo ftoc("110 degrees (for tuna only)"); ?></td>
					</tr>
					<tr>
						<th>Medium Rare</th>
						<td><?php echo ftoc("125 degrees (for tuna or salmon)"); ?></td>
					</tr>
					<tr>
						<th>Medium</th>
						<td><?php echo ftoc("140 degrees (for white fleshed fish)"); ?></td>
					</tr>
					<tr>
						<th colspan="2">Other stuff</th>
					</tr>
					<tr>
						<th>Oil, for frying</th>
						<td><?php echo ftoc("325 to 375 degrees"); ?></td>
					</tr>
					<tr>
						<th>Sugar, for caramel</th>
						<td><?php echo ftoc("350 degrees"); ?></td>
					</tr>
					<tr>
						<th>Custard, for ice-cream</th>
						<td><?php echo ftoc("180 degrees"); ?></td>
					</tr>
				</tbody>
			</table>
			<table>
				<caption>
					Common, and Oven Temperatures
				</caption>
				<tr>
					<th>F</th>
					<th>C</th>
					<th>Gas</th>
				</tr>
				<tr>
					<td>0</td>
					<td><?php echo ftoc("0"); ?></td>
					<td></td>
				</tr>
				<tr>
					<td>10</td>
					<td><?php echo ftoc("10"); ?></td>
					<td></td>
				</tr>
				<tr>
					<td>20</td>
					<td><?php echo ftoc("20"); ?></td>
					<td></td>
				</tr>
				<tr>
					<td>30</td>
					<td><?php echo ftoc("30"); ?></td>
					<td></td>
				</tr>
				<tr>
					<td>40</td>
					<td><?php echo ftoc("40"); ?></td>
					<td></td>
				</tr>
				<tr>
					<td>50</td>
					<td><?php echo ftoc("50"); ?></td>
					<td></td>
				</tr>
				<tr>
					<td>60</td>
					<td><?php echo ftoc("60"); ?></td>
					<td></td>
				</tr>
				<tr>
					<td>70</td>
					<td><?php echo ftoc("70"); ?></td>
					<td></td>
				</tr>
				<tr>
					<td>80</td>
					<td><?php echo ftoc("80"); ?></td>
					<td></td>
				</tr>
				<tr>
					<td>90</td>
					<td><?php echo ftoc("90"); ?></td>
					<td></td>
				</tr>
				<tr>
					<td>100</td>
					<td><?php echo ftoc("100"); ?></td>
					<td></td>
				</tr>
				<tr>
					<td>110</td>
					<td><?php echo ftoc("110"); ?></td>
					<td></td>
				</tr>
				<tr>
					<td>115</td>
					<td><?php echo ftoc("115"); ?></td>
					<td></td>
				</tr>
				<tr>
					<td>120</td>
					<td><?php echo ftoc("120"); ?></td>
					<td></td>
				</tr>
				<tr>
					<td>125</td>
					<td><?php echo ftoc("125"); ?></td>
					<td></td>
				</tr>
				<tr>
					<td>130</td>
					<td><?php echo ftoc("130"); ?></td>
					<td></td>
				</tr>
				<tr>
					<td>135</td>
					<td><?php echo ftoc("135"); ?></td>
					<td></td>
				</tr>
				<tr>
					<td>140</td>
					<td><?php echo ftoc("140"); ?></td>
					<td></td>
				</tr>
				<tr>
					<td>145</td>
					<td><?php echo ftoc("145"); ?></td>
					<td></td>
				</tr>
				<tr>
					<td>150</td>
					<td><?php echo ftoc("150"); ?></td>
					<td></td>
				</tr>
				<tr>
					<td>155</td>
					<td><?php echo ftoc("155"); ?></td>
					<td></td>
				</tr>
				<tr>
					<td>160</td>
					<td><?php echo ftoc("160"); ?></td>
					<td></td>
				</tr>
				<tr>
					<td>175</td>
					<td><?php echo ftoc("175"); ?></td>
					<td></td>
				</tr>
				<tr>
					<td>180</td>
					<td><?php echo ftoc("180"); ?></td>
					<td></td>
				</tr>
				<tr>
					<td>225</td>
					<td><?php echo ftoc("225"); ?></td>
					<td>1/4</td>
				</tr>
				<tr>
					<td>250</td>
					<td><?php echo ftoc("250"); ?></td>
					<td>1/2</td>
				</tr>
				<tr>
					<td>275</td>
					<td><?php echo ftoc("275"); ?></td>
					<td>1</td>
				</tr>
				<tr>
					<td>300</td>
					<td><?php echo ftoc("300"); ?></td>
					<td>2</td>
				</tr>
				<tr>
					<td>325</td>
					<td><?php echo ftoc("325"); ?></td>
					<td>3</td>
				</tr>
				<tr>
					<td>350</td>
					<td><?php echo ftoc("350"); ?></td>
					<td>4</td>
				</tr>
				<tr>
					<td>375</td>
					<td><?php echo ftoc("375"); ?></td>
					<td>5</td>
				</tr>
				<tr>
					<td>400</td>
					<td><?php echo ftoc("400"); ?></td>
					<td>6</td>
				</tr>
				<tr>
					<td>425</td>
					<td><?php echo ftoc("425"); ?></td>
					<td>7</td>
				</tr>
				<tr>
					<td>450</td>
					<td><?php echo ftoc("450"); ?></td>
					<td>8</td>
				</tr>
				<tr>
					<td>475</td>
					<td><?php echo ftoc("475"); ?></td>
					<td>9</td>
				</tr>
			</table>
			<table>
				<caption>
					Conversion for ingredients commonly used in baking
				</caption>
				<tr>
					<th>Ingredient</th>
					<th>Ounces</th>
					<th>Grams</th>
				</tr>
				<tr>
					<td>1 cup all-purpose flour</td>
					<td>5</td>
					<td><?php echo ounceToGram("5"); ?></td>
				</tr>
				<tr>
					<td>1 cup cake flour</td>
					<td>4</td>
					<td><?php echo ounceToGram("4"); ?></td>
				</tr>
				<tr>
					<td>1 cup whole-wheat flour</td>
					<td>5.5</td>
					<td><?php echo ounceToGram("5.5"); ?></td>
				</tr>
				<tr>
					<td>1 cup granulated (white) sugar</td>
					<td>7</td>
					<td><?php echo ounceToGram("7"); ?></td>
				</tr>
				<tr>
					<td>1 cup packed brown sugar (light or dark)</td>
					<td>7</td>
					<td><?php echo ounceToGram("7"); ?></td>
				</tr>
				<tr>
					<td>1 cup confectioner’s sugar</td>
					<td>4</td>
					<td><?php echo ounceToGram("4"); ?></td>
				</tr>
				<tr>
					<td>1 cup cocoa powder</td>
					<td>3</td>
					<td><?php echo ounceToGram("3"); ?></td>
				</tr>
				<tr>
					<td>1 tablespoon butter</td>
					<td>0.5</td>
					<td><?php echo ounceToGram(".5"); ?></td>
				</tr>
			</table>
			<table>
				<caption>
					Volume conversions
				</caption>
				<tr>
					<th>US</th>
					<th>Metric</th>
				</tr>
				<tr>
					<td>1 teaspoon</td>
					<td><?php echo tspToMl("1"); ?></td>
				</tr>
				<tr>
					<td>2 teaspoon</td>
					<td><?php echo tspToMl("2"); ?></td>
				</tr>
				<tr>
					<td>1 tablespoon</td>
					<td><?php echo tbspToMl("1"); ?></td>
				</tr>
				<tr>
					<td>2 tablespoon</td>
					<td><?php echo tbspToMl("2"); ?></td>
				</tr>
				<tr>
					<td>0.25 cup</td>
					<td><?php echo cupToMl(".25"); ?></td>
				</tr>
				<tr>
					<td>0.5 cup</td>
					<td><?php echo cupToMl(".5"); ?></td>
				</tr>
				<tr>
					<td>0.75 cup</td>
					<td><?php echo cupToMl(".75"); ?></td>
				</tr>
				<tr>
					<td>1 cup</td>
					<td><?php echo cupToMl("1"); ?></td>
				</tr>
				<tr>
					<td>1.25 cup</td>
					<td><?php echo cupToMl("1.25"); ?></td>
				</tr>
				<tr>
					<td>1.5 cup</td>
					<td><?php echo cupToMl("1.5"); ?></td>
				</tr>
				<tr>
					<td>2 cup</td>
					<td><?php echo cupToMl("2"); ?></td>
				</tr>
				<tr>
					<td>2.5 cup</td>
					<td><?php echo cupToMl("2.5"); ?></td>
				</tr>
				<tr>
					<td>3 cup</td>
					<td><?php echo cupToMl("3"); ?></td>
				</tr>
				<tr>
					<td>4 cup (1 quart)</td>
					<td><?php echo cupToMl("4"); ?></td>
				</tr>
				<tr>
					<td>4.226 cup (1.06 quart)</td>
					<td><?php echo cupToMl("4.226"); ?></td>
				</tr>
				<tr>
					<td>4 quarts (1 gallon)</td>
					<td><?php echo cupToMl("16"); ?></td>
				</tr>
			</table>
			<table>
				<caption>
					Weight conversions
				</caption>
				<tr>
					<th>Ounces</th>
					<th>Grams</th>
				</tr>
				<tr>
					<td>0.5</td>
					<td><?php echo ounceToGram(".5"); ?></td>
				</tr>
				<tr>
					<td>0.75</td>
					<td><?php echo ounceToGram(".75"); ?></td>
				</tr>
				<tr>
					<td>1</td>
					<td><?php echo ounceToGram("1"); ?></td>
				</tr>
				<tr>
					<td>1.5</td>
					<td><?php echo ounceToGram("1.5"); ?></td>
				</tr>
				<tr>
					<td>2</td>
					<td><?php echo ounceToGram("2"); ?></td>
				</tr>
				<tr>
					<td>2.5</td>
					<td><?php echo ounceToGram("2.5"); ?></td>
				</tr>
				<tr>
					<td>3</td>
					<td><?php echo ounceToGram("3"); ?></td>
				</tr>
				<tr>
					<td>3.5</td>
					<td><?php echo ounceToGram("3.5"); ?></td>
				</tr>
				<tr>
					<td>4</td>
					<td><?php echo ounceToGram("4"); ?></td>
				</tr>
				<tr>
					<td>4.5</td>
					<td><?php echo ounceToGram("4.5"); ?></td>
				</tr>
				<tr>
					<td>5</td>
					<td><?php echo ounceToGram("5"); ?></td>
				</tr>
				<tr>
					<td>6</td>
					<td><?php echo ounceToGram("6"); ?></td>
				</tr>
				<tr>
					<td>7</td>
					<td><?php echo ounceToGram("7"); ?></td>
				</tr>
				<tr>
					<td>8</td>
					<td><?php echo ounceToGram("8"); ?></td>
				</tr>
				<tr>
					<td>9</td>
					<td><?php echo ounceToGram("9"); ?></td>
				</tr>
				<tr>
					<td>10</td>
					<td><?php echo ounceToGram("10"); ?></td>
				</tr>
				<tr>
					<td>12</td>
					<td><?php echo ounceToGram("12"); ?></td>
				</tr>
				<tr>
					<td>16 (1 pound)</td>
					<td><?php echo ounceToGram("16"); ?></td>
				</tr>
			</table>
			<table>
				<caption>
					Storing food
				</caption>
				<tr>
					<th>Food</th>
					<th>Temperature</th>
				</tr>
				<tr>
					<td>Fish and shellfish</td>
					<td><?php echo ftoc("30 to 34 degrees"); ?></td>
				</tr>
				<tr>
					<td>Meat and poultry</td>
					<td><?php echo ftoc("32 to 36 degrees"); ?></td>
				</tr>
				<tr>
					<td>Dairy products</td>
					<td><?php echo ftoc("36 to 40 degrees"); ?></td>
				</tr>
				<tr>
					<td>Eggs</td>
					<td><?php echo ftoc("38 to 40 degrees"); ?></td>
				</tr>
				<tr>
					<td>Produce</td>
					<td><?php echo ftoc("40 to 45 degrees"); ?></td>
				</tr>
			</table>
			<h2>Cooling food</h2>
			<h3>Official (USA)</h3>
			<p>Cool it down to <?php echo ftoc("70"); ?> degrees within 2 hours, and to <?php echo ftoc("40"); ?> degrees in the four hours after that.</p>
			<h3>Practical:</h3>
			<p>Cool it down on the coutertop for an hour. It should be between <?php echo ftoc("80 and 90"); ?>. Put it in the fridge.</p>
		</div>
	</article>
<?php include '../footer.php'; ?>
